<?php
require_once('../app.php');

session_unset();

session_destroy();

redirect('account');