<!DOCTYPE HTML>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type = "text/css" href = "css/cursor.css">
    <script defer src = "js/app.js"></script>

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

      <!-- Make a button that emails me! OMG THATS SO COOL! -->
      <section class = "hidden">
        <button class = "email_button">
          Email Me!
        </button>
      </section>


      <section class = "hidden">
        <h2>Comments</h2>

          <!-- Comment code in PHP -->

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
              print "<p>No comments yet.</p>";
          }
          ?>

          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <label for="comment">Add a comment:</label>
              <textarea name="comment" rows="4" cols="50"></textarea><br>
              <button type="submit">Submit</button>
          </form>

          <!-- Code essentially lets user comment -->
      </section>


        

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