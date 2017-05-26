<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('core/Run.php');

$program = new Run();
$program->run();
exit(0);

