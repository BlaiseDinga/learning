<?php
include_once "../../includes/header.php";
$word = "";
$err = "";
$isp = "";
$pword= "";
?>
    <style>

    </style>
<div class="container p-5 m-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <p><b>Function:</b> This program is programed such that, the user inputs a word and the software checks if the word is a Palindrome and return true or false!</P>
                </div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <div class="form-group">
                            <label for="word" class="form-label">Enter a Word</label>
                            <input type="text"  class="form-control" name="word" placeholder="Enter any word of your choice" required>
                            <button type="submit" class="btn btn-primary btn-lg mt-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word = $_POST['word'];

    $test = is_numeric($word);
    if($test == false){
        $pword = strrev($word);
        $isp = palindrome($word, $pword);
    }else{
        $err = "Only Letter are allowed";
    }

}
function palindrome(string $word, string $pword): string{

    if($word == $pword ){
        $isp = "Yes";
    }
    else {
        $isp = "No";
    }
    return $isp;
}
?>
        <div class="col-sm-6">
            <div class="card">
                <p style="color: red;"><?php echo $err; ?></p>
                <div class="card-body">
                    <h5 class=""><?php echo "Word:"." ".$word."</i>"; ?></h5>
                    <h5 class=""><?php echo "Palindrome Word:"." ".$pword; ?></h5>
                    <h5 class=""><?php echo "Is the Word a Palindrome:"." ".$isp; ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once "../../includes/footer.php";
?>