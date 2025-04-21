<?php
// Backend code remains the same
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ---------- BACKEND: Gemini API Call ----------
    $apiKey = "AIzaSyChdzGdhCTBmydVG-5chn-1TX6Y_K1uHX8";  // <-- Replace this with your actual API key
    $input = file_get_contents("php://input");

    $url = "https://generativelanguage.googleapis.com/v1/models/gemini-1.5-pro-001:generateContent?key=$apiKey"; // Updated model

    // Setup CURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $input);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    // Debugging: Log the response and error
    if ($error) {
        error_log("CURL Error: $error");
    } else {
        error_log("API Response: $response");
    }

    // Output the API response to frontend
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    echo $response;
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include ('fheader.php'); ?>

<body class="bg-white" id="top">

<?php include ('fnav.php'); ?>

<section class="section section-shaped section-lg">
  <head>
    <style>
      body {
        background: url('../assets/img/farm-bg8.jpg');
        background-size: cover;
        background-repeat: no-repeat;
      }
      .chat-container {
        background: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 10px 8px rgba(0, 0, 0, 0.9);
        opacity: 0.95;
        margin-top: 100px;
      }
    </style>
  </head>

  <!-- Chat Container -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto text-center">
        <span class="badge badge-pill mb-3" style="background-color: green; color: white;">Gemini Chat</span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="chat-container">
          <h2 class="text-center" style="color: #008000;">Sahayikya Your personal farming assistant 👧</h2>
          <div id="chat" style="border: 1px solid #ccc; padding: 10px; height: 300px; overflow-y: auto; background-color: #f9f9f9; border-radius: 8px; margin-bottom: 15px;"></div>
          <div>
            <input type="text" id="userInput" placeholder="Type a message..." size="50" class="form-control mb-2">
            <button onclick="sendMessage()" class="btn btn-success btn-block">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include ('footer.php'); ?>

<script>
  const chatBox = document.getElementById('chat');
  const userInput = document.getElementById('userInput');

  function appendMessage(sender, text) {
    const div = document.createElement('div');
    div.className = 'msg ' + (sender === 'User' ? 'user' : 'bot');
    div.textContent = `${sender}: ${text}`;
    chatBox.appendChild(div);
    chatBox.scrollTop = chatBox.scrollHeight;
  }

  async function sendMessage() {
    const inputText = userInput.value.trim();
    if (!inputText) return;

    appendMessage('User', inputText);
    userInput.value = '';

    try {
      const response = await fetch(location.href, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          contents: [
            {
              role: 'user',
              parts: [{ text: inputText }]
            }
          ]
        })
      });

      const data = await response.json();
      console.log('API Response:', data);

      const reply = data?.candidates?.[0]?.content?.parts?.[0]?.text || 'No response';
      appendMessage('Gemini', reply);
    } catch (error) {
      appendMessage('Gemini', '❌ Error: ' + error.message);
      console.error('Error:', error);
    }
  }
</script>
 <!-- Include the language-translate.js -->
 <script src="../assets/js/language-translate.js"></script>
  <script>
    // Initialize the language selector and apply the saved language
    initializeLanguageSelector();
  </script>
</body>

</body>
</html>
