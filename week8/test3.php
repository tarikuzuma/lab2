<!DOCTYPE>
<html>
<head>
  <title>Edwin Gumba</title>
</head>
<body>
<h2>Comments</h2>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST["comment"];
    $date = date("Y-m-d H:i:s"); // Get the current date and time

    // Append the new comment to the comments file
    file_put_contents("comments.txt", "$date - $comment\n", FILE_APPEND);
}

// Read and display existing comments
$comments = file("comments.txt", FILE_IGNORE_NEW_LINES);
if ($comments) {
    foreach ($comments as $comment) {
        echo "<p>$comment</p>";
    }
} else {
    echo "<p>No comments yet.</p>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="comment">Add a comment:</label>
    <textarea name="comment" rows="4" cols="50"></textarea><br>
    <button type="submit">Submit</button>
</form>

</body>