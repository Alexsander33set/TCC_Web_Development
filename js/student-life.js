/*Start-Search-bar*/
const btn_mobile = document.querySelector('#nav_mobile_menu')
const mobile_menu = document.querySelector('.hide')
const btn_menu = document.querySelector('.fi-rr-menu-burger')
const btn_exit = document.querySelector('.fi-br-cross')

const search_button = document.querySelector('.fi-rr-search')
const search_window = document.querySelector('.section-search')

btn_menu.onclick = ()=>{
    mobile_menu.classList.toggle("hide"),
    btn_exit.style.display ="block"
    btn_menu.style.display ="none"
}

btn_exit.onclick = ()=>{
    mobile_menu.classList.toggle("hide"),
    btn_exit.style.display ="none"
    btn_menu.style.display ="block"
}

search_button.onclick = ()=>{
    search_window.classList.toggle('hide')

}
/*End-Search-bar*/









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