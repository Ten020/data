<?php

session_start();

$_SESSION['user'] = 'ten';
$_SESSION['userid'] = '26';

echo '<a href="show_session.php" target="_blank"><button>Laat me de sessie variabelen zien</button><a/>';