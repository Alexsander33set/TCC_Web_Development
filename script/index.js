
const btn_mobile = document.querySelector('#nav_mobile_menu')
const mobile_menu = document.querySelector('.hide')
const btn_menu = document.querySelector('.fi-rr-menu-burger')
const btn_exit = document.querySelector('.fi-rr-cross')

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