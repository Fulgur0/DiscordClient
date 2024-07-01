<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('layouts/head.php') ?>
    <link rel="stylesheet" href="<?php echo $APP_URL ?>/assets/css/login.css">
</head>
<body>
    <img src="<?php echo $APP_URL ?>/assets/images/login-bg.svg" alt="login-bg" class="login-bg prevent-select">
    <img src="<?php echo $APP_URL ?>/assets/images/discord-logo.svg" alt="discord-logo" class="discord-logo prevent-select">
    <div class="authBox">
        <div class="login-form">
            <div class="authBox-header">
                <h1>Welcome back!</h1>
                <p>We're so excited to see you again!</p>
            </div>
            <div class="authBox-form">
                <div class="inputBox">
                    <label for="email">EMAIL OR PHONE NUMBER</label>
                    <span class="required">*</span>
                    <br>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="inputBox">
                    <label for="password">PASSWORD</label>
                    <span class="required">*</span>
                    <br>
                    <input type="password" name="password" id="password" required>
                </div>
                <a href="<?php echo $APP_URL ?>/forgot-password.php" class="link">Forgot your password?</a>
                <button type="submit" class="btn">Login</button>
            </div>
            <div class="authBox-footer">
                <p>Don't have an account? <a href="register.html" class="link">Register</a></p>
            </div>
        </div>
        <div class="qr-div">
            <div class="qrCode">
                <img src="<?php echo $APP_URL ?>/assets/images/qr-code-overlay.png" alt="qr-code" class="prevent-select qr-code">
                <h1>Login with QR Code</h1>
                <p>Scan this QR code with your <span class="bold">Discord mobile app</span> to log in instantly.</p>
                <a href="<?php echo $APP_URL ?>" class="link">Or, sign in with passkey</a>
            </div>
        </div>
    </div>
</body>
</html>