//Function to to take, hold and print the end product of the calculation where the input id is 'inputwindow'
function takeValue(x) {
    document.getElementById('inputwindow').value += x;
}

function clearInput(y) {
    document.getElementById('inputwindow').value = y;
}

function calculateResult() {
    var result = eval(document.getElementById('inputwindow').value);
    document.getElementById('inputwindow').value = result;
}