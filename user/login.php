<?php
require_once '../src/controllers/pathControllers.php';
session_start();
if(isset($_SESSION)){
  header('Location: ../');
} 

$pageTitle = 'Log into your account - Crypto Domain';

// Actual view
include_once BASE_PATH.'/src/templates/user/loginUser.php';