<!DOCTYPE>
<html>
<head>
  <title>Forms Test</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
    <link rel="stylesheet" type = "text/css" href = "css/cursor.css">

    <script defer src = "js/forms_validator.js"></script>
    <script defer src = "js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Connect to LastFM API -->
    <script type="text/javascript" src="js/last_fm/lastfm.api.cache.js"></script>
    <script type="text/javascript" src="js/last_fm/lastfm.api.js"></script>
    <script type="text/javascript" src="js/last_fm/lastfm.api.md5.js"></script>
    <script type="text/javascript" src="js/last_fm/last_fm_connector.js"></script>
</head>
<body>

    <header class = "nav_main">
        <nav class = "navigation">
            <div id="navbar">
            <a href="home.php">Home</a>
            <a href="projects.php">Projects</a>
            <a href="hobbies.php">Hobbies</a>
            <a href="contact.php">Contact</a>
            </div>
        </nav>
    </header>

    <!--Script for Mouse Cursos-->
    <div class = "cursor-dot" data-cursor-dot></div>
    <div class = "cursor-outline" data-cursor-outline></div>
    <script src = "js/cursor.js"></script>
 
    <div class="comments_section">

        <div class = "title_main">
            <div>Guest Comments!
            <span class = "total_comments"> 2 </span>
            </div>
        </div>

        <div class="comment_form" style = "display: row;">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="image_container">
                    <label for = "input-file"><img id="profile-image" src="https://picsum.photos/536/354" class="rounded_image"></label>
                    <input class="hide" type="file" accept="image/jpeg, image/png, image/jpg" name="input_file" id="input-file">
                </div>
                <div class="comment_container" style = "width: 100%; background-color: white;">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="Username" name="user_name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">Phone Number (Optional):</label>
                        <input type="text" id="mobileNumber" name="mobile_number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="comment_text">Comment:</label>
                        <textarea id="Comment" name="comment" required class="form-control comment_box"></textarea>
                    </div>
                    <button type="submit" name = "comment_submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

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
                
                try {
                    // PHP code to insert data to a database from the form

                   
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "webprogss221";
                    
                     /*
                    $servername = "localhost";
                    $username = "webprogss221";
                    $password = "=latHen97";
                    $dbname = "webprogss221";
                    */

                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        throw new Exception("Connection failed: " . $conn->connect_error);
                    }

                    // Taking all 5 values from the form data(input)
                    $user_name = $_REQUEST['user_name'];
                    $mobile_number = $_REQUEST['mobile_number'];
                    $comment = $_REQUEST['comment'];

                    // We are going to insert the data into our sampleDB table
                    $sql = "INSERT INTO edgumba_myguest VALUES (NULL, '$user_name', '$mobile_number', '$comment', CURRENT_TIMESTAMP)";

                    // Check if the query is successful
                    if(mysqli_query($conn, $sql)){
                        echo "<h3>data stored in a database successfully."
                            . " Please browse your localhost php my admin"
                            . " to view the updated data</h3>";

                        echo nl2br("\n$user_name\n $mobile_number\n "
                            . "$comment\n");
                    } else {
                        throw new Exception("Error: Hush! Sorry $sql. " . mysqli_error($conn));
                    }
                } catch (Exception $e) {
                    echo "Error: " . $e->getMessage();
                } finally {
                    // Close connection
                    $conn->close();
                }

                // Redirect after processing
                header("Location: test3.php");
                exit();
                }
             ?>

        <?php
            try {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "webprogss221";

                 /*
                $servername = "localhost";
                $username = "webprogss221";
                $password = "=latHen97";
                $dbname = "webprogss221";
                */

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    throw new Exception("Connection failed: " . $conn->connect_error);
                }

                // SQL Query to Get Comment Details
                $commentDetailsSql = "SELECT * FROM edgumba_myguest  ORDER BY date_posted DESC";
                $commentDetailsResult = $conn->query($commentDetailsSql);

                // Check if there are results
                if ($commentDetailsResult->num_rows > 0) {
                    // Loop through each comment
                    while ($row = $commentDetailsResult->fetch_assoc()) {
            ?>
                        <div class="comment"> 
                            <div class="image_container">
                                <img src="https://picsum.photos/536/354" class="rounded_image">
                            </div>
                            <div class="comment_container">
                                <div class="username">
                                    <?php echo $row["user_name"]; ?>
                                </div>
                                <div class="time_posted">
                                    <?php echo $row["date_posted"]; ?>
                                </div>
                                <div class="comment_text">
                                    <?php echo $row["comment"]; ?>
                                </div>
                            </div>
                        </div>
        <?php
                    }
                } else {
                    echo "0 results for comment details or you didnt make a table did ya?!";
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            } finally {
                // Close the database connection
                if (isset($conn)) {
                    $conn->close();
                }
            }
        ?>

</body>