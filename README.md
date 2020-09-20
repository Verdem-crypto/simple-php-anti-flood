# Simple PHP Anti-Flood

*INTRODUCTION*

Simply take the code contained in the "index.php" file and paste it at the top of your index (php) file.

Example:
<?php
if (!isset($_SESSION)) {
        session_start();
}
// anti flood protection
if($_SESSION['last_session_request'] > time() - 2){
        // users will be redirected to this page if it makes requests faster than 2 seconds
        header("location: https://verdemblog.blogspot.com/404");
        exit;
}
$_SESSION['last_session_request'] = time();
?>
/YOUR CODE HERE\

*PERSONALIZE*

You can modify the link and the requests number.
