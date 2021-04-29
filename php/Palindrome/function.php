<?php
$word = "";
$err = "";
if(isset($_POST["submit"])){
    $word = $_POST["word"];

    $test = is_numeric($word);
    if($test !=1){
        $isp = palindrome("$word");
    }
    else{
        $err = "Word must be an interger";
        echo $err;

    }
}
function palindrome(string $word): bool{

    $plainword = $word;
    $pword = strrev($word);

    if($plainword == $pword){
        return true;
    }
    else{
        return false;
    }

}
?>