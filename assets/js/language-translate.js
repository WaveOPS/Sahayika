// Define the Google Translate API key
const apiKey = "AIzaSyBLmIEUfOqnh_at6JRUvt64pQjgV1_i7dc"; // Replace with your Google Cloud API key

// Function to initialize language translation
function initializeLanguageSelector() {
  const languageSelector = document.getElementById("languageSelector");

  // Apply saved language on page load
  const savedLanguage = localStorage.getItem("selectedLanguage");
  if (savedLanguage) {
    if (languageSelector) {
      languageSelector.value = savedLanguage;
    }
    applyLanguage(savedLanguage); // Apply the saved language
  }

  // Add event listener for language selection
  if (languageSelector) {
    languageSelector.addEventListener("change", function () {
      const targetLanguage = this.value;
      localStorage.setItem("selectedLanguage", targetLanguage); // Save the selected language
      applyLanguage(targetLanguage);
    });
  }
}

// Function to apply the selected language
function applyLanguage(targetLanguage) {
  const elementsToTranslate = document.querySelectorAll("body *:not(script):not(style)");

  elementsToTranslate.forEach((element) => {
    if (element.childNodes.length === 1 && element.childNodes[0].nodeType === Node.TEXT_NODE) {
      // Only translate text nodes to avoid disturbing the UI
      const originalText = element.innerText.trim();
      if (originalText !== "") {
        fetch(`https://translation.googleapis.com/language/translate/v2?key=${apiKey}`, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({
            q: originalText,
            target: targetLanguage,
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            if (data.data && data.data.translations && data.data.translations[0]) {
              // Update only the text content, preserving styles and classes
              element.childNodes[0].nodeValue = data.data.translations[0].translatedText;
            }
          })
          .catch((error) => console.error("Error translating text:", error));
      }
    }
  });

  // Explicitly translate navbar elements
  const navbarElements = document.querySelectorAll("#navbar-main .nav-link, #navbar-main .dropdown-item");
  navbarElements.forEach((element) => {
    const originalText = element.innerText.trim();
    if (originalText !== "") {
      fetch(`https://translation.googleapis.com/language/translate/v2?key=${apiKey}`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          q: originalText,
          target: targetLanguage,
        }),
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.data && data.data.translations && data.data.translations[0]) {
            element.innerText = data.data.translations[0].translatedText;
          }
        })
        .catch((error) => console.error("Error translating navbar text:", error));
    }
  });
}
