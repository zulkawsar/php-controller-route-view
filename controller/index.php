<?php 


$users = $app['database']->SelectAll('users');

require 'view/index.view.php';