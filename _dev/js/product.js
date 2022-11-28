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
