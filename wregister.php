<?php
// Database configuration
$conn=mysqli_connect("localhost","root","","employment") or die("Connection Failed to database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $job = $_POST['job'];
    $education = $_POST['education'];
    $attachment = $_FILES['attachment']['name'];
    $workplace = $_POST['workplace'];

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

    // Validate gender
    if (empty($gender) || preg_match("/^[0-9]*$/", $gender)) {
        $errors[] = "Invalid gender. Gender must not contain numbers and must not be empty.";
    }

    // Validate job
    if (empty($job)) {
        $errors[] = "Job is required.";
    }

    // Validate workplace
    if (empty($workplace) || preg_match("/^[0-9]*$/", $workplace)) {
        $errors[] = "Invalid workplace. Workplace must not contain numbers and must not be empty.";
    }

    // If there are no validation errors, insert data into tables
    if (empty($errors)) {
        // Insert data into employee table
        $sql = "INSERT INTO employee (name, password, role, phone, gender, job, education, attachment, workplace) VALUES ('$name', '$password', '$role', '$phone', '$gender', '$job', '$education', '$attachment', '$workplace')";

        // Insert data into users table
            $userSql = "INSERT INTO users (username, password, role) VALUES ('$name', '$password', '$role')";

        if (mysqli_query($conn, $sql)) {
            // Retrieve the inserted data to display in the modal box
            $insertedData = array(
                'Name' => $name,
                'Password' => $password,
                'Role' => $role,
                'Phone' => $phone,
                'Gender' => $gender,
                'Job' => $job,
                'Education' => $education,
                'Attachment' => $attachment,
                'Workplace' => $workplace
            );
        }

echo '<script type="text/javascript">alert("Registered succesfully ") </script>';
  echo "<script>window.location.href='employee regn.php'</script>";
            
            mysqli_query($conn, $userSql);
            
              mysqli_close($conn);
            
            }
        }
     ?>

                