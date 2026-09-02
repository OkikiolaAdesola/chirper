<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Calculator</title>

    @vite('resources/js/app.js')
</head>

<body>
<h1>Calculate your earnings</h1>

<input type="number" id="Num1">

<select id="Operation">
    <option value="Addition">+</option>
    <option value="Subtraction">-</option>
    <option value="Multiplication">*</option>
    <option value="Division">/</option>
</select>

<input type="number" id="Num2">

<button type="submit" id="Calculate_Button">Calculate</button>

<p id="Results"></p>

</body>

</html>