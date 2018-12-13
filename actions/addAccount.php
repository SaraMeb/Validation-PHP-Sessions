<?php
require_once('../dataBase.php');
addAccount($_POST['pseudo'], $_POST['email'], $_POST['pass']);
header('Location: /index.php');die;
