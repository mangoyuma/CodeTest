<?php

require 'db.php';
$message = '';

    if (isset ($_POST['title']) && isset($_POST['content']) ) {

    	$title = $_POST['title'];

    	$content = $_POST['content'];


    	$sql = 'INSERT INTO people(Title, Content,) VALUES($title, $content, )';

    	$statement = $connection->prepare($sql);

    if ($statement->execute([':title' => $tile, ':content' => $content])) {

    	$message = 'data inserted successfully';
    	}
    	echo 'submit';
    }
?>    

<?php require 'header.php'; ?>
    <div class='container'>

	<div class='card mt-5'>
		<div
		 class='card-header'>
			<h2>Create new post</h2>
		</div>

		<div
		 class="card-body">

		    <?php if(!empty($message)): ?>
		    	<div class="alert alert-success">
		    		<?= $message; ?>

		    <?php endif; ?>		

			<form method="POST">
				<div action="index.php" class="form-group">

					<label for="name">Title</label>
					<input type="text" name="title" id="title" class="form-control">
			
					<label for="content">Content</label>
					<input type="" name="content" id="content" class="form-control">
				
					<button type="submit" class="btn btn-info">POST</button>
				</div>	

			</form>

		</div>			

	</div>

</div>

<?php require 'footer.php'; ?>	