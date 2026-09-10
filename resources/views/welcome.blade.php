<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaravelCalc</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    <div class="calculator">
        <input class="display" readonly>
        <div class="keys">

            <button onclick="appendtodisplay('9')">9</button>
            <button onclick="appendtodisplay('8')">8</button>
            <button onclick="appendtodisplay('7')">7</button>
            <button class="operators" onclick="appendtodisplay('+')">+</button> <br>

            <button onclick="appendtodisplay('6')">6</button>
            <button onclick="appendtodisplay('5')">5</button>
            <button onclick="appendtodisplay('4')">4</button>
            <button class="operators" onclick="appendtodisplay('-')">-</button> <br>

            <button onclick="appendtodisplay('3')">3</button>
            <button onclick="appendtodisplay('2')">2</button>
            <button onclick="appendtodisplay('1')">1</button>
            <button class="operators" onclick="appendtodisplay('*')">*</button> <br>

            <button onclick="appendtodisplay('0')">0</button>
            <button class="operators" onclick="calculate()">=</button>
            <button class="operators" onclick="clear()">C</button>
            <button class="operators" onclick="appendtodisplay('÷')">÷</button>

        </div>
    </div>
</body>

</html>