// Cambio de cantidad de articulos ingresado por el usuario.

const minusBtn = document.querySelector('.input__minus');
const plusBtn = document.querySelector('.input__plus');
let userInput = document.querySelector('.input__number');

let userInputNumber = 0;

plusBtn.addEventListener('click', ()=>{
    userInputNumber++;
    userInput.value = userInputNumber;
    console.log(userInputNumber);
});

minusBtn.addEventListener('click', ()=>{
    userInputNumber--;
    if(userInputNumber <= 0){
        userInputNumber = 0;
    }
    userInput.value = userInputNumber;
    console.log(userInputNumber);
});

// Agregar el total de productos al carrito cuando se presiona el boton ADD TO CART
const addToCartBtn = document.querySelector('.details__button');
let cartNotification = document.querySelector('.header__cart--notification');
let lastValue = parseInt(cartNotification.innerText);

addToCartBtn.addEventListener('click', ()=>{ 
    lastValue = lastValue + userInputNumber;
    
    cartNotification.innerText = lastValue;
    cartNotification.style.display = 'block';
    drawProductInModal();
    
});

//Mostrar el modal con el detalle del carrito
const cartIconBtn = document.querySelector('.header__cart');
const cartModal = document.querySelector('.cart-modal');
// let priceModal = document.querySelector('.cart-modal__price');
const productContainer = document.querySelector('.cart-modal__chekout-container');

cartIconBtn.addEventListener('click', ()=>{
    cartModal.classList.toggle('show');

    if(lastValue === 0){
        productContainer.innerHTML = '<p class="cart-empty">Your cart is empty</p>';
    }else{
        drawProductInModal();
    }
    
});

//Borrar el contenido del carrito
function deleteProduct(){
    const deleteProductBtn = document.querySelector('.cart-modal__delete');
    deleteProductBtn.addEventListener('click', ()=>{
        productContainer.innerHTML = '<p class="cart-empty">Your cart is empty</p>';
        lastValue = 0;
        cartNotification.innerText = lastValue;
    });
}

// Change main image when a thumbnail is clicked
let thumbnails = document.querySelectorAll('.gallery__thumnail');
thumbnails = [...thumbnails];

const imageContainer = document.querySelector('.gallery__image-container');

// Set the first image as the main image on page load
window.addEventListener('DOMContentLoaded', () => {
    const firstThumbnail = document.querySelector('.gallery__thumnail');
    if (firstThumbnail) {
        imageContainer.style.backgroundImage = `url(${firstThumbnail.src})`;
    }
});

thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', event => {
        const selectedImageSrc = event.target.src; // Get the thumbnail source
        imageContainer.style.backgroundImage = `url(${selectedImageSrc})`;

        // Highlight the selected thumbnail
        thumbnails.forEach(thumb => thumb.classList.remove('active'));
        thumbnail.classList.add('active');
    });
});

// Change modal images using modal thumbnails
let modalThumbnails = document.querySelectorAll('.modal-gallery__thumnail');
const modalImageContainer = document.querySelector('.modal-gallery__image-container');
modalThumbnails = [...modalThumbnails];

modalThumbnails.forEach(modalThumbnail => {
    modalThumbnail.addEventListener('click', event => {
        const selectedImageSrc = event.target.src; // Get the thumbnail source
        modalImageContainer.style.backgroundImage = `url(${selectedImageSrc})`;
    });
});

// Functions to change images using next/previous buttons
function changeNextImage(imgContainer, imgList) {
    const currentSrc = imgContainer.style.backgroundImage
        .replace('url("', '')
        .replace('")', '');
    const currentIndex = imgList.findIndex(img => img.src === currentSrc);
    const nextIndex = (currentIndex + 1) % imgList.length;
    imgContainer.style.backgroundImage = `url(${imgList[nextIndex].src})`;
}

function changePreviousImage(imgContainer, imgList) {
    const currentSrc = imgContainer.style.backgroundImage
        .replace('url("', '')
        .replace('")', '');
    const currentIndex = imgList.findIndex(img => img.src === currentSrc);
    const prevIndex = (currentIndex - 1 + imgList.length) % imgList.length;
    imgContainer.style.backgroundImage = `url(${imgList[prevIndex].src})`;
}

// Event listeners for next/previous buttons in the modal
const nextModalBtn = document.querySelector('.modal-gallery__next');
const prevModalBtn = document.querySelector('.modal-gallery__previus');

nextModalBtn.addEventListener('click', () => {
    changeNextImage(modalImageContainer, modalThumbnails);
});

prevModalBtn.addEventListener('click', () => {
    changePreviousImage(modalImageContainer, modalThumbnails);
});

// Mostrar el navbar cuando presiono el menu de hamburgesa
const hamburgerMenu = document.querySelector('.header__menu');
const modalNavbar = document.querySelector('.modal-navbar__background');
const closeModalNavbar = document.querySelector('.modal-navbar__close-icon');

modalNavbar.style.display = 'none'

hamburgerMenu.addEventListener('click', ()=>{
    console.log('abrir modal');
    modalNavbar.style.display = 'block';
});

closeModalNavbar.addEventListener('click', ()=>{
    modalNavbar.style.display = 'none';
});





// FUNCIONES

function drawProductInModal(){
    productContainer.innerHTML = `
        <div class="cart-modal__details-container">
            <img class="cart-modal__image" src="./images/image-product-1-thumbnail.jpg" alt="error">
            <div>
            <p class="cart-modal__product">Autumn Limited Edition...</p>
            <p class="cart-modal__price">$125 x3 <span>$375.00</span> </p>
            </div>
            <img class="cart-modal__delete" src="./images/icon-delete.svg" alt="delete">
        </div>
        <button class="cart-modal__chekount" >Checkout</button>`
    deleteProduct()
    let priceModal = document.querySelector('.cart-modal__price');
    priceModal.innerHTML = `$125 x${lastValue} <span>$${lastValue*125}.00</span>`;
}

function changeNextImage(imgContainer){
    if(imgIndex === 4){
        imgIndex = 1;
    }else{
        imgIndex++;
    }
    imgContainer.style.backgroundImage = `url('{{ asset(images/image-product-${imgIndex}.jpg')`
}

function changePreviusImage(imgContainer){
    if(imgIndex === 1){
        imgIndex = 4;
    }else{
        imgIndex--;
    }
    imgContainer.style.backgroundImage = `url('{{ asset(images/image-product-${imgIndex}.jpg')`
}