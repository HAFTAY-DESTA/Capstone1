
// Start a session
<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}
  ?>
  
<!DOCTYPE html>
<html>
<head>
    <title>Employer Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="stylepage.css">

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
    <button class="login1"><a href="logout.php">ይውፅኡ </a></button>
  </header>

   
   <section class="body-bar">
      <div class="container1">
         <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
           <table>
            <tr>
                <th>Name</th>
                <th>Password</th>
                <th>Role</th>
                <th>Phone</th>
                <th>Job</th>
                <th>Gender</th>
                <th>Amount</th>
                <th>Education</th>
                <th>Workplace</th>
                <th>Salary</th>
            </tr>
            <?php
            // Connect to the database
           $conn=mysqli_connect("localhost","root","","employment")
           or die("Connection Failed to database");

            // Fetch data from the employer table
            $sql = "SELECT * FROM employer";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["password"]."</td>";
                    echo "<td>".$row["role"]."</td>";
                    echo "<td>".$row["phone"]."</td>";
                    echo "<td>".$row["job"]."</td>";
                    echo "<td>".$row["gender"]."</td>";
                    echo "<td>".$row["amount"]."</td>";
                    echo "<td>".$row["education"]."</td>";
                    echo "<td>".$row["workplace"]."</td>";
                    echo "<td>".$row["salary"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </table>
    </div>
</section>

  <footer>
    <p>&copy; Group 3 SWE Final project. All rights reserved.</p>
  </footer>
</body>
</html>