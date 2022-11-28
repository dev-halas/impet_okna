const orderFormButtons = document.querySelectorAll('.footerButton');
const orderForms = document.querySelectorAll('.orderForm');
const formExit = document.querySelectorAll('.formExit')

orderFormButtons.forEach((button, form) =>{
    button.addEventListener('click', () => {

        orderForms.forEach((form) => {
            form.classList.remove('--open')
        })

        orderForms[form].classList.toggle('--open')
    })

    formExit[form].addEventListener('click', () => {
        orderForms[form].classList.remove('--open')
    })
})



