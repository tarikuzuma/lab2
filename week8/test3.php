<!DOCTYPE>
<html>
<head>
  <title>Forms Test</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
    <link rel="stylesheet" type = "text/css" href = "css/cursor.css">

    <script defer src = "js/forms_validator.js"></script>
    <script defer src = "js/app.js"></script>

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
    
    <h2>Guest List!</h2>

    <form method ="post">
          <p>
              <label for="firstName">Username:</label>
              <input type="text" name="user_name" id="Username" required>
          </p>
          <p>
              <label for="mobileNumber">Mobile Number (Optional):</label>
              <input type="text" name="mobile_number" id="mobileNumber">
          </p>
          <p>
              <label for="Comment">Comment:</label>
              <textarea name="comment" id="Comment" rows="4" cols="50" required></textarea>
          </p>
          <input type="submit" value="Submit">
          
    </form>


    <div class="comments_section">

        <div class = "title_main">
            Guest Comments!
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