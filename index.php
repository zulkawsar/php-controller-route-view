<?php 

$query = require 'core/bootstrap.php';




require Router::load('routers.php')
	->direct( Request::uri(), Request::method());
