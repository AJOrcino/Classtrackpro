<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Account</title>
    <link rel="stylesheet" href="/Styles/createacc.css" />
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
            <h2>ClassTrack Pro</h2>
            <p class="subtitle">Create your account to get started</p>

            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" placeholder="Your full name" required />

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email address" required />

            <label for="password">Password</label>
            <div class="password-box">
                <input type="password" id="password" placeholder="********" required />
            </div>

            <label for="role">Select Role</label>
            <select id="role" required>
                <option value="" disabled selected>Select your role</option>
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
            </select>

            <button type="submit" class="sign-in-btn">SIGN UP</button>

            <p class="signup">Already have an account? <a href="index.php">Sign In</a></p>
        </form>
        <?php include '../../components/buttons/arrowupbutton.php'; ?>
    </div>
</body>

</html>