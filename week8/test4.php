<html>
<body>

    <form = "post" action = "" method = "post" enctype = "multipart/form-data">
        <input type = "file" name = "input_file">
        <button type = "submit" accept="image/jpeg, image/png, image/jpg" name = "comment_submit">Upload</button>
    </form>

    <?php
        $target_dir = "assets/comments_profiles/";
        $uploadOk = 1;

        if(isset($_POST["comment_submit"])) {
            // Check if the file input is not empty
            if(isset($_FILES["input_file"]) && $_FILES["input_file"]["size"] > 0) {
                $target_file = $target_dir . basename($_FILES["input_file"]["name"]);
                $check = getimagesize($_FILES["input_file"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                    // Move the uploaded file to the desired directory
                    if (move_uploaded_file($_FILES["input_file"]["tmp_name"], $target_file)) {
                        echo "The file ". basename( $_FILES["input_file"]["name"]). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        $uploadOk = 0;
                    }
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            } else {
                echo "No file uploaded.";
                $uploadOk = 0;
            }
        }
    ?>

</body>
</html>