// ANIMATION NAVBAR//
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}
function closeNav() {
    let navBtn = document.querySelector(".closebtn")
    navBtn.addEventListener("click", () => {
        document.getElementById("myNav").style.width = "0%";
    })
}

function close() {
    document.getElementById("myNav").style.width = "0%";
}
function initNavBarChange() {
    let nbClick = 0
    let nav = document.querySelector(".nav_container")
    nav.addEventListener("click", () => {
        nav.classList.toggle("change")
        openNav()
        nbClick++
        if(nbClick != 1 ) {
            close()
            nbClick =''
        }
    })
}

initNavBarChange()


// Animation Form//
function showForm() {
    let showFormContent = document.querySelector(".form_content")
    showFormContent.classList.add("notHide")
    showFormContent.classList.add("animation")
}

function showInputs() {
    let inputsShow = document.querySelectorAll(".form-hide")
    for(let i = 0; i < inputsShow.length; i++) {
        inputsShow[i].classList.add('animation_inputs')   
    }
}


function initShowForm() {

    btnShow = document.querySelector(".showForm button")
    btnShow.addEventListener("click", () => {
    
        showForm()
        showInputs()
    })
}

initShowForm()