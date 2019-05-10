<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Logout</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <?php
        include('functions.php');
        session_start();
        if(session_destroy()) {
            redirect('Logging out...', 'signedOut.php', 3);
        }
        ?>
    </body>
</html>
