<!DOCTYPE HTML>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
    <link rel="stylesheet" type = "text/css" href = "css/cursor.css">
    <link rel="stylesheet" type = "text/css" href = "css/contact_cards.css">

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

      <section class="hidden">
      <div class="cards">
          <div class="card card-1">
            <div class="card__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-github" viewBox="0 0 32 32">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
</svg></div>
            <p class="card__exit">GitHub</p>
            <h2 class="card__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
            <p class="card__apply">
              <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
            </p>
          </div>
          <div class="card card-2">
            <div class="card__icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
</svg></div>
            <p class="card__exit">LinkedIn</p>
            <h2 class="card__title">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
            <p class="card__apply">
              <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
            </p>
          </div>
          <div class="card card-3">
            <div class="card__icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
  <path d="M13.545 2.907a13.2 13.2 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.2 12.2 0 0 0-3.658 0 8 8 0 0 0-.412-.833.05.05 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.04.04 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032q.003.022.021.037a13.3 13.3 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019q.463-.63.818-1.329a.05.05 0 0 0-.01-.059l-.018-.011a9 9 0 0 1-1.248-.595.05.05 0 0 1-.02-.066l.015-.019q.127-.095.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.05.05 0 0 1 .053.007q.121.1.248.195a.05.05 0 0 1-.004.085 8 8 0 0 1-1.249.594.05.05 0 0 0-.03.03.05.05 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.2 13.2 0 0 0 4.001-2.02.05.05 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.03.03 0 0 0-.02-.019m-8.198 7.307c-.789 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612"/>
</svg></div>
            <p class="card__exit">Discord</p>
            <h2 class="card__title">Ut enim ad minim veniam.</h2>
            <p class="card__apply">
              <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
            </p>
          </div>
          <div class="card card-4">
            <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p>
            <h2 class="card__title">Quis nostrud exercitation ullamco laboris nisi.</h2>
            <p class="card__apply">
              <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
            </p>
          </div>
          <div class="card card-5">
            <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p>
            <h2 class="card__title">Ut aliquip ex ea commodo consequat. Duis aute irure dolor.</h2>
            <p class="card__apply">
              <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
            </p>
          </div>
          <div class="card card-1">
            <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p>
            <h2 class="card__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
            <p class="card__apply">
              <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
            </p>
          </div>
        </div>
      </section>

      <div class="comments_section">

      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webprogss221";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        // Perform a SQL query to count the total number of comments
        $sql = "SELECT COUNT(*) AS total_comments FROM edgumba_myguest";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Fetch the result as an associative array
            $row = mysqli_fetch_assoc($result);
            
            // Access the total_comments value from the array
            $total_comments = $row['total_comments'];
            $total_comments++; // Increment + 1 to the total comments since John Doe place holder.
            // Output the total number of comments
            echo "<div class='title_main'>
                    <div>Guest Comments!
                    <span class='total_comments'><br>&nbsp Total number: $total_comments</span>
                    </div>
                </div>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
        ?>

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

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "webprogss221";
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              throw new Exception("Connection failed: " . $conn->connect_error);
          }

          // Perform a SQL query to count the total number of comments
          $sql = "SELECT COUNT(*) AS total_comments FROM edgumba_myguest";
          $result = mysqli_query($conn, $sql);

          if ($result) {
              // Fetch the result as an associative array
              $row = mysqli_fetch_assoc($result);
              
              // Access the total_comments value from the array
              $total_comments = $row['total_comments'];
              
          } else {
              echo "Error: " . mysqli_error($conn);
          }

          if(isset($_POST["comment_submit"])) {
              if(isset($_FILES["input_file"]) && $_FILES["input_file"]["size"] > 0) {
                  $target_file = $target_dir . basename($_FILES["input_file"]["name"]);
                  $check = getimagesize($_FILES["input_file"]["tmp_name"]);
                  if($check !== false) {
                      $uploadOk = 0;
                      if (move_uploaded_file($_FILES["input_file"]["tmp_name"], $target_file)) {
                        $new_target_file = $target_dir . ($total_comments+1). ".png";
                        rename($target_file, $new_target_file);
                        echo "The file ". basename( $_FILES["input_file"]["name"]). " has been uploaded and renamed.";
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

          mysqli_close($conn);

              try {
                  // PHP code to insert data to a database from the form
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "webprogss221";
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
                  if (isset($conn)) {
                      $conn->close();
                  }
              }
              // Move redirect and exit before any output
              if ($uploadOk || !isset($_FILES["input_file"])) {
                  header("Location: contact.php");
                  exit(); // Exit after setting the header
              }
          }
          ?>
          <?php
            try {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "webprogss221";

                // $servername = "localhost";
                // $username = "webprogss221";
                // $password = "=latHen97";
                // $dbname = "webprogss221";

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
                        $user_id = $row["user_id"];
            ?>
                        <div class="comment"> 
                            <div class="image_container">
                                <?php
                                // Construct the image path based on user ID
                                $image_path = "assets/comments_profiles/{$user_id}.png";
                                // Check if the image file exists
                                if (file_exists($image_path)) {
                                    echo "<img src=\"$image_path\" class=\"rounded_image\">";
                                } else {
                                    // If no image is found, display a default image
                                    echo "<img src=\"https://picsum.photos/536/354\" class=\"rounded_image\">";
                                }
                                ?>
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
    
        <div class = "title_main" style = "margin-top: 30px;">
            - End of Comments -        
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