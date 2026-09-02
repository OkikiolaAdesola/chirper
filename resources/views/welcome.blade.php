<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Calculator</title>
    @vite('resources/js/app.js')
</head>

<body>

    <input type="number" id="num1">

    <select id="Operations">
        <option value="Addition">+</option>
        <option value="Subtraction">-</option>
        <option value="Division">÷</option>
        <option value="Multipication">*</option>
    </select>

    <input type="number" id="num2">

    <button type="submit" id="calbutton">Calculate</button>
    
    <p id="Results"></p>


</body>

</html>