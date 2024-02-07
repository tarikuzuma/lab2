<!DOCTYPE HTML>
<html>
<head>
    <title>Contact</title>
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

    <!--Navigation Bar-->
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
  
      <section class="hidden">
        <div class="main_top" style="height: 75vh;">
            <div class="text" style="font-size: 200px;">
                <span class="drop_word">Contacts</span>
            </div>

            <div class="sub_text drop_word delayed_drop_word">
                Conatcts in the form of cards <br>
                !Coming Soon> WOW
            </div>
        </div>
      </section>

      <div class="comments_section">
        <div class = "title_main">
            <div>Guest Comments!</div>
            <span class = "total_comments"> 2 </span>
        </div>

        <div class="comment">
            <div class="image_container">
                <label for = "input-file"><img id="profile-image" src="https://picsum.photos/536/354" class="rounded_image"></label>
                <input class = "hide" type = "file" accept = "image/jpeg, image/png, image/jpg" id = "input-file">
            </div>
            <div class="comment_container" style = "width: 100%; background-color: white;">
                <form>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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



        

      <footer style = "margin-top: 100px; margin-bottom: 50px;">

        <div class = "row">
  
          <div class = "col">
            <div class = "col">
  
              <div class = "spotify" style = "width: 669px">
                <div class = "container">
                  <div class = "image">
                    <img src="assets/spotify.png">
                  </div>
                    <div class = "texts" 
                    style= "position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    justify-content: center;
                    text-align: center;">
                      <div class = "now">
                        Now Listening to:
                      </div>
                      <div id = "most_played_song">
                        <!-- Temporary-->
                        Teddy Picker
                      </div>
                      <div id = "most_played_author">
                        <!-- Temporary-->
                        by Arctic Monkeys     
                      </div>
                    </div>
                </div>
              </div>
  
            </div>
            <div class = "col" style = "padding-left: 40px; padding-top: 30px;">
            2023 . Edwin Gumba 
            </div>
          </div>
          <div class ="col">
            <div class ="col">
              Applications
            </div>
            <div class = "col">
              LinkedIn
            </div>
            <div class = "col">
              GitHub
            </div>
            <div class = "col">
              Discord
            </div>
            <div class = "col">
              Vlogs
            </div>
          </div>
  
          <div class = "col">
            <div class = "col">
              Contact
            </div>
            <div class = "col">
              Emails
            </div>
          </div>
        </div>
  
        <hr class = "line">
  
      </footer>
  

</body>
</html>