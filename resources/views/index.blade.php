<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
    <link rel="stylesheet" href="{{ asset('css/homestyle.css') }}">
    <style>
        /* Basic styles for the slider */
        .product-slider {
            display: flex;
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
            background-color: #f5f5f5;
            margin-top: 100px;
            padding: 20px 0;
            position: relative;
        }

        .product-card {
            flex: 0 0 auto;
            width: 200px;
            margin: 0 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 15px;
        }

        .product-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-card h3 {
            font-size: 16px;
            margin: 10px 0 5px;
        }

        .product-card p {
            font-size: 14px;
            color: #555;
        }

        /* Animation */
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-200px * 5)); }
        }

        .slider-track {
            display: flex;
            animation: scroll 20s linear infinite;
        }

        .slider-track:hover {
            animation-play-state: paused; /* Pause on hover */
        }
    </style>
</head>
<body>
    <header>
        <div class="inner">
            <a href="/">
                <img src="{{ asset('assets/images/Age.png') }}" alt="Logo" class="logo">
            </a>
            <nav>
                <a href="#">Vols</a>
                <a href="#">Pays</a>
                <a href="#">A propos de nous</a>
            </nav>
        </div>
    </header>

   <!-- Moving Product List -->
<div class="product-slider">
    <div class="slider-track">
    @foreach ($products as $product)
    @foreach ($product->colors as $color)
        <div class="product-card">
            <h3>{{ $product->name }}</h3>
            <p>${{ $product->price }}</p>
            <p>Color: {{ $color->name }}</p>
        </div>
    @endforeach
@endforeach

    </div>
</div>

</body>
</html>
