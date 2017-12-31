<?php
$id = $_GET['id'];
$record = new db_operations();
$value = $record ->get_record($record->pharmacy,$id);

echo '<h3>Edit Product</h3>';
echo '<form action="_action/update.php" method="post">
			<div class="form-group">
			        <input type="hidden" name="table" value="pharmacy">
			        <input type="hidden" name="id" value="'.$value['id'].'">
					<input class="form-control" id="name" name="name" type="text" placeholder="Name" required value="'.$value['name'].'">
			</div>
			<div class="form-group">
					<input class="form-control" id="quantity" name="quantity" type="number" placeholder="Quantity" required value="'.$value['quantity'].'">
			</div>
				<button type="submit" class="btn btn-default">Save</button>
</form>';
?>
