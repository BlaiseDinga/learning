<?php
$input1 = $input2 = $operator = $output = $err = "";
if (isset($_POST["submit"])) {
    $input1 = $_POST["input1"];
    $operator = $_POST["operator"];
    $input2 = $_POST["input2"];


    try {
        switch ($operator) {
            case $operator == "+"://if operator is addition
                $output = add($input1, $input2);
                break;

            case $operator == "-"://if operator is subtraction
                $output = sub($input1, $input2);
                break;

            case $operator == "*"://if operator is multiplication
                $output = mult($input1, $input2);
                break;

            case $operator == "/"://if operator is Division
                $output = division($input1, $input2);

                break;

            case $operator == "%"://if operator is Modulus
                $output = mod($input1, $input2);
                break;
        }
    } catch (Exception $e) {
        $err = $e->getMessage();
    }


}

/*
 * Addition function
 * @var int $input1
 * @var int $input2
 */
function add(int $input1, int $input2): int
{
    return $input1 + $input2;
}

/*Subtraction function
 * @var int $input1
 * @var int $input2
 * @throw Exception
 */
function sub(int $input1, int $input2): int
{
    return $input1 - $input2;
}

/*Division function
 * @var int $input1
 * @var int $input2
 * @throw Exception
 */
function division(int $input1, int $input2): float
{
    if ($input2 <= 0) {
        throw new Exception("Second Input must be greater than Zero ");
    }
    return $input1 / $input2;
}

/*Multiplication function
 * @var int $input1
 * @var int $input2
 */
function mult(int $input1, int $input2): int
{
    return $input1 * $input2;
}

/* Modulus function
 * @var int $input1
 * @var int $input2
 * @throw Exception
 */
function mod(int $input1, int $input2): int
{
    return $input1 % $input2;
}

?>