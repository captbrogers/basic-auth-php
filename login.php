<?php
session_start();
?><!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A Simple PHP Auth System</title>

        <link href="tailwind-2.0.2.css" rel="stylesheet">
        <link href="app.css" rel="stylesheet">
    </head>
    <body>
        <div class="w-full h-screen flex flex-col items-center justify-center">
            <?php if (! empty($_SESSION['error'])) { ?>
            <div class="flex bg-red-200 border border-red-800 text-red-700 rounded mb-4">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
            <?php } ?>
            <form method="get" action="auth/login.php">
                <div class="flex flex-col">
                    <input type="text" id="username" name="username" placeholder="username" class="border border-gray-200 bg-white text-black px-3 py-2 mb-4">
                    <input type="password" id="password" name="password" placeholder="********" class="border border-gray-200 bg-white text-black px-3 py-2 mb-4">

                    <button type="submit" class="flex p-4 border border-blue-800 bg-blue-600 text-white">Log In</button>
                </div>
            </form>
        </div>
    </body>
</html>
