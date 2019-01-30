<?php
session_start();  //Before accessing we must start our session
echo $_SESSION['name']; //accessing the session that is set on other php file
session_destroy();   //At last we destroy the session and now all the variable on session are deleted.