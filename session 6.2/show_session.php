<?php
session_start();

if($_SESSION) {
    echo $_SESSION['user'] . " id=" . $_SESSION['userid'] . "<br/>";
}

else{
    echo "no session available";
}

echo '<a href="end_session.php" target="_blank"><button>End_session</button><a/a>';