<?php
include_once "../../includes/header.php";
?>
<div class="container">
    <form action="" method="POST" class="mt-5">
        <div class="row">
            <div class="col-5"><input type="text" name="rows" class="form-control" placeholder="Input number of rows">
            </div>
            <div class="col-5"><input type="text" name="coll" class="form-control" placeholder="Input number of Columns">
            </div>
            <div class="col-2"><input type="submit" class="btn btn-primary" name="submit" value="submit" required>
            </div>
        </div>
    </form>

    <hr>
</div>
<?php
include_once "../../includes/footer.php";
?>