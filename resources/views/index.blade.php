<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
    <link rel="stylesheet" href="{{ asset('css/homestyle.css') }}">
    <!-- Latest compiled and minified CSS -->
<!-- https://xstore.8theme.com/demos/hosting/-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
 
    <style>
        /* Basic styles for the slider */
        
 
    .ima img {
        width: 100%;
        height: 100vh;
        object-fit: cover;
    }
    
        /* Global Reset */
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
#slider-text{
  padding-top: 40px;
  display: block;
}
#slider-text .col-md-6{
  overflow: hidden;
}

#slider-text h2 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 30px;
  letter-spacing: 3px;
  margin: 30px auto;
  padding-left: 40px;
}
#slider-text h2::after{
  border-top: 2px solid #c7c7c7;
  content: "";
  position: absolute;
  bottom: 35px;
  width: 100%;
  }

#itemslider h4{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  margin: 10px auto 3px;
}
#itemslider h5{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
  font-size: 12px;
  margin: 3px auto 2px;
}
#itemslider h6{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;;
  font-size: 10px;
  margin: 2px auto 5px;
}
.badge {
  background: #b20c0c;
  position: absolute;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  line-height: 31px;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;
  font-size: 14px;
  border: 2px solid #FFF;
  box-shadow: 0 0 0 1px #b20c0c;
  top: 5px;
  right: 25%;
}
#slider-control img{
  padding-top: 60%;
  margin: 0 auto;
}
@media screen and (max-width: 992px){
#slider-control img {
  padding-top: 70px;
  margin: 0 auto;
}
}

.carousel-showmanymoveone .item img {
    width: 250px;  /* Increase width */
    height: 250px; /* Make height equal to width for square aspect */
    object-fit: cover; /* Ensure image covers entire square without distortion */
    margin: 0 auto;  /* Center the image */
}
.carousel-showmanymoveone .carousel-control {
  width: 4%;
  background-image: none;
}
.carousel-showmanymoveone .carousel-control.left {
  margin-left: 5px;
}
.carousel-showmanymoveone .carousel-control.right {
  margin-right: 5px;
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3,
.carousel-showmanymoveone .cloneditem-4,
.carousel-showmanymoveone .cloneditem-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -50%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 50%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
  .carousel-showmanymoveone .carousel-inner .cloneditem-3,
  .carousel-showmanymoveone .carousel-inner .cloneditem-4,
  .carousel-showmanymoveone .carousel-inner .cloneditem-5,
  .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
    transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
    transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.me-5{
  padding:10px;
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
                <a href="#">HOME</a>
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
    <div class="slideshow-container">
    
    <div class="ima">
        <img src="{{asset('images/cloth.jpg')}}" alt="Slide 1">
    </div>

   

    


       
        
    </div>
</div>
<br>
<br>
<!-- Moving Product List -->
<div class="container-fluid">
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2>NEW COLLECTION</h2>
    </div>
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

 
<!--Item slider text-->
<h1 class="text-center"> Product</h1>


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
