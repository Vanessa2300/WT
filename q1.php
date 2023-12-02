<?php
echo "Form Name: Book Details Form";
echo "<br><br>";
// Get the form data
$book_name = $_POST['book_name'];
$author_name = $_POST['author_name'];
$publisher_name = $_POST['publisher_name'];
$synopsis = $_POST['synopsis'];
// Perform the validations
if (empty($book_name) || empty($author_name) || empty($publisher_name) || empty($synopsis)) {
    echo "Error: All fields must be filled in.";
    exit();
}
// Display the data entered successfully message
echo "----Data entered successfully!----";
echo "<br>";

// Display the form data
echo "Book Name: $book_name";
echo "<br>";
echo "Author Name: $author_name";
echo "<br>";
echo "Publisher Name: $publisher_name";
echo "<br>";
echo "Synopsis: $synopsis";
?>
