document.addEventListener('DOMContentLoaded', () => {
    const products = document.querySelectorAll('.product');
    const closeBtn = document.querySelector('.close-btn');
    const orderBtn = document.querySelector('.order_btn');
    const productDetailsContainer = document.querySelector('.product-details-container');
    const orderFormContainer = document.querySelector('.order_form');
    const orderForm = document.getElementById('form');
    const formContainer = document.querySelector('.form-container');
    
    // Function to open the popup with product details
    function openPopup(product) {
        const productName = product.getAttribute('data-name');
        const productPrice = product.getAttribute('data-price');
        const productImage = product.getAttribute('data-image');
        
        // Populate popup with selected product details
        document.querySelector('.p_name').textContent = productName;
        document.querySelector('.p_price span').textContent = productPrice;
        document.querySelector('.product_image img').src = `../media/product_pictures/${productImage}`;
        const colorTypesImages = document.querySelectorAll('.color_types img');

        colorTypesImages.forEach(image => {
            image.src = `../media/product_pictures/${productImage}`;
        });
        
        // Show the popup
        productDetailsContainer.classList.add('displayProductDetails');
    }
    
    // Event listener for each product
    products.forEach(product => {
        const viewMore = product.querySelector('.view_more');
        viewMore.addEventListener('click', () => {
            openPopup(product);
        });
    });
    
    // Event listener to close the popup
    closeBtn.addEventListener('click', () => {
        productDetailsContainer.classList.remove('displayProductDetails');
    });
    
    // Event listener to close the product details and show the order form
    orderBtn.addEventListener('click', () => {
        productDetailsContainer.classList.remove('displayProductDetails');
        orderFormContainer.classList.add('displayProductDetails');
    });

    // Event listener to close the form if clicked outside
    document.addEventListener('click', (event) => {
        // Check if the click was outside the form container
        if (formContainer.contains(event.target) && !orderForm.contains(event.target)) {
            orderFormContainer.classList.remove('displayProductDetails');
        }
    });
});
