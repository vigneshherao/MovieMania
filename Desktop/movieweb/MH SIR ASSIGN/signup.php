<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
  <div class="center">
      <h1>Login</h1>
      <form method="post">
        <label>Enter your name</label>
          <div class="txt_field">
            <input type="text" required>
            <span></span>
          </div>
        <label>Enter your email</label>
          <div class="txt_field">
           <input type="text" required>
            <span></span>
          </div>
        <label>Enter your phone number</label>
          <div class="txt_field">
            <input type="text" required>
            <span></span>
          </div>
        <label>Password</label>
          <div class="txt_field">
            <input type="password" required>
            <span></span>
          </div>
          <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
              <div class="signup_link">
                Already a member? <a href="login.html">login</a>
              </div>
        </form>
    </div>
  </body>
</html>