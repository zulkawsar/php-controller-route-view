<!DOCTYPE html>
<html>
<head>
	<title>Php Beginner</title>
</head>
<body>
	<h2>Hello</h2>
	
  <ul>
  	<?php foreach ($tasks as $task) : ?>
  	 	<li>
  	 		
	  	 	<?php if ($task->completed ) : ?>
	  	 		<strike> <?= $task->description ?> </strike>
	  	 	<?php else: ?>
	  	 	 	<?= $task->description ?>
	  	 	<?php endif; ?>


  	 	</li>
  	 		

  	<?php endforeach; ?>
  </ul>

</body>
</html>