const aboutButtons = document.querySelectorAll('.sliderButton');
const aboutImages = document.querySelectorAll('.about--slider > img');
const aboutText = document.querySelectorAll('.about--text');


aboutButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        aboutButtons.forEach((aboutButton) => {
            aboutButton.classList.remove('--active')
        })

        aboutImages.forEach((aboutImage) => {
            aboutImage.classList.remove('--active')
        })

        aboutText.forEach((aboutText) => {
            aboutText.classList.remove('--active')
        })

        button.classList.add('--active')
        aboutImages[index].classList.add('--active')
        aboutText[index].classList.add('--active')
    })
})