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

    .login-form label {
      display: block;
      margin-bottom: 5px;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .login-form input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .registration-link {
      text-align: center;
      margin-top: 20px;
    }

    .registration-link a {
      color: #4CAF50;
      text-decoration: none;
    }
</style>
  <script>
    function validateLoginForm() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      if (username === "" || password === "") {
        alert("Both fields are required.");
        return false;
      }

      return true;
    }
  </script>

</head>
<body>
  <div class="container">
    <div class="login-form">
      <header>
                        <center><img src="RSR.png" alt="RSR General Stores Logo" class="logo" height="50%" width="50%">
                          <h1>Welcome to RSR General Stores</h1></center>
                        </header>
      <h2>Log In to Your RSR Account</h2>
      <form id="login-form" action="login.php" method="POST" onsubmit="return validateLoginForm()">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required><br><br>
      
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
      
        <input type="submit" value="LogIn">
      </form>
      
      <div class="registration-link">
        <p>Don't have an account? <a href="Registration.php">Sign Up</a></p>
      </div>
    </div>
  </div>
</body>
</html>
