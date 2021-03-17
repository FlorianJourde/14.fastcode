<?php

session_start();
unset($_SESSION['firstname']);

header('location:index.php');