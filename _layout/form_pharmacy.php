<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 28.12.2017
 * Time: 18:07
 */
?>
<form action="_action/add.php" method="post">
			<div class="form-group">
			        <input type="hidden" name="table" value="pharmacy">
					<input class="form-control" id="name" name="name" type="text" placeholder="Name" required>
			</div>
			<div class="form-group">
					<input class="form-control" id="quantity" name="quantity" type="number" placeholder="Quantity" required>
			</div>
				<button type="submit" class="btn btn-default" value="Submit">Submit</button>
</form>

