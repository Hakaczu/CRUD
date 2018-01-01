<?php
require_once '_view/console_logs.php';
require_once '_view/print_data.php';
require_once '_db/db_operations.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
include '_layout/head.html';
?>
<body>
        <?php
        include '_layout/menu.html';
        ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <?php
                include '_action/route.php';
                ?>
            </div>
        </div>
    </div>
    <?php
    include '_layout/footer.html';
    include '_layout/scripts.js';
    ?>
</body>

</html>