<!DOCTYPE HTML>  
<html>
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="css/styles.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"> </script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <title> Green Knight&apos;s Test page </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
         .error {color: #FF0000;}
        </style>
    </head>
    <body>

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
                         if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
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

        <?php
                 $server_name = "localhost";
                 $user_name = "root";
                 $password = "mysql";
                 $db_name = "Acterra";

                 /*
                  * will be moving to PDO from NOT mysqli
                  * connect to DB, create table
                  */
                 try {
                     $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $password);
                     // set the PDO error mode to exception
                     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     echo "Connected successfully<br>";

                     $sql = "CREATE TABLE IF NOT EXISTS test
                             (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                             first_name VARCHAR(30) NOT NULL,
                             email VARCHAR(50))";

                     $conn->exec($sql);

                 } catch(PDOException $e) {
                     echo "Connection failed: " . $e->getMessage();
                 }

                 /*
                  *
                  */
                 try {
                     $sql = "INSERT INTO test (first_name, email)
                             VALUES ('shwe', 'saye@mail.sfsu.edu')";
                     $conn->exec($sql);
                     echo "New recorded added to DB";
                 } catch (PDOException $e) {
                     echo $sql . "<br>" . $e->getMessage();
                 }

                 $conn = null;
        /*
           // Create connection
           $conn = new mysqli($servername, $username, $password, $dbname);

           // Check connection
           if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
           }
           echo "Connected successfully";
         */

        /*
         * don't want to print this
           //Print
           $sql = "SELECT ID, Name FROM location ";
           $result = $conn->query($sql);

           if ($result->num_rows > 0) {
           // output data of each row
           while($row = $result->fetch_assoc()) {
           echo  "ID: " . $row["ID"]. " and Name: " . $row["Name"]. "<br>";
           }
           } else {
           echo "0 results";
           }
         */
        ?>

        <h2> Testing DataBase Connections </h2>
        <!--
             <p><span class="error">* required field.</span></p>
             <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
             Name: <input type="text" name="name" value="<?php echo $name;?>">
             <span class="error">* <?php echo $nameErr;?></span>
             <br><br>
             E-mail: <input type="text" name="email" value="<?php echo $email;?>">
             <span class="error">* <?php echo $emailErr;?></span>
             <br><br>
             Website: <input type="text" name="website" value="<?php echo $website;?>">
             <span class="error"><?php echo $websiteErr;?></span>
             <br><br>
             Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
             <br><br>
             Gender:
             <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
             <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
             <span class="error">* <?php echo $genderErr;?></span>
             <br><br>
             <input type="submit" name="submit" value="Submit">
             </form>
           -->

        <div class="smart-wrap">
            <div class="smart-forms smart-container wrap-2">
                <div class="form-header header-primary">
                    <h4><i class="fa fa-pencil-square"></i>Volunteer</h4></div><!-- end .form-header section -->
                    <form method="post" id="new_post" name="new_post"  action="" class="wpcf7-form" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="spacer-b30">
                                <div class="tagline"><span>Please Fill all Fields</span></div><!-- .tagline -->
                            </div>
                            <div class="section">
                                <label class="field select">
                                    <select id="location" name="location">
                                        <option value="">Select Location</option>
                                        <option value="AS">Arastradero</option>
                                        <option value="FH">Foothills</option>
                                        <option value="BT">Bay Trail</option>
                                        <option value="RG">Redwood Grove</option>
                                        <option value="Nu">Nursery</option>
                                    </select>
                                    <i class="arrow double"></i>
                                </label>
                            </div><!-- end section -->

                            <div class="section">
                                <label class="field select">
                                    <select id="event_type" name="event_type">
                                        <option value="">Type of Event</option>
                                        <option value="AS">Workday</option>
                                        <option value="FH">Educational</option>
                                    </select>
                                    <i class="arrow double"></i>
                                </label>
                            </div><!-- end section -->

                            <div class="section">
                                <label for="file1" class="field file">
                                    <span class="button btn-primary btn-sm"> Upload Image </span>
                                    <input type="file" class="gui-file" name="upload1" id="file1" onChange="document.getElementById('uploader1').value = this.value;">
                                    <input type="text" class="gui-input" id="uploader1" placeholder="" readonly>
                                </label>
                            </div>

                            <div class="spacer-t40 spacer-b40">
                                <div class="tagline"><span>Number of Volunteers</span></div><!-- .tagline -->
                            </div>

                            <div class="frm-row">

                                <div class="section colm colm6">
                                    <input type="number" name="youth_volunteer" id="youth_volunteer" class="gui-input " placeholder="Youth Volunteers">
                                </div><!-- end section -->

                                <div class="section colm colm6">
                                    <input type="number" name="adult_volunteer" id="adult_volunteer" class="gui-input " placeholder="Adult Volunteers">
                                </div><!-- end section -->


                            </div><!-- end .frm-row section -->

                            <div class="section">
                                <label for="comment" class="field prepend-icon">
                                    <textarea class="gui-textarea" id="comment" name="comment" placeholder="Your comment"></textarea>
                                    <label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
                                    <span class="input-hint">
                            	        <strong>HINT:</strong> Add any other details ...
                                    </span>
                                </label>
                            </div><!-- end section -->

                        </div><!-- end .form-body section -->
                        <div class="form-footer">
                            <button type="submit" class="button btn-primary"> Validate </button>
                            <button type="reset" class="button"> Cancel </button>
                        </div><!-- end .form-footer section -->
                    </form>

            </div><!-- end .smart-forms section -->
        </div><!-- end .smart-wrap section -->


        <!--
             <?php
                 echo "<h2>Your Input:</h2>";
                 echo $name;
                 echo "<br>";
                 echo $email;
                 echo "<br>";
                 echo $website;
                 echo "<br>";
                 echo $comment;
                 echo "<br>";
                 echo $gender;
             ?>
           -->
    </body>
</html>
