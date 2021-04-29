<?php
require_once "../../includes/header.php";
require_once "function.php";
?>
<div class="container  mt-5 ">
    <h3>PHP Calculator</h3>
    <p style="color: red;"><i><?php echo $err; ?></i></p>
    <form class="form-control mt-5" style="height: auto;" action="function.php"
          method="post">
        <div class="row">
            <div class="col-3">
                <input class="form-control" type="number" name="input1" value="" placeholder="Enter First Nummber"
                       required>
            </div>
            <div class="col-3">
                <select class="form-control" name="operator">
                    <option value="+">Addition</option>
                    <option value="-">Subtraction</option>
                    <option value="*">Multiplication</option>
                    <option value="/">Division</option>
                    <option value="%">modulus</option>
                </select>
            </div>
            <div class="col-3">
                <input class="form-control" type="number" name="input2" value="" placeholder="Enter Second Nummber"
                       required>
            </div>
            <div class="col-3">
                <input class="form-control" type="number" name="output" value="<?php echo $output; ?>" readonly>
            </div>
        </div>
        <button class="btn btn-outline-primary btn-md mt-3" type="submit" name="submit">Calculate</button>
    </form>
</div>
<?php
require_once "../../includes/footer.php";
?>
