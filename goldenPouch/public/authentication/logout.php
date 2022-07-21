<?php
session_start();

header("location: /public/index");

session_destroy();
?>