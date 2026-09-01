<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Calculator</title>
</head>

<body>
    <div>
        <h1>Addition</h1>
        <input type="number" id="num1">
        <input type="number" id="num2">


        <button onclick="add()">Add</button>
        <p id="result"></p>

        <script>
            function add() {
                let num1 = Number(document.getElementById("num1").value);
                let num2 = Number(document.getElementById("num2").value);
                let result = num1 + num2;

                document.getElementById("result").textContent = result;
            }
        </script>
    </div>


    <div>
        <h1>Subtraction</h1>
        <input type="number" id="Num1">
        <input type="number" id="Num2">

        <button onclick="subtract()">Subtract</button>
        <p id="subtract"></p>

        <script>
            function subtract() {
                let num1 = Number(document.getElementById("Num1").value);
                let num2 = Number(document.getElementById("Num2").value);
                let subtract = num1 - num2;

                document.getElementById("subtract").textContent = subtract;
            }
        </script>
    </div>
    <div>
        <h1>Multiplication</h1>
        <input type="number" id="MulNum1">
        <input type="number" id="MulNum2">

        <button onclick="Multiply()">Multiply</button>
        <p id="multiply"></p>

        <script>
            function Multiply() {
                let num1 = Number(document.getElementById("MulNum1").value);
                let num2 = Number(document.getElementById("MulNum2").value);
                let multiply = num1 * num2;

                document.getElementById("multiply").textContent = multiply;
            }
        </script>
    </div>
    <div>
        <h1>Division</h1>
        <input type="number" id="DivNum1">
        <input type="number" id="DivNum2">

        <button onclick="Divide()">Divide</button>
        <p id="divide"></p>

        <script>
            function Divide() {
                let num1 = Number(document.getElementById("DivNum1").value);
                let num2 = Number(document.getElementById("DivNum2").value);
                let divide = num1 / num2;

                document.getElementById("divide").textContent = divide;
            }
        </script>
    </div>
</body>

</html>