<!DOCTYPE HTML>
<html>
<head>
    <title>Projects</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/projects.css">
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
      <section class="hidden">
        <div class="main_top" style="height: 75%; margin-top: 10%; margin-bottom: 10%;">
            <div class="text" style="font-size: 200px;">
                <span class="drop_word">Projects</span>
            </div>
            <div class="sub_text drop_word delayed_drop_word">
                I'm passionate about creating projects that fit my taste.
            </div>
        </div>
      </section>

      <!-- Gotten from a Source Code -->
      <section class = "hidden">
        <div class = "cards_projects_main">
          <div class = "row">
            <a href="academic_project.php" class="card hidden2" style="transition: 2s;">
              <div class="img-avatar">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                </svg>
              </div>
              <div class="card-text">

                 <div class="portada">
                  <img src="assets/projects/apc-building.jpg" alt="Academic Project">
                 </div>

                 <div class="title-total">
                    <div class="title">Project 1</div>
                    <h2>Academic Projects</h2>
                    <div class="desc">All of the Academic Projects I've compiled over the past few years.
                      From Senior Highschool to College!
                    </div>
                    <div class="actions">
                       <button><i class="far fa-heart"></i></button>
                       <button><i class="far fa-envelope"></i></button>
                       <button><i class="fas fa-user-friends"></i></button>
                    </div>
                 </div>
              </div>
            </a>

            <a href="personal_project.php" class="card hidden2" style="transition: 2s;">              
              <div class="img-avatar">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                </svg>
              </div>
              <div class="card-text">
                 <div class="portada">
                  <img src="assets/projects/personal_project.jpg" alt="Project Image">

                 </div>
                 <div class="title-total">
                    <div class="title">Project 2</div>
                    <h2>Personal Projects</h2>
                    <div class="desc">Personal Projects that made my life easier, or perhaps just to practice programming.</div>
                    <div class="actions">
                       <button><i class="far fa-heart"></i></button>
                       <button><i class="far fa-envelope"></i></button>
                       <button><i class="fas fa-user-friends"></i></button>
                    </div>
                 </div>
              </div>
            </a>
          </div>

        </div>

     </section>

      <!-- Footer Created -->
      
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