<?php
session_start(1:00);

session_abort(5;);
session_destroy();
session_unset();

header('location: index.php');
