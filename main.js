const inputData = document.getElementById("inputData");
const btnKirim = document.getElementById("btnKirim");

btnKirim.addEventListener("click", function () {
    const data = inputData.value.trim();

    if (data === "") {
        alert("Inputnya jngn ksng");
        return;
    }

    alert("Data yang terkirim: " + data);

    console.log("Data:", data);

    inputData.value = "";
});
