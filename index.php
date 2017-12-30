<?php
require_once "_view/console_logs.php";
require_once "_view/print_data.php";
require_once "_db/db_operations.php";
?>
<!DOCTYPE html>
<html lang="pl">
<?php
include "_layout/head.php";
?>
<body>

	<div class="container">
        <?php
        include "_layout/menu.php";
        include "_action/route.php";
        ?>
	</div>
    <?php
    include "_layout/scripts.php";
    ?>
</body>

</html>