<?php

include_once "../../includes/header.php";
function reduce($array)
{
    foreach ($array as $test => $t) {
        $sum = $t - 5;
        echo "<h5>Hour" . $test . "=" . $sum . "°</h5><br>";
    }

}

function increaseByThree($array)
{
    foreach ($array as $test => $t) {
        $sum = $t + 3;
        echo "<h6 class='ml-5 text-danger'>Hour" . $test . "=>" . $sum . "°</h6><br>";
    }

}

function increaseByFactor($array)
{
    foreach ($array as $test => $t) {
        $t *= 1.1;
        echo "<h6 class='ml-5 text-danger'>Hour" . $test . "=>" . $t . "°</h6><br>";
    }

}


for ($month = 1; $month < 13; $month++) {
    if ($month == 2) {
        for ($day = 1; $day <= 28; $day++) {

            for ($i = 1; $i <= 24; $i++) {
                $temp[$month][$day][$i] = (double)rand(5, 40);
            }
        }
    } else {
        for ($day = 1; $day <= 30; $day++) {

            for ($i = 1; $i <= 24; $i++) {
                $temp[$month][$day][$i] = (double)rand(5, 40);
            }

        }
    }

}

?>
<div class="container">
    <div class="row">
        <div class="col-4">
            <?php

            echo "<h3 class='my-5 text-primary'>Temperature generation for a whole year 12 Months</h3>";
            //    echo "<pre>".print_r($hour, true)."<pre>";
            foreach ($temp as $key => $days) {
                echo "<h3 class='text-success'>Month" . $key . ":</h3><br>";
                foreach ($days as $dkey => $hours) {
                    echo "<h4 class='text-primary ml-3'>Day" . $dkey . ":</h4><br>";
                    foreach ($hours as $hkey => $tem) {
                        echo "<h6 class='text-bold ml-5'>Hour" . $hkey . "=>" . $tem . "°</h6><br>";
                    }

                }


            }
            ?>
        </div>
        <div class="col-4">
            <?php

            echo "<h3 class='my-5 text-primary'>Increase 20th of every Month by 3</h3>";
            //    echo "<pre>".print_r($hour, true)."<pre>";
            foreach ($temp as $key => $days) {
                echo "<h3 class='text-success'>Month" . $key . ":</h3><br>";
                foreach ($days as $dkey => $hours) {
                    echo "<h4 class='text-primary ml-3'>Day" . $dkey . ":</h4><br>";
                    if ($dkey != 20) {
                        foreach ($hours as $hkey => $tem) {
                            echo "<h6 class='text-bold ml-5'>Hour" . $hkey . "=>" . $tem . "°</h6><br>";
                        }
                    } else {
                        increaseByThree($hours);
                    }

                }

            }
            ?>
        </div>
        <div class="col-4">
            <?php

            echo "<h3 class='my-5 text-primary'>Temperature generation for a whole year 12 Months</h3>";
            //    echo "<pre>".print_r($hour, true)."<pre>";
            foreach ($temp as $key => $days) {
                echo "<h3 class='text-success'>Month" . $key . ":</h3><br>";
                foreach ($days as $dkey => $hours) {
                    echo "<h4 class='text-primary ml-3'>Day" . $dkey . ":</h4><br>";
                    if($key == 8 && $dkey == 13){
                       for($key=8; $key <= 9; $key++){
                           for($dkey=13; $dkey <= 24; $dkey++){
                                increaseByFactor($hours);
                           }
                       }
                    }
                    else{
                        foreach ($hours as $hkey => $tem) {
                            echo "<h6 class='text-bold ml-5'>Hour" . $hkey . "=>" . $tem . "°</h6><br>";
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</div>
