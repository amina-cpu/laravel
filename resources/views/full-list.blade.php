<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/list.css') }}">
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
                <a href="#">SHOP ALL</a>
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
<div class="container-fluid">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3 col-10 mt-5">
                <div class="card mx-auto">
                    <img class="mx-auto img-thumbnail"
                         src="{{ $product->images->isNotEmpty() ? asset('images/' . $product->images->first()->image_url) : asset('images/default.jpg') }}"
                         alt="{{ $product->name }}" width="auto" height="auto"/>
                    <div class="card-body text-center">
                        <div class="cvp">
                            <h5 class="card-title font-weight-bold">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }}</p>
                            <a href="{{ route('product.description', ['id' => $product->id]) }}" class="btn details px-auto">View Details</a><br />
                            <a href="#" class="btn cart px-auto">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
    </html>