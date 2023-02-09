<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
          integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/create.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/product.css') }}">
    <title>Product manager - {{ $title }}</title>
</head>
<body>
<header>
    <nav>
        <a href="/product">Product List</a>
        <a href="/product/create">Add Product</a>
    </nav>
</header>
<main>
    {{ $slot }}
    @if(@isset($buttons))
        <div class="buttons">
            {{ $buttons }}
        </div>
    @endif
</main>
</body>
</html>
