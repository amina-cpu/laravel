<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
  
  <title>E-commerce product page</title>
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution { font-size: 18px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
    img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;


    }
  </style>
</head>
<body>

  <main class="main-container">
    <header class="header">
      <div class="header__navigation">
        <img class="header__menu" src="{{ asset('assets/icon-menu.svg') }}" alt="menu icon">
        <img class="header__logo" src="{{ asset('assets/logo.svg') }}" alt="logo">

        <nav class="navbar">
          <ul class="navbar__items">
            <li><a class="navbar__link" href="#">Collections</a></li>
            <li><a class="navbar__link" href="#">Men</a></li>
            <li><a class="navbar__link" href="#">Women</a></li>
            <li><a class="navbar__link" href="#">About</a></li>
            <li><a class="navbar__link" href="#">Contact</a></li>
          </ul>
        </nav>


      </div>

  
      <!-- final modal navbar -->

      <div class="header__cart-avatar">
        <div class="header__cart">
          <div class="header__cart--notification">0</div>
          <img src="{{ asset('assets/images/icon-cart.svg') }}" alt="">
        </div>
        <img class="header__avatar" src="{{ asset('assets/images/user-icon-vector.jpg') }}" alt="">
      </div>
    </header>
   
    <section class="content">
    <article class="details">
        <h2 class="details__company">Product Details</h2>
        @foreach ($product->images as $image)
        <img src="{{ asset('images/' . $image->image_url) }}" alt="{{ $product->name }}">
         @endforeach


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
        </div>
        <div class="details__product-quantity">
            <div class="input">
                <img class="input__minus" href="./images/icon-minus.svg" alt="minus">
                <input class="input__number" type="text" value="0">
                <img class="input__plus" href="./images/icon-plus.svg" alt="plus">
            </div>
            <button class="details__button">
                <img href="./images/icon-cart-white.svg" alt=""> Add to cart
            </button>
        </div>
    </article>
</section>


    <!-- inicio cart modal -->
    <div class="cart-modal">
      <p class="cart-modal__title">Cart</p>
      <div class="cart-modal__chekout-container">
        <div class="cart-modal__details-container">
          <img class="cart-modal__image" src="{{ asset('assets/images/image-product-1-thumbnail.jpg') }}" alt="error">
          <div>
            <p class="cart-modal__product">Autumn Limited Edition...</p>
            <p class="cart-modal__price">$125 x3 <span>$375.00</span> </p>
          </div>
          <img class="cart-modal__delete" src="{{ asset('assets/images/icon-delete.svg') }}" alt="delete">
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
        <img class="modal-gallery__close" href="./images/icon-close.svg" alt="icon close">
      </div>
      <div class="modal-gallery__image-container">
        <img class="modal-gallery__previus" src="{{ asset('assets/images/icon-previous.svg') }}" alt="previus">
        <img class="modal-gallery__next" src="{{ asset('assets/images/icon-next.svg') }}" alt="next">
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

  <script href="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>