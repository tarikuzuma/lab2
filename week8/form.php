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

    <section class = "hidden" style = "margin-top: 100px">
    
        <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            }
        }
        
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
        }
            
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>

        <h2>Guestbook</h2>

        <p><span class="error">* required field</span></p>

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

    </section>
      
    <?php
      try {
          // PHP code to insert data to a database from the form
          
          $servername = "localhost";
          $username = "webprogss221";
          $password = "=latHen97";
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
          $conn->close();
      }
    ?>
      
      <!-- Display the table -->
      <!-- Test -->
    <section = "hidden">

      <?php
        try {
            $servername = "localhost";
            $username = "webprogss221";
            $password = "=latHen97";
            $dbname = "webprogss221";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                throw new Exception("Connection failed: " . $conn->connect_error);
            }

            // SQL Query to Get Total Comments
            $totalCommentsSql = "SELECT COUNT(*) AS totalComments FROM edgumba_myguest";
            $totalCommentsResult = $conn->query($totalCommentsSql);

            // Check if there are results
            // Check if it is greater than 0 or else it will display 0 results
            if ($totalCommentsResult->num_rows > 0) {
                $totalCommentsRow = $totalCommentsResult->fetch_assoc();
                $totalComments = $totalCommentsRow["totalComments"];
                echo "<table><tr><th>Total Comments</th></tr><tr><td>$totalComments</td></tr></table>";
            } else {
                echo "0 results for total comments.. OR you didnt make a table did ya?";
            }

            // SQL Query to Get Comment Details
            $commentDetailsSql = "SELECT * FROM edgumba_myguest";
            $commentDetailsResult = $conn->query($commentDetailsSql);

            // Check if there are results
            if ($commentDetailsResult->num_rows > 0) {
                echo "<table><tr><th>User ID</th><th>User Name</th><th>Mobile Number</th><th>Comment</th><th>Date Posted</th></tr>";

                // Output data of each row. DEPENDENT on the SQL TABLE
                while ($row = $commentDetailsResult->fetch_assoc()) {
                    echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["user_name"] . "</td><td>" . $row["mobile_number"] . "</td><td>" . $row["comment"] . "</td><td>" . $row["date_posted"] . "</td></tr>";
                }

                echo "</table>";
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