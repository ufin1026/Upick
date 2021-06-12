<?php

session_start();

unset($_SESSION['loginUser']);

header("Location: login.php");

// 會員中心 登出