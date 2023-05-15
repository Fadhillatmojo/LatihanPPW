console.log("Hello world from script.js");
const coba = document.getElementById('coba-2');
coba.innerHTML= "<p>ini dari script2.js</p>";
const arrayMahasiswa = ["Fadhil", "verno", "tanto", "askar", "ghift"];
coba.innerHTML = "<p>" + arrayMahasiswa+ "</p>";

// addeventlistener
const coba2 = document.getElementById('coba-over');
function printCoba2() {
    alert('Kamu keren');
}
coba2.addEventListener("mouseenter", printCoba2);