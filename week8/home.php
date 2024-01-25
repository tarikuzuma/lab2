<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
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

    <!-- Second Section of Page -->
    <section class = "hidden">
      <div class = "main_top">
        <div class = "text">
          <div class = "typewriter">
            I'm Eddie.<br>
            your local dev.
          </div>
        </div>

        <div class = "press">
          <a href="#section1">Go to Main Page</a>
        </div>
      </div>
    </section>

    <section class = "hidden">
      <div class = "main_info" id = "section1">
        <div class = "left">
          <div class = "image_main">
            <img src="assets/profile.jpg">
          </div>

          <div class = "spotify">
            <div class = "container">
              <div class = "image">
                <img src="assets/spotify.png">
              </div>
                <div class = "texts">
                  <div class = "now">
                    Now Listening to:
                  </div>
                  <div id = "song_title">
                    <!-- Temporary-->
                    Daughter of a Cop
                  </div>
                  <div id = "song_author">
                    <!-- Temporary-->
                    by TV Girl      
                  </div>
                </div>
            </div>
          </div>

        </div>

        <div class = "right">
          <div class = "title_main job_title">
            Aspiring Software Developer
          </div>
          <div class="about">
            I'm passionate about programming and studying Computer Science. 
            It has honed my skills in web problem solving, software, web, and 
            game development. I believe in solving any problem given enough time. 
            I'm exploring diverse IT fields, aiming to become a software developer 
            while staying open to new opportunities.
          </div>

          <div class = "tags hidden2">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
              <path d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z"/>
              <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z"/>
            </svg>
            Profile Tags
          </div>

          <div class="attributes">
            <div class="tag tag1 hidden2">
                Open to Collaborations
            </div>
            <div class="tag tag2 hidden2">
                Willing to Learn
            </div>
            <div class="tag tag3 hidden2">
                Exploring Limits
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class ="hidden">
      
      <div class = "workspace_philosophy">
        <div class = "container">
          <div class = "title_main">
            Workspace Philosophy 
          </div>
    
          <div class = "text_main"">
            If you're looking for someone who's interested in Cybersecurity,
            Software, Game, and Web Development, then you've come to the right place.
            I'm a team player and I'm willing to learn new things. I'm also
            open to collaborations and I'm willing to explore new things.
            As long as there are given time periods, I beleive that all obstacles
            can be overcome.
          </div>
        </div>

        <div class = "tags">
          <div class = "first">
            <div class = "circle hidden2">
              <b>8</b>&nbsp;Organizations
            </div>
          </div>
          <div class ="second">
            <div class = "circle hidden2">
              <b>23 </b>&nbsp;Projects
            </div>
          </div>
          <div class = "third hidden2">
            <div class = "circle" style = "font-size: 24px; padding-left: 20px; padding-right: 20px;">
              BSCS Computer Sci - Software Systems
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class = "hidden" style = "margin-top: 100px; margin-bottom: 50px;">
      <div class = "table_info">
          <!-- For the first Row -->
          <div class="row" style = " margin-bottom: 1in;">

            <!-- PUT EACH COLUMN IN A DIV CALLED CONTAINER OF A CONTAINER FOR MARGIN AND RIGHT PADDING-->
            <div class = "main_col">
              <div class="number">
                01
              </div>
              <div class ="title">
                Think it? Make it!
              </div>
              <div class = "description">
                Let's make things happen! No matter the imagination.
              </div>
            </div>

            <div class = "main_col">
              <div class="number">
                02
              </div>
              <div class ="title">
                Agile is key!
              </div>
              <div class = "description">
                Agile leads to faster delivery, adaptability, and better quality.
              </div>
            </div>
            
          </div>

          <!-- For the Second Row -->
          <div class="row">

            <div class = "main_col">
              <div class="number">
                03
              </div>
              <div class ="title">
                Think it? Make it!
              </div>
              <div class = "description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit
              </div>
            </div>

            <div class = "main_col">
              <div class="number">
                04
              </div>
              <div class ="title">
                Agile is Key!
              </div>
              <div class = "description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit
              </div>
            </div>
          </div>
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