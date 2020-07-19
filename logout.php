<?php
include "functions.php";
session_destroy();
echo redirect("/index.php");