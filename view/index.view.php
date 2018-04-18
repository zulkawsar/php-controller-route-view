<?php require 'partial/head.php'; ?>
	
      <ul>
      	<?php foreach ($users as $user) : ?>
      	 	<li>
            <?= $user->name ?>

      	 	</li>
      	 		

      	<?php endforeach; ?>
      </ul>

      <form method="POST" action="/names">
          <input type="text" name="name">

          <button type="submit"> Submit</button>
      </form>

<?php require 'partial/footer.php'; ?>