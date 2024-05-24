<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Files Upload</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap">
  <link rel="stylesheet" href="register.css">
</head>
<body>
  <div class="main">    
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="signup">
      <form id="signupForm">
        <label for="chk" aria-hidden="true">Sign up</label>
        <input type="text" name="Fname" placeholder="Enter Your Name" required>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <input type="password" name="password" placeholder="Enter Your Password" required>
        <button type="submit">Sign up</button>
      </form>
    </div>
    <div class="login">
      <form id="loginForm">
        <label for="chk" aria-hidden="true">Login</label>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <input type="password" name="password" placeholder="Enter Your Password" required>
        <button type="submit">Login</button>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
