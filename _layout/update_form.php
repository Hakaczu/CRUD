<?php
$id = $_GET['id'];
$table = $_GET['table'];
if(!property_exists('db_operations',$table)){
    header("Location: index.php?action=view&notice=nexist");
}
$record = new db_operations();
$value = $record ->get_record($record->$table,$id);
if(is_array($value)) {
    echo '<h3>Edit Product</h3>';
    echo '<form action="_action/update.php" method="post">
			<div class="form-group">
			        <input type="hidden" name="table" value="pharmacy">
			        <input type="hidden" name="id" value="' . $value['id'] . '">
					<input class="form-control" id="name" name="name" type="text" placeholder="Name" required value="' . $value['name'] . '">
			</div>
			<div class="form-group">
					<input class="form-control" id="quantity" name="quantity" type="number" placeholder="Quantity" required value="' . $value['quantity'] . '">
			</div>
				<button type="submit" class="btn btn-default">Save</button>
</form>';
}else{
    header("Location: index.php?action=view&notice=nexist");
}
?>
