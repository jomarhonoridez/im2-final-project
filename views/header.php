<?php session_start(); ?>

<html>

<head>
    <meta charset="UTF-8">
    <title>My Webpage</title>

    <link href="views/res/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="navbar">
        <ul class="left-link">
            <a href="timeline.php">
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="navbar-icon">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                    </svg>
                </li>
            </a>
        </ul>

        <?php if (isset($_SESSION['aid'])) { ?>
            <ul class="right-link">
                <a href="profile.php">
                    <li><?= $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></li>
                </a>
                <a href="models/logout_account.php">
                    <li>Log out</li>
                </a>
            </ul>

        <?php } else { ?>
            <ul class="right-link">
                <a href="login.php">
                    <li>Log in</li>
                </a>
                <a href="index.php">
                    <li>Sign up</li>
                </a>
            </ul>
        <?php } ?>

    </div>
</body>