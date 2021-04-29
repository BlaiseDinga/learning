<?php
include_once "../../includes/header.php";
?>
<div class="container m-5 p-5">
    <div class="bg-sub">
        <P>Here you should be able to give a the number of rows you one on your form with their lables and it should be generated</P>
    </div>
    <form action="" method="POST">
        <div class="form-group">
            <label for="word" class="form-label">Enter a Number</label>
            <input type="number" class="form-control" name="row" required>
            <label for="type" class="form-label">What will you like to generate</label>
            <select type="text" class="form-control" name="wish">
                <option value="triangle">Triangle</option>
                <option value="pyramid">Pyramid</option>
                <option value="rombus">Rombus</option>
                <option value="form">Form</option>
            </select>
            <button type="submit" name="submit" class="btn btn-secondary btn-lg mt-2">Submit</button>
        </div>
        <?php

        if(isset($_POST['submit'])){
            $row = $_POST['row'];
            $wish =$_POST['wish'];

            switch($wish){
                case "triangle":
                    for($x = 1; $x <= $row; $x++){
                        for($y = 1; $y<= $x; $y++){
                            echo " ".$y." ";
                        }
                        echo "<br>";
                    }
                    break;
                case "pyramid":
                    for($x = 1; $x <= $row; $x++){
                        for($y = 1; $y<= $x; $y++){
                            echo " ".$y;
                        }
                        for($i = $y; $i>= 1; $i--){
                            echo $i." ";
                        }
                        echo "<br>";
                    }
                    break;
                case "rombus":
                    for($x = 1; $x <= $row; $x++){
                        for($y= 1; $y <=$row-1;  $y++){
                            echo " ";
                        }
                        for($y= 1; $y <=2* $x; $y++){
                            echo  $x;
                        }



                    }
                    break;
                case "form":
                    for($y =1; $y<=$row; $y++){
                        echo "<label for='form' class='form-label'>Label".$y."</label> <input type='text' value='Text' class='form-control' >";
                    }
                    break;

            }

        }
        ?>
    </form>
</div>

<?php
include_once "../../includes/footer.php";
?>
