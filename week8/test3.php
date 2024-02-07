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
            <div>Guest Comments!</div>
            <span class = "total_comments"> 2 </span>
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
                header("Location: test3.php");
                exit();
            }
        ?>

        <div class="comment"> 
            <div class="image_container">
                <img src="https://picsum.photos/536/354" class = "rounded_image">
            </div>
            <div class="comment_container">
                <div class="username">
                    John Doe
                </div>
                <div class="time_posted">
                    February 2, 2024
                </div>
                <div class="comment_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
                fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
                consequuntur!
                </div>
            </div>
        </div>

        <div class="comment">
            <div class="image_container">
                <img src="https://picsum.photos/536/354" class = "rounded_image">
            </div>
            <div class="comment_container">
                <div class="username">
                    John Doe
                </div>
                <div class="time_posted">
                    February 2, 2024
                </div>
                <div class="comment_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
                fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
                consequuntur!
                </div>
            </div>
        </div>
    </div>

</body>