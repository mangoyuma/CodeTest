<?php
require 'db.php';
$id = $_GET['id'];
    
    $sql = 'SELECT * FROM people WHERE id=$id';

    $statement = $connection->prepare($sql);

    $statement->execute([':id' => id ]);

    $pereson = $statement->fetch(PDO::FETCH_OBJ);


    if (isset ($_POST['title']) && isset($_POST['content']) ) {

    	$title = $_POST['title'];

    	$content = $_POST['content'];

       	$sql = 'UPDATE people SET Title=:title, Content=:content, WHERE id=:id';

    	$statement = $connection->prepare($sql);

    if ($statement->execute([':title' => $title, ':content' => $content, ':create' => $create ,':action' => $action, ':id' => $id])) {

    header("location: /")
    }
}
?>    

<?php require 'header.php'; ?>
    <div class='container'>

	<div class='card mt-5'>
		<div
		 class='card-header'>
			<h2>Edit post</h2>
		</div>

		<div
		 class="card-body">

		    <?php if(!empty($message)): ?>
		    	<div class="alert alert-success">
		    		<?= $message; ?>

		    <?php endif; ?>		

		<!-- 	<form method="POST"> -->
				<div class="form-group">

					<label for="name">Title</label>
					<input value="<?= $person->Title; ?>"
					    type="text" name="title" id="title" class="form-control">
			
					<label for="name">Content</label>
					<input value="<?= $person->Content; ?>"
					     type="textarea" name="title" id="title class="form-control">
				
					<button value="Update" type="submit" class="btn btn-info">Update</button>
				</div>	

			<!-- </form>
 -->
		</div>			

	</div>

</div>

<?php require 'footer.php'; ?>	