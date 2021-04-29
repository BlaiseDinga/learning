<?php
require __DIR__."/../../includes/header.php";
?>
<style>
    table{
        border:1px solid black;
        border-spacing: 0;
    }
    td{ padding: 30px; border: 1px solid black;}
    .bgcolor{background-color: black;}
</style>
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
<table class="">
    <?php
    if(isset($_POST['submit'])){
        $row = $_POST['rows'];
        $coll = $_POST['coll'];

        for($x=1; $x<=$row; $x++){
            echo "<tr>";
            for($y=1; $y<=$coll; $y++){

                if(($x+$y)%2==0){
                    echo "<td class='bgcolor'></td>";
                }else {
                    echo "<td></td>";

                }

            }
            echo "</tr>";
        }
    }
    ?>
</table>
</div>
<?php
include_once "../../includes/footer.php";
?>
