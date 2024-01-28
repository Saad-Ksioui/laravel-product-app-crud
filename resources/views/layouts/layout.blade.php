<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Product App CRUD</title>
  <style>
    @import url(https://fonts.googleapis.com/css2?family=Rubik:wght@100;200;300;400;500;600;800;900&display=swap);

    body {
      font-family: 'Rubik', sans-serif;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white mb-2">
    <a class="navbar-brand" href="/">Product App CRUD</a>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link @if (request()->is('product')) active @endif" href="/product">Product List</a>
        <a class="nav-link @if (request()->is('product/create')) active @endif" href="/product/create">Add Product</a>
      </div>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
  <script>
    setTimeout(function () {
        document.querySelector('.successMessage').style.display = 'none';
    }, 3000);
  </script>
</body>
</html>