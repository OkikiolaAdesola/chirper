//


document
    .getElementById("calbutton")
    .addEventListener('click', function () {

        let Operation = document.getElementById("Operations").value

        if (Operation === 'Addition') {
            Add();
        } else if (Operation == 'Subtraction') {
            Sub();
        } else if (Operation == 'Multipication') {
            Mul();
        } else if (Operation == 'Division') {
            Div();
        }
    })


function Add() {
    let Num1 = Number(document.getElementById("num1").value)
    let Num2 = Number(document.getElementById("num2").value)

    document.getElementById('Results').textContent = Num1 + Num2
}

function Sub() {
    let Num1 = Number(document.getElementById("num1").value)
    let Num2 = Number(document.getElementById("num2").value)

    document.getElementById('Results').textContent = Num1 - Num2
}

function Mul() {
    let Num1 = Number(document.getElementById("num1").value)
    let Num2 = Number(document.getElementById("num2").value)

    document.getElementById('Results').textContent = Num1 * Num2
}

function Div() {
    let Num1 = Number(document.getElementById("num1").value)
    let Num2 = Number(document.getElementById("num2").value)

    document.getElementById('Results').textContent = Num1 / Num2
}