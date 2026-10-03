<?php
session_start();

if (!isset($_SESSION['key']) || $_SESSION['key'] !== "yes") {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'] ?? '';
$email = $_SESSION['email'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome - Profile</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            min-height: 100vh;
            background: #086d68;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        /* Main Wrapper */
        .page-wrapper {
            min-height: 100vh;
            padding: 25px;
        }

        /* Navbar */
        .navbar-custom {
            background: rgba(255, 255, 255, 0.92);
            border-radius: 14px;
            padding: 10px 18px;
            max-width: 1100px;
            margin: auto;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .brand {
            font-size: 25px;
            font-weight: 800;
            color: #086d68;
        }

        .nav-link {
            font-size: 16px;
            font-weight: 600;
            color: #315a57 !important;
        }

        .logout-btn {
            background: #08756f;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 16px;
            font-size: 16px;
            font-weight: 700;
        }
        .logout-btn a{
            text-decoration : none;
            color : white;
        }

        .logout-btn:hover {
            background: #065f5a;
            color: white;
        }

        /* Main Content */
        .welcome-section {
            max-width: 1100px;
            margin: 45px auto 0;
        }

        /* Welcome Card */
        .welcome-card {
            background: #f5f5f5;
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .welcome-small {
            color: #08756f;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .welcome-title {
            color: #164d4a;
            font-size: 32px;
            font-weight: 800;
            margin-top: 7px;
            margin-bottom: 8px;
        }

        .welcome-text {
            color: #707070;
            font-size: 13px;
            max-width: 550px;
            line-height: 1.7;
        }

        /* Profile */
        .profile-box {
            background: white;
            border-radius: 14px;
            padding: 20px;
            margin-top: 25px;
            border: 1px solid #e2e5e5;
        }

        .profile-image {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background: #08756f;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            font-weight: 800;
        }

        .profile-name {
            color: #164d4a;
            font-size: 17px;
            font-weight: 800;
            margin-bottom: 2px;
        }

        .profile-email {
            color: #777;
            font-size: 11px;
        }

        .profile-btn {
            background: #e9eeee;
            border: 1px solid #d6dddd;
            color: #08716c;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 700;
            padding: 8px 13px;
        }

        /* Stats */
        .stat-card {
            background: white;
            border: 1px solid #e1e5e5;
            border-radius: 12px;
            padding: 18px;
            height: 100%;
        }

        .stat-number {
            font-size: 23px;
            font-weight: 800;
            color: #08756f;
        }

        .stat-title {
            font-size: 10px;
            font-weight: 700;
            color: #777;
            margin-top: 3px;
        }

        /* Quick Actions */
        .section-title {
            color: #164d4a;
            font-size: 15px;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .action-card {
            background: white;
            border-radius: 12px;
            padding: 18px;
            border: 1px solid #e1e5e5;
            height: 100%;
            transition: 0.2s;
        }

        .action-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .action-icon {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            background: #e4f1f0;
            color: #08756f;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .action-title {
            font-size: 12px;
            font-weight: 800;
            color: #164d4a;
        }

        .action-text {
            font-size: 10px;
            color: #777;
            margin-top: 5px;
        }

        @media (max-width: 768px) {

            .page-wrapper {
                padding: 15px;
            }

            .welcome-section {
                margin-top: 25px;
            }

            .welcome-card {
                padding: 23px;
            }

            .welcome-title {
                font-size: 25px;
            }

            .profile-box {
                text-align: center;
            }

            .profile-image {
                margin: auto;
            }

            .profile-btn {
                margin-top: 12px;
            }
        }
    </style>
</head>

<body>

<div class="page-wrapper">

    <!-- Navbar -->
    <nav class="navbar-custom">

        <div class="d-flex align-items-center justify-content-between">

            <div class="brand">
                Project Manager
            </div>

            <div class="d-none d-md-flex gap-3">
                <a href="#" class="nav-link">Dashboard</a>
                <a href="#" class="nav-link">Projects</a>
                <a href="#" class="nav-link">Profile</a>
            </div>

            <button class="logout-btn">
                <a href="logout.php">Logout</a>
            </button>

        </div>

    </nav>


    <!-- Main -->
    <main class="welcome-section">

        <div class="welcome-card">

            <div class="welcome-small">
                Dashboard
            </div>

            <h1 class="welcome-title">
                Welcome back,<?php echo (isset($username)) ? $username : 'User'; ?>!
            </h1>

            <p class="welcome-text">
                It's great to see you again. Manage your projects,
                track your progress and keep everything organized
                from your personal dashboard.
            </p>


            <!-- Profile -->
            <div class="profile-box">

                <div class="row align-items-center">

                    <div class="col-md-auto">
                        <div class="profile-image">
                            user
                        </div>
                    </div>

                    <div class="col-md">

                        <div class="profile-name">
                            <?php echo (isset($username)) ? $username : 'User'; ?>
                        </div>

                        <div class="profile-email">
                            <?php echo (isset($email)) ? $email : 'user@example.com'; ?>
                        </div>

                    </div>

                    <div class="col-md-auto">

                        <button class="profile-btn">
                            Edit Profile
                        </button>

                    </div>

                </div>

            </div>


            <!-- Stats -->
            <div class="row g-3 mt-1">

                <div class="col-6 col-md-3">

                    <div class="stat-card">
                        <div class="stat-number">12</div>
                        <div class="stat-title">
                            Total Projects
                        </div>
                    </div>

                </div>

                <div class="col-6 col-md-3">

                    <div class="stat-card">
                        <div class="stat-number">07</div>
                        <div class="stat-title">
                            Active Projects
                        </div>
                    </div>

                </div>

                <div class="col-6 col-md-3">

                    <div class="stat-card">
                        <div class="stat-number">04</div>
                        <div class="stat-title">
                            Completed
                        </div>
                    </div>

                </div>

                <div class="col-6 col-md-3">

                    <div class="stat-card">
                        <div class="stat-number">01</div>
                        <div class="stat-title">
                            Pending
                        </div>
                    </div>

                </div>

            </div>


            <!-- Quick Actions -->
            <div class="mt-4">

                <div class="section-title">
                    Quick Actions
                </div>

                <div class="row g-3">

                    <div class="col-md-4">

                        <div class="action-card">

                            <div class="action-icon">
                                +
                            </div>

                            <div class="action-title">
                                Create Project
                            </div>

                            <div class="action-text">
                                Start a new project and organize
                                your work.
                            </div>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="action-card">

                            <div class="action-icon">
                                →
                            </div>

                            <div class="action-title">
                                View Projects
                            </div>

                            <div class="action-text">
                                See all your active and completed
                                projects.
                            </div>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="action-card">

                            <div class="action-icon">
                                ⚙
                            </div>

                            <div class="action-title">
                                Account Settings
                            </div>

                            <div class="action-text">
                                Update your profile and account
                                preferences.
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

</body>
</html>