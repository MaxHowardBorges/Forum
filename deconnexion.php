<?php
session_save_path('/var/www/sessions/');
session_start();
session_unset();
session_destroy();
header("Location: index.php");
exit();
