document.addEventListener('DOMContentLoaded', () => {
    const products = document.querySelectorAll('.product');
    const closeBtn = document.querySelector('.close-btn');
    const productDetailsContainer = document.querySelector('.product-details-container');
    
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

        colorTypesImages.forEach(image =>{
            image.src = `../media/product_pictures/${productImage}`;
        })
        // document.querySelector('.color_types img')
        
        // Show the popup
        // popup.style.display = 'block';
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
        // popup.style.display = 'none';
        productDetailsContainer.classList.remove('displayProductDetails');
    });
});
