<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Shopping Cart</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 80px;">
        <h1>Shopping Cart</h1>

        @if (!empty($cart) && count($cart) > 0)
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $id => $item)
                        <tr>
                            <td><img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}" class="img-thumbnail" width="100"></td>
                            <td>{{ $item['name'] }}</td>
                            <td>${{ number_format($item['price'], 2) }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                <h4>Total: ${{ number_format(array_reduce($cart, fn($sum, $item) => $sum + $item['price'] * $item['quantity'], 0), 2) }}</h4>

                <!-- Buy Button Redirecting to Checkout Form -->
                <a href="{{ route('checkout.form') }}" class="btn btn-success btn-lg">Buy Now</a>
            </div>
        @else
            <div class="alert alert-info">
                Your cart is empty. <a href="{{ url('/') }}">Continue shopping</a>.
            </div>
        @endif
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
