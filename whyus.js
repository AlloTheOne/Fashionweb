const navbar = document.querySelector('.navbar')
window.addEventListener('scroll',fixNav)

function fixNav(){
   if(window.scrollY > navbar.offsetHeight +650)

    {
    navbar.classList.add('active')
  } else {
    navbar.classList.remove('active')
  }

}


const boxes = document.querySelectorAll('.box')

window.addEventListener('scroll', checkBoxes)

checkBoxes()

function checkBoxes(){

    const triggerBottom = window.innerHeight / 8 * 6

    boxes.forEach(box =>{
        const boxTop = box.getBoundingClientRect().top

        if(boxTop < triggerBottom){
            box.classList.add('show')
        }else {
            box.classList.remove('show')
        }
    })
}