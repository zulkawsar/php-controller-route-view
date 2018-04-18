<?php require 'partial/head.php'; ?>
	
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

      <form method="GET" action="/name">
          <input type="text" name="name">

          <button type="submit" value="submit" > Submit</button>
      </form>

<?php require 'partial/footer.php'; ?>