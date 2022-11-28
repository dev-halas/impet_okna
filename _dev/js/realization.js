const gallery = document.querySelector('.gallery')

if(gallery) {
    const r_photos = document.querySelectorAll('.realization--grid img')
    const exitGallery = document.querySelector('.gallery--exit')
    const galleryImg = document.querySelector('.gallery img')
    const nextPhotoButton = document.querySelector('.gallery--next')
    const prevPhotoButton = document.querySelector('.gallery--prev')
    
    let currentPhoto = 0;
    
    
    r_photos.forEach((img, index)=> {
        img.addEventListener('click', () => {
            gallery.classList.add('--open')
            galleryImg.src = img.src
            currentPhoto = index
        })
    })
    
    const nextPhoto = () => {
        currentPhoto++
    
        (currentPhoto > r_photos.length - 1) ? (currentPhoto = 0) : currentPhoto
    
        galleryImg.src = r_photos[currentPhoto].src
    }
    
    nextPhotoButton.addEventListener('click', nextPhoto)
    
    
    const prevPhoto = () => {
        currentPhoto--
    
        (currentPhoto < 0) ? (currentPhoto = r_photos.length - 1) : currentPhoto
    
        galleryImg.src = r_photos[currentPhoto].src
    }
    
    prevPhotoButton.addEventListener('click', prevPhoto)
    
    exitGallery.addEventListener('click', () => {
        gallery.classList.remove('--open')
    })
    
    document.addEventListener('keydown', (e) => {
        if(e.key === 'Escape') {
            gallery.classList.remove('--open')
        }
        if(e.key === 'ArrowRight') {
            nextPhoto()
        }
        if(e.key === 'ArrowLeft') {
            prevPhoto()
        }
    })
}

