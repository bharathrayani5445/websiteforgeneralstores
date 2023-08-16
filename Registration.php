<!DOCTYPE html>
<html>

<head>
  <style>
   .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
      box-sizing: border-box;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    form label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"],
    input[type="number"],
    input[type="date"],
    input[type="tel"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    a {
      color: #4CAF50;
      text-decoration: none;
    }

    .error {
      color: red;
      margin-top: 5px;
    }
  </style>
  

<script>
    function validateForm() {
      var userId = document.getElementById("user_id").value;
      var name = document.getElementById("name").value;
      var mobile = document.getElementById("mobile").value;
      var username = document.getElementById("username").value;
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirmPassword").value;

      if (userId === "" || name === "" || mobile === "" || username === "" || email === "" || password === "" || confirmPassword === "") {
        alert("All fields are required.");
        return false;
      }

      if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
      }

      return true;
    }
  </script>

</head>

<body>
  <div class="container">
    <form class="profile-form" action="" method="POST" onsubmit="return validateForm()">
      <h2>Create your RSR Profile</h2>
      <label for="user_id">User ID:</label>
      <input type="text" id="user_id" name="user_id" required>
      
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="mobile">Mobile Number:</label>
      <input type="tel" id="mobile" name="mobile" required>
      
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      
      <label for="email">E-mail:</label>
      <input type="text" id="email" name="email" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      
      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
      
      <input type="submit" value="Submit">
    </form>
  </div>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $user_id = $_POST['user_id'];
      $name = $_POST['name'];
      $mobile = $_POST['mobile'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $conn = new mysqli('localhost', 'root', '', 'customer_details');
      if ($conn->connect_error) {
          die('Connection Failed: '.$conn->connect_error);
      }

      $q1 = "INSERT INTO user (userid, name, mobilenumber, username, email, password) VALUES ('$user_id', '$name', '$mobile', '$username', '$email', '$password')";
      
      if ($conn->query($q1) === TRUE) {
        $conn->close();
        echo "Successfully registered. You can now <a href='loginpage.php'>Log In</a>."; // Display success message
        exit();
    } else {
        echo 'Error occurred: '.$q1.', '.$conn->error;
    }
    $conn->close();
}
?>
  ?>
</body>

</html>
