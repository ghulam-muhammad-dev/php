<?php 
session_start();
if (isset($_SESSION['key']) === true) {
    if($_SESSION['key'] === "yes") {
        header("Location: profile.php");
        exit();
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: #086d68;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .login-card {
            width: 285px;
            height: auto;
            background: #f5f5f5;
            border-radius: 14px;
            padding: 25px 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }

        .auth-tabs {
            background: #e9eeee;
            border: 1px solid #d5dddd;
            border-radius: 9px;
            padding: 3px;
            display: flex;
            margin-bottom: 20px;
        }

        .auth-tabs button {
            width: 50%;
            border: none;
            background: transparent;
            color: #08716c;
            font-size: 14px;
            font-weight: 700;
            padding: 7px 3px;
            border-radius: 6px;
        }

        .auth-tabs .active {
            background: #08756f;
            color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.12);
        }

        .login-title {
            font-size: 23px;
            font-weight: 700;
            color: #164d4a;
            margin-bottom: 2px;
        }

        .login-subtitle {
            font-size: 12px;
            color: #777;
            margin-bottom: 16px;
        }

        .form-label {
            font-size: 15px;
            font-weight: 700;
            color: #174f4c;
            margin-bottom: 4px;
        }

        .form-control {
            height: 35px;
            border-radius: 8px;
            border: 1px solid #d1d5d5;
            font-size: 14px;
            padding: 6px 10px;
            margin-bottom: 10px;
        }

        .form-control:focus {
            border-color: #08756f;
            box-shadow: 0 0 0 2px rgba(8, 117, 111, 0.1);
        }

        .login-btn {
            width: 100%;
            height: 32px;
            border: none;
            border-radius: 7px;
            background: #08756f;
            color: white;
            font-size: 13px;
            font-weight: 700;
            margin-top: 2px;
        }

        .login-btn:hover {
            background: #065f5a;
        }

        .forgot-password {
            display: block;
            text-align: center;
            margin-top: 13px;
            font-size: 10px;
            font-weight: 600;
            color: #08716c;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        @media (max-width: 400px) {
            .login-card {
                width: 90%;
                max-width: 285px;
            }
        }
    </style>
</head>

<body>

    <div class="login-card">

        <!-- Login / Create Account -->
        <div class="auth-tabs">
            <button class="active">Log in</button>
            <button>Create account</button>
        </div>

        <!-- Heading -->
        <h2 class="login-title">Welcome back</h2>

        <p class="login-subtitle">
            Log in to manage your projects.
        </p>

        <!-- Login Form -->
        <form action="process.php" method="POST">
                <label for="username" class="form-label">
                    Username
                </label>
                <input type="text" id="username" class="form-control" placeholder="Enter your username" name="username" >
                <label for="email" class="form-label">
                    Email
                </label>
                <input type="email" id="email" class="form-control" placeholder="you@example.com" name="email" required>
                <label for="password" class="form-label"> Password </label>
                 <input type="password" id="password" class="form-control" placeholder="••••••••" name="password" required> 

            <button type="submit" class="login-btn">Log in</button>

        </form>

        <a href="#" class="forgot-password">Forgot your password?</a>

    </div>

</body>
</html>