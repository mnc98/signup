<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style type="text/css">
    div.container {
      border: 2px solid #840808;
      padding: 6px;
      width: 300px;
      margin:20px auto;
      text-align:center;
      color: #ffffff;
    }
    input[type=text], input[type=password] {
      padding: 6px 15px;
      margin: 8px 0;
      border: 1px solid #ccc;
    }
    button {
      background-color: #000000;
      color: white;
      padding: 6px 15px;
      margin: 8px 0;
      width: 50%;
      border: 2px solid #840808;
    }
    body { 
      background-color: black;
      transform: translate(0%, 130%);
    }
  </style>
</head>

<body>
  <div class='container' align="center">

    <form action="action_page2.php" method = "POST">
      <div>
        <label><b>Email</b></label>
        <input type="text" name="reg_uname" placeholder="email" required>
      </div>
      <div>
        <label><b>Password</b></label>
        <input type="password" name="reg_password" placeholder="password" required>
      </div>
      <div>
        <button type="submit">Login</button>     
      </div>
    </form>
    <a href="https://web.njit.edu/~mnc24/signup/form.php">Register!</a>
  </div>
</body>

</html>