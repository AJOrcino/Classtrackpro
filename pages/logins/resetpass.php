<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password</title>
    <link rel="stylesheet" href="/Styles/resetpass.css" />
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <img src="/Assets/logo.png" class="logo" />
            <span class="navbar-title">ClassTrack Pro</span>
        </div>
    </nav>

    <div class="container">
        <button class="close-btn" onclick="attemptClose()">×</button>
        <form class="form-box">
            <h2>Reset Password</h2>
            <p class="subtitle">Use uppercase, lowercase, numbers, or special characters</p>

            <label for="new-password">New Password</label>
            <input type="password" id="new-password" placeholder="************" required />

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" placeholder="************" required />

            <button type="submit" class="sign-up-btn" onclick="goHome()">DONE</button>
        </form>
    </div>
    <script src="/scripts/resetpass.js"></script>
</body>

</html>