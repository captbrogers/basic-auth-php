<?php
session_start();
?><!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A Simple PHP Auth System</title>

        <link href="http://localsite.test/basic-auth-php/tailwind-2.0.2.css" rel="stylesheet">
        <link href="http://localsite.test/basic-auth-php/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="w-full h-screen flex flex-col items-center justify-center">
            <?php if (! empty($_SESSION['user'])) { ?>
            <div class="my-8">Hey there, <?php echo $_SESSION['user']['name']; ?></div>
            <?php } else { ?>
            <a href="http://localsite.test/basic-auth-php/login.php">Log in here</a>
            <?php } ?>
            <div class="flex">This is a simple PHP auth system. It is basic, and for exercise only.</div>
            <div class="flex text-4xl font-bold">DO NOT USE IN PRODUCTION</div>
        </div>
    </body>
</html>
