let input1 = document.getElementById("input1");
let input2 = document.getElementById("input2");
let h4 = document.getElementById("h4");
let btn = document.getElementById("btn").addEventListener("click", function abc() {
    if (input1.value === "") {
        document.getElementById("h4").style.display = "block"


    } else if (input1.value !== "") {
        document.getElementById("h4").style.display = "none";
        input2.value = (input1.value * 30.48 + "cm");
        document.getElementById("input2").style.backgroundColor = "rgb(56, 56, 52)";
        document.getElementById("input2").style.color = "white";



    } else {
        input2.value = (input1.value * 30.48 + "cm");
    }
});


