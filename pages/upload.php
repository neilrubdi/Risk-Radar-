<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = "uploads/"; // Directory to store uploaded files
    $csvFile = $uploadDir . basename($_FILES["csvFile"]["name"]);
    $pdfFile = $uploadDir . basename($_FILES["pdfFile"]["name"]);
    $textFile = $uploadDir . basename($_FILES["textFile"]["name"]);
    $wordFile = $uploadDir . basename($_FILES["wordFile"]["name"]);

    // Check and move each uploaded file
    if (move_uploaded_file($_FILES["csvFile"]["tmp_name"], $csvFile)) {
        echo "CSV file uploaded successfully.";
    }
    if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $pdfFile)) {
        echo "PDF file uploaded successfully.";
    }
    if (move_uploaded_file($_FILES["textFile"]["tmp_name"], $textFile)) {
        echo "Text file uploaded successfully.";
    }
    if (move_uploaded_file($_FILES["wordFile"]["tmp_name"], $wordFile)) {
        echo "Word file uploaded successfully.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload Result</title>
</head>
<body>
    <a href="index.html">Back to Upload Page</a>
</body>
</html>
