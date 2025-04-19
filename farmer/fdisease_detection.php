<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // Get the uploaded file details
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        
        // Define allowed file types (image files)
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        
        if (in_array($fileType, $allowedTypes)) {
            // Save the uploaded image to a specific directory
            $uploadDir = 'uploads/';
            $uploadFilePath = $uploadDir . $fileName;

            if (move_uploaded_file($fileTmpPath, $uploadFilePath)) {
                // Command to run the Python script
                $pythonScriptPath = 'ML/disease_detection/predict.py';
                $command = escapeshellcmd("python $pythonScriptPath $uploadFilePath");
                $output = shell_exec($command);

                if ($output) {
                    $output = trim($output);
                    $parts = explode("|", $output);
                    
                    if (count($parts) === 2) {
                        $className = $parts[0];
                        $description = $parts[1];

                        echo "<p><strong>Info:</strong> $description</p>";
                    } else {
                        echo "<p>Unexpected output format: $output</p>";
                    }
                } else {
                    echo "<p>Something went wrong with prediction.</p>";
                }

            } else {
                echo "Error in uploading the file.";
            }
        } else {
            echo "Invalid file type. Only JPG, PNG, or GIF allowed.";
        }
    } else {
        echo "No file uploaded or there was an error with the file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Disease Detection</title>
</head>
<body>
    <h2>Upload an image to detect plant disease</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <input type="submit" value="Upload and Detect">
    </form>
</body>
</html>
