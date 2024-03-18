<?php    

if (isset($_POST['fname']) &&
    isset($_POST['lname']) &&
    isset($_POST['phone']) &&
    isset($_POST['uname']) &&
    isset($_POST['email']) &&
    isset($_POST['pass'])) {

    include "db_conn.php";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //for the database

    $data = "fname=" . $fname ."&lname=" . $lname ."&phone=" . $phone ."&uname=" . $uname ."&email=" .$email;

    // Check for empty fields
    if (empty($fname) || empty($lname) || empty($phone) || empty($uname) || empty($email) || empty($pass)) {
        $em = "All fields are required";
        $data = "fname=$fname&lname=$lname&phone=$phone&uname=$uname&email=$email";
        header("Location: signup.php?error=$em&$data");
        exit;
    }

    // Check if the email is already in use
    $sql = "SELECT * FROM users WHERE Email=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        $em = "Email is already in use";
        header("Location: signup.php?error=$em");
        exit;
    }

    // Hashing password
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users(username, first_name, last_name, contact_number, email, password)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$uname, $fname, $lname, $phone, $email, $pass]);

    header("Location: signup.php?success=Your account has been created successfully");
    exit;
} else {
    header("Location: signup.php");
    exit;
}

?>
