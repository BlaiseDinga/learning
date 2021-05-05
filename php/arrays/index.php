<?php
include_once "../../includes/header.php";
function reduce($array){
    foreach ($array as $test => $t) {
        $sum = $t-5;
        echo "<h5 call='text-danger'>Hour".$test . "=". $sum."°</h5><br>";
    }

}
?>
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/w1.jpg" alt="First slide" height="600px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/w2.jpg" alt="Second slide" height="600px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/w3.png" alt="Third slide" height="600px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <h1 class='my-5 text-primary'>Arrays</h1>
<div class="row">
    <div class="col-4">
        <?php
        for ($x = 1; $x < 8; $x++) {
            for ($i = 1; $i <= 24; $i++) {
                $hour[$x][$i] = (double)rand(5, 40);
            }
        }
        echo "<h3 class='my-5 text-primary'>Array: Randomly generated temperature data every hour for a week</h3>";
        //    echo "<pre>".print_r($hour, true)."<pre>";
        foreach ($hour as $key => $y) {
            echo "<h3>Day" . $key . ":</h3><br>";
            foreach ($y as $test => $t) {
                echo "<h5>Hour".$test . "=". $t. "°</h5><br>";
            }
        }
        ?>
    </div>
    <div class="col-4">    <?php

        echo "<h3 class='my-5 text-primary'>Friday Temperture should be reduce by 5°</h3>";
        //    echo "<pre>".print_r($hour, true)."<pre>";
        foreach ($hour as $key => $y) {
            echo "<h3>Day" . $key . ":</h3><br>";
            if($key != 5){
                foreach ($y as $test => $t) {
                    echo "<h5>Hour".$test . "=". $t. "°</h5><br>";
                }
            }else{
                reduce($y);
            }

        }
        ?></div>
    <div class="col-4">    <?php
        echo "<h3 class='my-5 text-primary'>Friday Temperture should be reduce by 5°</h3>";
        //    echo "<pre>".print_r($hour, true)."<pre>";
        foreach ($hour as $key => $y) {
            echo "<h3>Day" . $key . ":</h3><br>";
            foreach ($y as $test => $t) {
                echo "<h5>Hour".$test . "=". $t. "°</h5><br>";
            }
        }
        ?></div>
</div>
</div>
<?php
include_once "../../includes/footer.php";
?>

