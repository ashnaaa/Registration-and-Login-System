<?php
    require('connection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['login'])) {
        $email = stripslashes($_REQUEST['email']);    

        // removes backslashes
        
        $email = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['pswrd']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `registrationform`";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        //$rows = mysqli_num_rows($result);
        if ($rows = mysqli_num_rows($result)) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect email/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>index</a> again.</p>
                  </div>";
        }
    } 
?>