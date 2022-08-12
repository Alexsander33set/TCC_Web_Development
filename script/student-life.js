// Switch Text

let time = 8000,
  currentImageIndex = 0,
  phrase = document
    .querySelectorAll(".header-text h1")
max = phrase.length;

function nextPhrase() {

  phrase[currentImageIndex]
    .classList.remove("selected")

  currentImageIndex++

  if (currentImageIndex >= max)
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

/*-----Mouse-light-----*/

document.addEventListener('mousemove', (position) => {
  const mouse = document.querySelector('.mouse')
  mouse.style.left = position.pageX + 'px';
  mouse.style.top = position.pageY + 'px';
})

/*---------Close-Header-Links---------------------------------------------------------------------------------------------------------------*/

function links_close() {
  const close_links = document.querySelector(".header-links .fi-rr-cross-small")
  history.go(-1)
}

/*Card-Selector*/
const beg = document.querySelector('.beg')
const int = document.querySelector('.int')
const pro = document.querySelector('.pro')


/*------------------------------------------------------------------------------------------------------------------------*/
const sl_default = document.querySelector('#sl-default')
const sl_dev_web = document.querySelector('#sl-dev-web')
const sl_animator = document.querySelector('#sl-anim')
const sl_photo = document.querySelector('#sl-photo')

function show_dev_web() {
  sl_default.classList.add('hide')
  sl_dev_web.classList.remove('hide')
  sl_animator.classList.add('hide')
  sl_photo.classList.add('hide')
}

function show_animator() {
  sl_default.classList.add('hide')
  sl_dev_web.classList.add('hide')
  sl_animator.classList.remove('hide')
  sl_photo.classList.add('hide')
}

function show_fotografia() {
  sl_default.classList.add('hide')
  sl_dev_web.classList.add('hide')
  sl_animator.classList.add('hide')
  sl_photo.classList.remove('hide')
}


/*----------Web Developer----------*/
function beginner() {
  window.location.href = (window.location.pathname + '#beginner');
  beg.checked = "checked"
}
function intermediate() {
  window.location.href = (window.location.pathname + '#intermediate');
  int.checked = "checked"
}
function profissional() {
  window.location.href = (window.location.pathname + '#profissional');
  pro.checked = "checked"
}

/*----------Animator----------*/
function beginner_animator() {
  window.location.href = (window.location.pathname + '#beginner_animator');
  beg.checked = "checked"
}
function intermediate_animator() {
  window.location.href = (window.location.pathname + '#intermediate_animator');
  int.checked = "checked"
}
function profissional_animator() {
  window.location.href = (window.location.pathname + '#profissional_animator');
  pro.checked = "checked"
}

/*----------Fotografia----------*/
function beginner_photo() {
  window.location.href = (window.location.pathname + '#beginner_photo');
  beg.checked = "checked"
}
function intermediate_photo() {
  window.location.href = (window.location.pathname + '#intermediate_photo');
  int.checked = "checked"
}
function profissional_photo() {
  window.location.href = (window.location.pathname + '#profissional_photo');
  pro.checked = "checked"
}
