<?php

session_start();

unset($_SESSION['loginUser']);

header("Location: ../member/login.php");

// 商場item+dtl 登出

