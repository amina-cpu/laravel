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
                <a href="{{ route('homepage') }}"> HOME</a>
                <div class="dropdown">
                    <a href="#">ABOUT US</a>
                </div>
                <a href="{{ route('full-list') }}">SHOP ALL</a>
                <a href="{{ route('category', ['categoryName' => 'Dresses']) }}">DRESSES</a>
    <a href="{{ route('category', ['categoryName' => 'High Heels']) }}">HIGH HEELS</a>
    <a href="{{ route('category', ['categoryName' => 'Pants']) }}">PANTS</a>
    <a href="{{ route('category', ['categoryName' => 'Suits']) }}">SUITS</a>
            </nav>

            


            <!-- User Icons -->
            <div class="user-icons">
                
                <div class="icon"><i class='fas fa-cart-plus' style='font-size:24px'></i></div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
    <div class="row g-3">
        @forelse ($products as $product)
            <div class="col-md-3 col-sm-6 d-flex">
                <div class="card mx-auto">
                    <img class="mx-auto img-thumbnail"
                         src="{{ $product->images->isNotEmpty() ? asset('images/' . $product->images->first()->image_url) : asset('images/default.jpg') }}"
                         alt="{{ $product->name }}" />
                    <div class="card-body text-center">
                        <div class="cvp">
                            <h5 class="card-title font-weight-bold">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }}</p>
                            <a href="{{ route('product.description', ['id' => $product->id]) }}" class="btn details">View Details</a>
                            <a href="#" class="btn cart">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center w-100">No products found in this category.</p>
        @endforelse
    </div>
</div>


</body>
    </html>