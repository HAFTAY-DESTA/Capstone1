

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    
    <nav>
      <h1 class="header1"> ኦን ላይን መስርሕን ሰራሕተኛን መራከቢ ትካል </h1>
      <ul>
        
        <li><a href="homepage.html">ዋና ገፅ</a></li>
        <li><a href="employer regn.html">መስርሒ</a></li>
        <li><a href="employee regn.html">ሰራሕተኛ</a></li>
        <li><a href="aboutus.html">ብዛዕባና</a></li>
      </ul>
    </nav>
    <button class="login1"><a href="#">ይእተዉ </a></button>
  </header>
  </header>

  <section class="body-bar">

   <div class="container">
    <h2>መእተዊ ቅጥዒ</h2>
    <form action="login.php" method="POST">
      <label for="username">ሽሞም የእትዉ</label>
      <input type="text" id="username" name="username" required>

      <label for="password">መሕለፊ ቃሎም የእትዉ</label>
      <input type="password" id="password" name="password" required>

      <label for="role">እጃሞም ይምረፁ</label>
      <select id="role" name="role">
        <option value="admin">Admin</option>
        <option value="employer">መስርሒ</option>
        <option value="employee">ሰራሕተኛ</option>
      </select>

      <input type="submit" value="ይእተዉ">
    </form>
  </div>

 </section>

  <footer>
    <p>&copy; Group 3 SWE Final project. All rights reserved.</p>
  </footer>
</body>
</html>

<?php
// Assuming database connection has already been established
$conn=mysqli_connect("localhost","root","","employment") or die("Connection Failed to database");
// Function to sanitize input data
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Retrieve the submitted form data
$username = sanitize($_POST['username']);
$password = sanitize($_POST['password']);
$role = sanitize($_POST['role']);

// Perform validation
if(!empty($username) && !empty($password) && !empty($role)){
    // Check credentials against the database table
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND role = '$role'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];
        $username = $row['username'];
        
        // Redirect based on the role
        if($role == 'admin'){

                  session_start();
                  $_SESSION["username"] = $username;
      
            header("Location: admin-page.php");
            exit();
        } elseif($role == 'employer'){

                  session_start();
                 $_SESSION["username"] = $username;
     
            header("Location: employer-page.php");
            exit();

        } elseif($role == 'employee'){
                   session_start();
                 $_SESSION["username"] = $username;
            header("Location: employee-page.php");
            exit();
        }

                // After verifying the login credentials
               if ($login_successful) {
                // Start the session
             session_start();
             // Set session variable to indicate the user is logged in
                 $_SESSION['username'] = $username;
           }

    } else {
        // Invalid credentials
        echo "Invalid username, password, or role.";
    }


}
?>


