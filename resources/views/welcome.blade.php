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
        <input type="number" id="AddNum1">
        <input type="number" id="AddNum2">

        <button onclick="Addition()">Addition</button>
        <p id="AddResult"></p>

        <script>
            function Addition(){
                let Num1 = Number(document.getElementById("AddNum1").value)
                let Num2 = Number(document.getElementById("AddNum2").value)
                let AddResult = Num1 + Num2

                document.getElementById("AddResult").textContent = AddResult

            }
        </script>
    </div>

    <div>
        <h1>Subtraction</h1>
        <input type="number" id="SubNum1">
        <input type="number" id="SubNum2">

        <button onclick="Subtraction()">Subtract</button>
        <p id="SubResult"></p>

        <script>
            function Subtraction(){
                let Num1 = Number(document.getElementById("SubNum1").value)
                let Num2 = Number(document.getElementById("SubNum2").value)
                let SubResult = Num1 - Num2

                document.getElementById("SubResult").textContent = SubResult

            }
        </script>
    </div>

    <div>
        <h1>Multiplication</h1>
        <input type="number" id="MulNum1">
        <input type="number" id="MulNum2">

        <button onclick="Multiply()">Multiply</button>
        <p id="MulResult"></p>

        <script>
            function Multiply(){
                let Num1 = Number(document.getElementById("MulNum1").value)
                let Num2 = Number(document.getElementById("MulNum2").value)
                let MulResult = Num1 * Num2

                document.getElementById("MulResult").textContent = MulResult

            }
        </script>
    </div>

    <div>
        <h1>Division</h1>
        <input type="number" id="DivNum1">
        <input type="number" id="DivNum2">

        <button onclick="Division()">Division</button>
        <p id="DivResult"></p>

        <script>
            function Division(){
                let Num1 = Number(document.getElementById("DivNum1").value)
                let Num2 = Number(document.getElementById("DivNum2").value)
                let DivResult = Num1 / Num2

                document.getElementById("DivResult").textContent = DivResult
            }
        </script>
    </div>

</body>

</html>