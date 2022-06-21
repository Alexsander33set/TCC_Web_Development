let time = 8000,
    currentImageIndex = 0,
    phrase = document
                .querySelectorAll(".header-text h1")
    max = phrase.length;

function nextPhrase() {

    phrase[currentImageIndex]
        .classList.remove("selected")

    currentImageIndex++

    if(currentImageIndex >= max)
        currentImageIndex = 0

    phrase[currentImageIndex]
        .classList.add("selected")
}

function start() {
    setInterval(() => {
        // troca de image
        nextPhrase()
    }, time)
}

window.addEventListener("load", start)