function verificar() {
    let num1 = document.getElementById("papa").value;
    if (num1 < 0 || num1 > 5) {
        alert("Error ---- el PAPA de ser de un valor entre 0 y 5 !!!!");
    }
}