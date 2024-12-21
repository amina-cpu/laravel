<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
    <link rel="stylesheet" href="{{ asset('css/homestyle.css') }}">
    <!-- Latest compiled and minified CSS -->
<!-- https://xstore.8theme.com/demos/hosting/-->


<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

       <!-- Announcement Bar -->

        <div  class="canada"> <a href="{{ route('signup') }}">
        <p>LOGIN/SIGNUP→</p></a></div>
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
            <div class="icon search-icon"><i class="fa fa-search" aria-hidden="true"></i></div>

            <!-- Navigation -->
            <nav class="navigation">
                <a href="#">HOME</a>
                <div class="dropdown">
                    <a href="#">ABOUT US</a>
                </div>
                <a href="{{ route('full-list') }}">SHOP ALL</a>
                <a href="#">DRESSES</a>
                <a href="#">HIGH HEELS</a>
                <a href="#">PANTS</a>
                <a href="#">SUITS</a>
                <a href="#">BATH & BODY</a>
                <a href="#">ECO-REFILLS</a>
                <a href="#">HOTEL AMENITIES</a>
            </nav>

            


            <!-- User Icons -->
            <div class="user-icons">
                
                <div class="icon"><i class='fas fa-cart-plus' style='font-size:24px'></i></div>
            </div>
        </div>
    </header>
    <div class="content-container">
        <div class="text-content">
            <h2>Welcome to BRAND!</h2>
            <br>
            <p>
                Discover our very unique collection of clothing. 
            </p>
            <div class="button-container">
    <button class="buy-button">Start looking</button>
    <button class="info-button" > <a href="#features">More info </a><span>&#x25BC;</span></button>
</div>
<div class="arrow-container">
    <div class="outline-arrow"></div>
</div>

        </div>
        <div class="image-overlay">
            <img src="{{asset('images/cloth.jpg')}}" alt="Sample Image" class="overlay-image">
        </div>
    </div>
  
    <div id="features">
    


  
     
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>  
    <section class="py-6 bg-light-primary">
    <div class="container" >
        <div class="row justify-content-center text-center mb-4">
            <div class="col-xl-6 col-lg-8 col-sm-10">
                <h2 class="section-title">Features You'll Love</h2>
                <p class="text-muted">Discover the perfect blend of convenience and style to enhance your shopping experience.</p>
            </div>
        </div>

        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 text-center justify-content-center">
            <!-- Free Shipping -->
            <div class="col my-3">
                <div class="card hover-scale">
                    <div class="card-body">
                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20 8h-3V5a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v11a2 2 0 0 0 2 2h1a3 3 0 0 0 6 0h4a3 3 0 0 0 6 0h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2zm-5-2v2H3V6h12zm-9 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3-3h-5V9h3l2 2v1z" />
                            </svg>
                        </div>
                        <h6 class="feature-title">Free Shipping</h6>
                        <p class="feature-text">Enjoy free shipping on all orders that are over $50.</p>
                    </div>
                </div>
            </div>

            <!-- Easy Returns -->
            <div class="col my-3">
                <div class="card hover-scale">
                    <div class="card-body">
                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M18 6a1 1 0 0 1 0 2h-1.35a6 6 0 0 1-11.29 4H6a1 1 0 0 1 0 2H3a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v1.35a8 8 0 0 0 15.24-3.58H18z" />
                            </svg>
                        </div>
                        <h6 class="feature-title">Easy Returns</h6>
                        <p class="feature-text">Hassle-free returns within 30 days of purchase.</p>
                    </div>
                </div>
            </div>

            <!-- Exclusive Discounts -->
            <div class="col my-3">
                <div class="card hover-scale">
                    <div class="card-body">
                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M11 2H6a2 2 0 0 0-2 2v5h2V4h5V2zm7 7h-3v2h1.59l-7.29 7.29-1.29-1.29-1.41 1.41L10.41 20h.09l7.3-7.3V15h2V9h-2z" />
                            </svg>
                        </div>
                        <h6 class="feature-title">Exclusive Discounts</h6>
                        <p class="feature-text">Sign up for special offers and seasonal discounts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
       
<br>
<br>
<br>
<br>
<!-- Moving Product List -->
<div class="container-fluid">

  <div class="row align-items-center" id="slider-text">
    <div class="col-md-6">
      <h2>NEW COLLECTION</h2> 
    </div>
    <div class="col-md-6 text-end">
      <a href="#" class="view-all-link">View all</a>
    </div>
 
</div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">
        
            
        @foreach ($products as $index => $product)
    <div class="item {{ $index == 0 ? 'active' : '' }}">
        <div class="col-xs-12 col-sm-6 col-md-2">
            <a href="#">
                @if ($product->images->isNotEmpty())
                    <img src="{{ asset('images/' . $product->images->first()->image_url) }}" alt="{{ $product->name }}" class="img-responsive center-block">
                @else
                    <img src="{{ asset('images/default.jpg') }}" alt="Default Image" class="img-responsive center-block">
                @endif
            </a>
            
            <h4 class="text-center">
                <a href="{{ route('product.description', ['id' => $product->id]) }}">{{ $product->name }}</a>
            </h4>
            <h5 class="text-center">{{ $product->price }}</h5>
        </div>
    </div>
@endforeach

          </div> 

          <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
        </div>
      </div>
    </div>
  </div>

 


<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2>ON SALE</h2>
    </div>
  </div>
</div>

<!-- Moving Product List -->
<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">
        
            
        @foreach ($products as $index => $product)
    <div class="item {{ $index == 0 ? 'active' : '' }}">
        <div class="col-xs-12 col-sm-6 col-md-2">
            <a href="#">
                @if ($product->images->isNotEmpty())
                    <img src="{{ asset('images/' . $product->images->first()->image_url) }}" alt="{{ $product->name }}" class="img-responsive center-block">
                @else
                    <img src="{{ asset('images/default.jpg') }}" alt="Default Image" class="img-responsive center-block">
                @endif
            </a>
            
            <h4 class="text-center">
                <a href="{{ route('product.description', ['id' => $product->id]) }}">{{ $product->name }}</a>
            </h4>
            <h5 class="text-center">{{ $product->price }}</h5>
        </div>
    </div>
@endforeach

          </div> 
          <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
        </div>
      </div>
    </div>
  </div>

 


<script>$(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});
</script>
<!-- Item slider end-->
<br/><br/>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>

  <!-- Footer -->
<footer
          class="text-center text-lg-start text-white"
          style="background-color: #fff"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: #b5a192"
             
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Company name</h6>
            
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
                <br>
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">MDBootstrap</a>
            </p>
            <p>
              <a href="#!" class="text-white">MDWordPress</a>
            </p>
            <p>
              <a href="#!" class="text-white">BrandFlow</a>
            </p>
            <p>
              <a href="#!" class="text-white">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
    <br>
    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
</footer>
  <!-- Footer -->

<!-- End of .container -->

</body>
</html>
