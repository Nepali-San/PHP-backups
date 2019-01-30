<?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
sessionhelper::end();
?>