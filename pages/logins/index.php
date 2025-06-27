<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In</title>
  <link rel="stylesheet" href="/Styles/index.css" />
  <link rel="stylesheet" href="/components/buttons/arrowupbutton.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <nav class="navbar">
    <div class="navbar-container">
      <img src="/Assets/logo.png" class="logo" />
      <span class="navbar-title">ClassTrack Pro</span>
    </div>
  </nav>

  <div class="container">
    <form class="form-box">

      <!-- 🔒 Lock Icon + Title + Subtitle -->
      <div class="form-header">
        <i class="fas fa-lock lock-icon"></i>
        <div class="form-title-group">
          <h2>ClassTrack Pro</h2>
          <p class="subtitle">Fill out the Form to Login</p>
        </div>
      </div>

      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Email Here" required />

      <label for="password">Password</label>
      <div class="password-box">
        <input type="password" id="password" placeholder="********" required />
      </div>

      <div class="options">
        <a href="resetpass.php" class="forgot">Forget password?</a>
      </div>

      <button type="submit" class="sign-in-btn">SIGN IN</button>

      <p class="signup">Didn't have an account? <a href="createacc.php">Sign Up</a></p>
    </form>

    <?php include '../../components/buttons/arrowupbutton.php'; ?>
  </div>

  <script src="/scripts/togglepassword.js"></script>
</body>

</html>
