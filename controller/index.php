<?php 



$tasks = $query->SelectAll('todo');

require 'view/index.view.php';