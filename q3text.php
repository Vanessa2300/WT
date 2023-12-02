<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the text input from the form
    $textInput = $_POST['textInput'];

    // Display the entered information
    echo "You entered: " . $textInput;

    // File to store the entered text
    $file = 'stored_text.txt';

    // Save the text into a text file
    if (file_put_contents($file, $textInput . "\n", FILE_APPEND) !== false) {
        echo "<br>Data stored successfully.";
    } else {
        echo "<br>Error storing data.";
    }
}
?>
