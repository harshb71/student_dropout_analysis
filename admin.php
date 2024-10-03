<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login & Sign-up - Student Dropout Analysis</title>
  <link rel="stylesheet" href="design.css">
</head>
<body>

  <div class="container">
    <div class="form-toggle">
      <button id="loginToggle" onclick="showLoginForm()">Login</button>
      <button id="signupToggle" onclick="showSignupForm()">Sign-up</button>
    </div>

    <!-- Login Form -->
    <div class="form-box" id="loginForm">
      <h1>Admin Login</h1>
      <!-- Set the action to the target page (stulogin.php) -->
      <form action="stulogin.php" method="POST" onsubmit="return validateLoginForm()">
        <div class="input-group">
          <label for="loginEmail">Email</label>
          <input type="email" id="loginEmail" name="email" required>
        </div>
        <div class="input-group">
          <label for="loginPassword">Password</label>
          <input type="password" id="loginPassword" name="password" required>
        </div>
        <div class="input-group">
          <!-- Use a submit button to send the form -->
          <button type="submit">Login</button>
        </div>
      </form>
    </div>

    <!-- Sign-up Form -->
    <div class="form-box" id="signupForm" style="display:none;">
      <h1>Admin Sign-up</h1>
      <!-- Set the action to the target page (e.g., processSignup.php) -->
      <form action="processSignup.php" method="POST" onsubmit="return validateSignupForm()">
        <div class="input-group">
          <label for="signupName">Full Name</label>
          <input type="text" id="signupName" name="name" required>
        </div>
        <div class="input-group">
          <label for="signupEmail">Email</label>
          <input type="email" id="signupEmail" name="email" required>
        </div>
        <div class="input-group">
          <label for="signupPassword">Password</label>
          <input type="password" id="signupPassword" name="password" required>
        </div>
        <div class="input-group">
          <label for="confirmPassword">Confirm Password</label>
          <input type="password" id="confirmPassword" name="confirmPassword" required>
        </div>
        <div class="input-group">
          <button type="submit">Sign-up</button>
        </div>
      </form>
    </div>
  </div>

  <script src="admin-script.js"></script>
</body>
</html>
