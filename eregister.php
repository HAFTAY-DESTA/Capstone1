<?php
// Database configuration
$conn=mysqli_connect("localhost","root","","employment")
 or die("Connection Failed to database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $phone = $_POST['phone'];
    $job = $_POST['job'];
    $gender = $_POST['gender'];
    $amount = $_POST['amount'];
    $education = $_POST['education'];
    $workplace = $_POST['workplace'];
    $salary = $_POST['salary'];
    $errors = array();

    // Validate name
    if (empty($name) || !preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = "Invalid name. Name must not contain numbers and must not be empty.";
    }

    // Validate password
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // Validate role
    if (empty($role) || preg_match("/^[0-9]*$/", $role)) {
        $errors[] = "Invalid role. Role must not contain numbers and must not be empty.";
    }

    // Validate phone
    if (empty($phone) || !is_numeric($phone)) {
        $errors[] = "Invalid phone number. Phone number must contain only numbers and must not be empty.";
    }

 // Validate job
    if (empty($job)) {
        $errors[] = "Job is required.";
    }
    // Validate gender
    if (empty($gender) || preg_match("/^[0-9]*$/", $gender)) {
        $errors[] = "Invalid gender. Gender must not contain numbers and must not be empty.";
    }

   // Validate amount
    if (empty($amount) || !is_numeric($amount)) {
        $errors[] = "Invalid phone number. amount must contain only numbers and must not be empty.";
    }

    // Validate workplace
    if (empty($workplace) || preg_match("/^[0-9]*$/", $workplace)) {
        $errors[] = "Invalid workplace. Workplace must not contain numbers and must not be empty.";
    }

    // If there are no validation errors, insert data into tables
    if (empty($errors)) {
        // Insert data into employer table
        $sql = "INSERT INTO employer(name, password, role, phone, job, gender, education,workplace,amount, salary) VALUES ('$name','$password', '$role', '$phone', '$job', '$gender', '$education', '$workplace','$amount', '$salary')";

        // Insert data into users table
            $userSql = "INSERT INTO users (username,password, role) VALUES 
            ('$name','$password', '$role')";

        if (mysqli_query($conn, $sql)) {
            // Retrieve the inserted data to display in the modal box

echo '<script type="text/javascript">alert("Registered succesfully ") </script>';
echo "<script>window.location.href='employee regn.php'</script>";
              }
            
            mysqli_query($conn, $userSql);
            
              mysqli_close($conn);
            
            }
        }
    ?>
                