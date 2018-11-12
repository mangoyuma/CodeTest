<?php
require 'db.php';

$sql = 'SELECT * FORM people';

$statement = $connection->prepare($sql);

$people = $statement->fetchAll(PDO::FETCH_OBJ);
?>


<?php require 'header.php'; ?>

<div class="container">
	<div class="card mt-5">
	
    	<div class="card-boby">
    		<table class="table table-bordered">
    			<tr>
    				<th>ID</th>
    				<th>Title</th>
    				<th>Content</th>
    				<th>Created at</th>
                    <th>Action</th>
    			</tr>
    			
    				<!--DB　値を表示  -->
    			<?php foreach($people as $person): ?>
    			<tr>
                    <form method="POST">
    				<td name="id"><?= $person->id; ?></td>
    				<td name="title"><?= $person->Title; ?></td>
    				<td name="content"><?= $person->Content;?></td>
                    <td name="created"><?= $person->Created;?></td>
                    <td name="acton"><?= $person->Action;?></td>
    				<td>
                        <button type="submit" name="edit">Edit</button>
    					<a href="edit.php?id = <?= $person->id ?>" class="btn btn-info">Edit</a>
                   
                 		<a onclick="return confirm('Are you sure you want to delete this entry')" href="delete.php?id = <?= $person->id ?>" class='btn btn-danger'>Delete</a>
    				</td>
                    </form>

    			</tr>	
    		    <?php endforeach; ?>
         	</table>
        </div>
    </div>
<?php require 'footer.php'; ?>