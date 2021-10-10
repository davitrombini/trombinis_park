<?php

session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header("Location: http://localhost/trombinis_park/src/pages/user/login.php");
die;