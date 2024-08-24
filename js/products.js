const products = document.querySelectorAll('.product');
const closeBtn = document.querySelector('.close-btn')
const productDetailsContainer = document.querySelector('.product-details-container');

products.forEach(product => {
    product.addEventListener('click', () =>{
        productDetailsContainer.classList.add('displayProductDetails')
    })
})

closeBtn.addEventListener('click', () =>{
    productDetailsContainer.classList.remove('displayProductDetails')
})
