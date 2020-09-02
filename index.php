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
