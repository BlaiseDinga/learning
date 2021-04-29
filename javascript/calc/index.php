<?php
include_once "../../includes/header.php";
?>
<style>
    body {
        background-color: white;
    }

    body div.mycalc{
        text-align: center;
        width: 300px;
        margin: 0 auto;
    }

    div input[type='button'], button {
        width: 72px;
        height: 70px;
        margin: 4px 0;
    }

    div input[type="text"] {
        height: 70px;
        width: 100%;
        background-color: #999;
        color: #fff;
        padding: 12px 20px;
        margin-top: 100px;
        margin-buttom: 4px;
        box-sizing: border-box;
        border-radius: 4px;
        border: 1px solid #777;
    }
    .col{
        display: table;
    }
    .col-1{
        display: table-caption;

    }
    .row-col{
        display: -webkit-inline-box;
    }

    div.results input, div.results button {
        height: 148.8px;
        width: 72px;
        box-sizing: border-box;
        border-radius: 4px;
        border: 1px solid #777;
    }

    div.results button  {
        background-color: red;
        color: #fff;
        border: 1px solid red;

    }

    div.results input {
        background-color: darkcyan;
        color: #fff;
        border: 1px solid darkcyan;

    }

    #plus, #minus, #by, #devide, #percent {
        background-color: deepskyblue;
        color: #fff;
        border: 1px solid deepskyblue;
        front-size: 16px;

    }
    #inputwindow{
        color: floralwhite;
        align-content: space-evenly;
    }
</style>
<div class="container">
    <div class="mycalc">
        <form name="calculator" id="calculator">
            <input type="text" name="inputwindow" id="inputwindow" readonly>
            <div class="d-flex">
                <input type="button" class="mr-1" id="plus" value="+" onclick="takeValue(document.getElementById('plus').value)">
                <input type="button" id="minus" class="mr-1" value="-" onclick="takeValue(document.getElementById('minus').value)">
                <input type="button" id="by" class="mr-1" value="*" onclick="takeValue(document.getElementById('by').value)">
                <input type="button" id="devide" value="/" onclick="takeValue(document.getElementById('devide').value)">
            </div>
            <div class="row-col">
                <div class="col pr-0 pl-0">
                    <div class="d-flex">
                        <input type="button" class="mr-1" id="one" value="1"
                               onclick="takeValue(document.getElementById('one').value)">
                        <input type="button" class="mr-1" id="two" value="2"
                               onclick="takeValue(document.getElementById('two').value)">
                        <input type="button" id="three" value="3"
                               onclick="takeValue(document.getElementById('three').value)">
                    </div>

                    <div class="d-flex">
                        <input type="button" class="mr-1" id="four" value="4"
                               onclick="takeValue(document.getElementById('four').value)">
                        <input type="button" class="mr-1" id="five" value="5"
                               onclick="takeValue(document.getElementById('five').value)">
                        <input type="button" id="six" value="6"
                               onclick="takeValue(document.getElementById('six').value)">
                    </div>

                    <div class="d-flex">
                        <input type="button" id="seven" class="mr-1" value="7"
                               onclick="takeValue(document.getElementById('seven').value)">
                        <input type="button" id="eight" class="mr-1" value="8"
                               onclick="takeValue(document.getElementById('eight').value)">
                        <input type="button" id="nine" value="9"
                               onclick="takeValue(document.getElementById('nine').value)">
                    </div>

                    <div class="d-flex">
                        <input type="button" class="mr-1" id="zero" value="0"
                               onclick="takeValue(document.getElementById('zero').value)">
                        <input type="button" class="mr-1" id="decimal" value="."
                               onclick="takeValue(document.getElementById('decimal').value)">
                        <input type="button" id="percent" value="%"
                               onclick="takeValue(document.getElementById('percent').value)">
                    </div>
                </div >
                <div class="col-1 pl-1">
                    <div class="results">
                        <input type="button" id="equal" value="=" onclick="calculateResult()">
                        <button type="button" id="clear" value=""
                                onclick="clearInput(document.getElementById('clear').value)">
                            Clear
                        </button>

                    </div>
                </div>
            </div>


            <script src="../../assets/js/calc.js"></script>
        </form>
    </div>

<?php
include_once "../../includes/footer.php";
?>