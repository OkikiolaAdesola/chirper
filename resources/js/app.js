
document
    .getElementById("Calculate_Button")
    .addEventListener('click', function () {
        
        Operation = document.getElementById("Operation").value


        if (Operation == "Addition") {
            addbutton();
        } else if (Operation == "Subtraction") {
            subbutton();
        } else if (Operation == "Multiplication") {
            mulbutton();
        } else if (Operation == "Division") {
            divbutton();
        }

    }

    )




function addbutton() {
    Num1 = Number(document.getElementById("Num1").value)
    Num2 = Number(document.getElementById("Num2").value)

    document.getElementById("Results").textContent = Num1 + Num2
}

function subbutton() {
    Num1 = Number(document.getElementById("Num1").value)
    Num2 = Number(document.getElementById("Num2").value)

    document.getElementById("Results").textContent = Num1 - Num2
}

function mulbutton() {
    Num1 = Number(document.getElementById("Num1").value)
    Num2 = Number(document.getElementById("Num2").value)

    document.getElementById("Results").textContent = Num1 * Num2
}

function divbutton() {
    Num1 = Number(document.getElementById("Num1").value)
    Num2 = Number(document.getElementById("Num2").value)

    document.getElementById("Results").textContent = Num1 / Num2
}



/*document
    .getElementById("addbutton")
    .addEventListener("click", addition)

document
    .getElementById("subbutton")
    .addEventListener("click", subtraction)

document
    .getElementById("mulbutton")
    .addEventListener("click", multiplication)

document
    .getElementById("divbutton")
    .addEventListener("click", division)




function addition() {
    const Num1 = Number(document.getElementById("AddNum1").value)
    const Num2 = Number(document.getElementById("AddNum2").value)
    document.getElementById("AddResult").textContent = Num1 + Num2
}

function subtraction() {
    const Num1 = Number(document.getElementById("SubNum1").value)
    const Num2 = Number(document.getElementById("SubNum2").value)
    document.getElementById("SubResult").textContent = Num1 - Num2
}

function multiplication() {
    const Num1 = Number(document.getElementById("MulNum1").value)
    const Num2 = Number(document.getElementById("MulNum2").value)
    document.getElementById("MulResult").textContent = Num1 * Num2
}

function division() {
    const Num1 = Number(document.getElementById("DivNum1").value)
    const Num2 = Number(document.getElementById("DivNum2").value)
    document.getElementById("DivResult").textContent = Num1 / Num2
}

*/

