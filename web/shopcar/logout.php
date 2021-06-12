<?php

session_start();

unset($_SESSION['loginUser']);

header("Location: ../member/login.php");

// 商品細節頁 登出