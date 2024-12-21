<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" src="{{ asset('images/favicon-32x32.png') }}">
  
  <title>E-commerce product page</title>
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution { font-size: 18px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
    body, html, div, p, a, h1 {
    margin: 0;
    padding: 0;
    font-family: "Arial", sans-serif;
    text-decoration: none;
    box-sizing: border-box;
}

body {
    background-color: #fff;
}

.canada {
    background-color: #fff;
    color: black;
    text-align: center;
    font-size: 16px;
    padding: 10px 20px;
    display: flex;
    justify-content: center; /* Centers the content horizontally */
    align-items: center;    /* Centers the content vertically */
    gap: 15px;              /* Adds spacing between the text elements */
}

.canada p {
    margin: 0; /* Remove default margin to avoid alignment issues */
}
.announcement-bar {
    background-color: #b5a192;
    color: #fff;
    text-align: center;
    font-size: 16px;
    padding: 10px 20px;
    display: flex;
    justify-content: center; /* Centers the content horizontally */
    align-items: center;    /* Centers the content vertically */
    gap: 15px;              /* Adds spacing between the text elements */
}

.announcement-bar p {
    margin: 0; /* Remove default margin to avoid alignment issues */
}

/* Header */
.main-header {
    background-color: #fff;
    border-bottom: 1px solid #eee;
    padding: 15px 20px;
}

.header-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Logo */
.logo {
    text-align: center;
    display: flex;
    justify-content: center; /* Centers the content horizontally */
    align-items: center;   
}

.logo p {
    font-size: 18px;
    font-weight: normal;
    padding-top:10px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 0;
}

/* Navigation */
.navigation {
    display: flex;
    gap: 15px;
}

.navigation a {
    font-size: 14px;
    color: #333;
    text-transform: uppercase;
    transition: color 0.3s;
}

.navigation a:hover {
    color: #556b67;
    text-decoration: underline;
}

/* Icons */
.user-icons {
    display: flex;
    gap: 15px;
}

.icon {
    font-size: 18px;
    cursor: pointer;
    color: #333;
}

.icon:hover {
    color: #556b67;
}
  </style>
</head>
<body>

 
   
       <!-- Announcement Bar -->

       <div  class="canada">
        <p>FREE SHIPPING OVER $99 IN CANADA →</p></div>
         <div  class="announcement-bar">
        <p>WE ARE UNABLE TO SHIP TO PO BOXES AT THIS TIME DUE TO THE CANADA POST STRIKE. PLEASE PROVIDE A STREET ADDRESS AT CHECKOUT →</p>
</div>
    
<!-- Logo -->
<div class="logo">
                <p>Brand Logo</p>
            </div>
    <!-- Header -->
    <header class="main-header">
        <div class="header-inner">
            <!-- Search Icon -->
            <div class="icon search-icon">🔍</div>

            <!-- Navigation -->
            <nav class="navigation">
                <a href="/homepage">HOME</a>
                <div class="dropdown">
                    <a href="#">SHOP ALL</a>
                </div>
                <a href="#">CANDLES</a>
                <a href="#">ESSENTIAL OILS</a>
                <a href="#">SOAP</a>
                <a href="#">SKINCARE</a>
                <a href="#">HAIRCARE</a>
                <a href="#">BATH & BODY</a>
                <a href="#">ECO-REFILLS</a>
                <a href="#">HOTEL AMENITIES</a>
            </nav>

            

            <!-- User Icons -->
            <div class="user-icons">
                <div class="icon">👤</div>
                <div class="icon">🛒</div>
            </div>
        </div>
    </header>
    <main class="main-container">
    <section class="content">
    
    <article class="gallery">
    <div class="gallery__image-container">
    @if ($product->images->isNotEmpty())
        <img class="gallery__previus" src="{{ asset('images/' . $product->images->first()->image_url) }}" alt="{{ $product->name }}">
    @else
        <p>No image available</p>
    @endif
    </div>


         <div class="gallery__thumnails">
        @foreach ($product->images as $image)
        <img  class="gallery__thumnail" src="{{ asset('images/' . $image->image_url) }}" alt="{{ $product->name }}">
         @endforeach
         </div>

         </article>
         <article class="details">
         <h2 class="details__company">Product Details</h2>
        <h2 class="details__title">{{ $product->name }}</h2>
       
        <div class="details__rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9734;</span>
        </div>
        <div class="details__prices">
            <p class="details__now">${{ $product->price }} <span class="details__discount">50%</span></p>
            <p class="details__before">$250.00</p>
        </div>
        <p class="details__description">
            {{ $product->description ?? 'No description available.' }}
        </p>
        <div class="details__color-size">
            <div class="details__colors">
                <p>Color: <strong>{{ $product->colors->pluck('name')->join(', ') }}</strong></p>
            </div>
            <div class="details__sizes">
            <p><strong>Sizes :</strong></p>
            <div class="size-options">
              <button class="size-option">S</button>
              <button class="size-option">M</button>
              <button class="size-option">L</button>
              
            </div>
            <a href="#" class="size-guide">Size guide</a>
          </div>
        </div>

        <div class="details__product-quantity">
            <div class="input">
                <img class="input__minus" src="{{ asset('images/icon-minus.svg') }}" alt="minus">
                <input class="input__number" type="text" value="0">
                <img class="input__plus" src="{{ asset('images/icon-plus.svg') }}" alt="plus">
            </div>
            <button class="details__button">
                <img src="{{ asset('images/icon-cart-white.svg') }}" alt=""> Add to cart
            </button>
        </div>
    </article>
</section>


    <!-- inicio cart modal -->
    <div class="cart-modal">
      <p class="cart-modal__title">Cart</p>
      <div class="cart-modal__chekout-container">
        <div class="cart-modal__details-container">
          <img class="cart-modal__image" src="{{ asset('images/image-product-1-thumbnail.jpg') }}" alt="error">
          <div>
            <p class="cart-modal__product">Autumn Limited Edition...</p>
            <p class="cart-modal__price">$125 x3 <span>$375.00</span> </p>
          </div>
          <img class="cart-modal__delete" src="{{ asset('images/icon-delete.svg') }}" alt="delete">
        </div>
        <button class="cart-modal__chekount" >Checkout</button>
      </div>
    </div>
    <!-- fin cart modal -->

    
  </main>
  
  <footer class="attribution">
    <!--Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="https://www.youtube.com/CodingTube" target="_blank">David Ruiz</a>.
  </footer> -->

  <!-- inicio gallery modal -->
  <div class="modal-gallery__background">
    <article class="modal-gallery">
      <div class="modal-gallery__close-container">
        <img class="modal-gallery__close" src="{{ asset('images/icon-close.svg') }}" alt="icon close">
      </div>
      <div class="modal-gallery__image-container">
        <img class="modal-gallery__previus" src="{{ asset('images/icon-previous.svg') }}" alt="previus">
        <img class="modal-gallery__next" src="{{ asset('images/icon-next.svg') }}" alt="next">
      </div>
      <div class="modal-gallery__thumnails">
        <img id="m1" class="modal-gallery__thumnail" src="{{ asset('assets/images/image-product-1-thumbnail.jpg') }}" alt="thumnail">
        <img id="m2" class="modal-gallery__thumnail" src="{{ asset('assets/images/image-product-2-thumbnail.jpg') }}" alt="thumnail">
        <img id="m3" class="modal-gallery__thumnail" src="{{ asset('assets/images/image-product-3-thumbnail.jpg') }}" alt="thumnail">
        <img id="m4" class="modal-gallery__thumnail" src="{{ asset('assets/images/image-product-4-thumbnail.jpg') }}" alt="thumnail">
      </div>
    </article>
  </div>
  <!-- fin gallery modal -->

  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>