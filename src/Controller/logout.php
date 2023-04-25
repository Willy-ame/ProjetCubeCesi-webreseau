<?php
session_start();
unset($_SESSION['Login']);
session_destroy();

header('Location: ../../public/index.php'); exit;