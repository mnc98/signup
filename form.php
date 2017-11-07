<head>

    <style type="text/css">
body {
    background-color: #000000;
    color: #FFFFFF;
    font: 28px Arial;
    margin: 0 auto;
    padding: 0;
    position: relative;
    transform: translate(0%, 30%);
}
html {
    text-align: center;
    position: relative;
}
div.container {
      border: 2px solid #840808;
      padding: 6px;
      width: 600px;
      margin:20px auto;
      text-align:center;
      color: #ffffff;
}
button {
      background-color: #000000;
      color: white;
      padding: 6px 15px;
      margin: 8px 0;
      width: 25%;
      border: 2px solid #840808;
}
    </style>
</head>

<form action="action_page.php" method = "GET">
  <div class="container">
    <label><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="first_name" required>
    <br/>

    <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="last_name" required>
    <br/>
   
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email Address" name="email" required>
    <br/>

    <label><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="password" required>
    <br/>

    <label><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone_number" required>
    <br/>
    
    <label><b>Date of Birth</b></label>
    <input type="text" placeholder="Enter Date of Birth" name="birthday" required>
    <br/>

    <label><b>Gender</b></label>
    <input type="text" placeholder="Enter Gender" name="gender" required>
    <p>Please make sure all information is correct!</p>

    <div class="clearfix">
         <button type="submit" class="signupbtn">Sign Up</button>
        <!-- <a href="https://web.njit.edu/~mnc24/signup/login.php">Sign Up</a> -->
      <!-- <button type="https://web.njit.edu/~mnc24/signup/login.php">Cancel</button> -->
      <!-- <a href="https://web.njit.edu/~mnc24/signup/login.php">Cancel</a> -->
      <a href="https://web.njit.edu/~mnc24/signup/login.php">Cancel</a>
    </div>
  </div>
</form>
