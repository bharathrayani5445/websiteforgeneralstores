<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'customer_details');
    if ($conn->connect_error) {
        die('Connection Failed: '.$conn->connect_error);
    }

    $q = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($q);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_name = $row['name'];

        // Starting a session to store user data across pages
        session_start();
        $_SESSION['user_name'] = $user_name;

        // Redirecting to Home.html
        header("Location: Home.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }

    $conn->close();
}
?>
