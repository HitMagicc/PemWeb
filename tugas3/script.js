function kalkulator() {
    const bil1 = document.getElementById("bil1");
    const bil2 = document.getElementById("bil2");
    const hasil = document.getElementById("hasil");
    const gantiText = document.getElementById("ganti-text");

    document.getElementById("tambah").addEventListener("click", function() {
        hasil.value = parseFloat(bil1.value) + parseFloat(bil2.value);
        gantiText.innerHTML = "+";
    });

    document.getElementById("kurang").addEventListener("click", function() {
        hasil.value = parseFloat(bil1.value) - parseFloat(bil2.value);
        gantiText.innerHTML = "-";
    });

    document.getElementById("kali").addEventListener("click", function() {
        hasil.value = parseFloat(bil1.value) * parseFloat(bil2.value);
        gantiText.innerHTML = "×";
    });

    document.getElementById("bagi").addEventListener("click", function() {
        if (parseFloat(bil2.value) !== 0) {
            hasil.value = parseFloat(bil1.value) / parseFloat(bil2.value);
            gantiText.innerHTML = "/";
        } else {
            hasil.value = "Error"; 
        }
    });
}
window.onload = kalkulator;
