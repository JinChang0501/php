<?php

session_start();

unset($_SESSION["admin"]);

header('Location: 0416-02 login.php');
