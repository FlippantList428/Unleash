function zegar() {
    const teraz = new Date();

    // Przygotowanie skryptu zegara

    let godzina = teraz.getHours();
    let minuta = teraz.getMinutes();
    let sekunda = teraz.getSeconds();

    // Formatowanie zegara

    // Dodawanie 0 jeśli godzina minuta i sekunda są poniżej 10
    if (godzina < 10) godzina = "0" + godzina;
    if (minuta < 10) minuta = "0" + minuta;
    if (sekunda < 10) sekunda = "0" + sekunda;

    const elementZegara = document.getElementById("zegar");
    if (elementZegara) {
        elementZegara.innerHTML = godzina + ":" + minuta + ":" + sekunda;
    }

    setTimeout(zegar, 1000);
}

zegar();