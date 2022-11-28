/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(8);
/* harmony import */ var _css_styles_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_styles_scss__WEBPACK_IMPORTED_MODULE_0__);
__webpack_require__(1);
__webpack_require__(2);
__webpack_require__(3);
__webpack_require__(4);
__webpack_require__(5);

__webpack_require__(6);

__webpack_require__(7);




/***/ }),
/* 1 */
/***/ (function(module, exports) {

const hamburger = document.querySelector('.hamburger');
const headerLinks = document.querySelector('.headerLinks');
const header = document.querySelector('.header');
const rightBar = document.querySelector('.rightBar');
const pageHeight = window.innerHeight * 0.8;

const footerScrollUp = document.querySelector('.footerScrollUp');

const headerButtons = document.querySelectorAll('.headerLinks a');

hamburger.addEventListener('click', () => {
    header.classList.toggle('active');
    hamburger.classList.toggle('active');
    headerLinks.classList.toggle('active');
    rightBar.classList.toggle('active');
});

headerButtons.forEach((link) => {
    link.addEventListener('click', () => {
        header.classList.remove('active');
        hamburger.classList.remove('active');
        headerLinks.classList.remove('active');
        rightBar.classList.remove('active');
    });
});

window.onscroll = () => {
    let top = window.scrollY;
    top >= pageHeight ? header.classList.add('scrolled') : header.classList.remove('scrolled');
    top >= pageHeight ? footerScrollUp.classList.add('scrollUpShow') : footerScrollUp.classList.remove('scrollUpShow');
};


/***/ }),
/* 2 */
/***/ (function(module, exports) {

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

/***/ }),
/* 3 */
/***/ (function(module, exports) {

const swiper = new Swiper('.logoCarousel', {
    loop: true,
    grabCursor: false,
    speed: 4000,
    allowTouchMove: false,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    spaceBetween: 30,

    // Responsive breakpoints
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        960: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1300: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
    },
});


/***/ }),
/* 4 */
/***/ (function(module, exports) {

const productContainer = document.querySelector('.product--items');
const products = document.querySelectorAll('.product--item');

const producerShow = () => {
    products.forEach((item) => {
        const button = item.querySelector('.product--more');
        const close = item.querySelector('.close');
        button.addEventListener('click', () => {
            if (item.classList.contains('--active')) {
                item.classList.toggle('--active');
            } else {
                products.forEach((removeActive) => {
                    removeActive.classList.remove('--active');
                });

                item.classList.toggle('--active');
            }
        });
        close.addEventListener('click', () => {
            item.classList.remove('--active');
        });
    });
};

if (!productContainer) {
    return;
}

producerShow();


/***/ }),
/* 5 */
/***/ (function(module, exports) {

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





/***/ }),
/* 6 */
/***/ (function(module, exports) {

const elements = document.querySelectorAll('.animate');
    const options = {
        root: null,
        threshhold: 0.5,
        rootMargin: '0px 0px -10% 0px'
     };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if(!entry.isIntersecting) {
                return;
            }
            entry.target.classList.add('animated');
            observer.unobserve(entry.target)
        })
    }, options)

    elements.forEach(element => observer.observe(element))


/***/ }),
/* 7 */
/***/ (function(module, exports) {

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



/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })
/******/ ]);