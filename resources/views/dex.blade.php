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
    
  </style>
</head>
<body>

  <main class="main-container">
    <header class="header">
      <div class="header__navigation">
        <img class="header__menu" src="{{ asset('images/icon-menu.svg') }}" alt="menu icon">
        <img class="header__logo" src="{{ asset('images/logo.svg') }}" alt="logo">

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
            <!-- inicio modal navbar -->
     
  
      <!-- final modal navbar -->

      <div class="header__cart-avatar">
        <div class="header__cart">
          <div class="header__cart--notification">0</div>
          <img src="{{ asset('images/icon-cart.svg') }}" alt="">
        </div>
        <img class="header__avatar" src="{{ asset('images/user-icon-vector.jpg') }}" alt="">
      </div>
    </header>
   
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