<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Homework/Proyects App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
  </head>
  <body class="bg-gray-100 text-gray-800">
    <!-- Document body -->

    <nav class="h-16 flex justify-end py-4 px-16"></nav>
    <a href="{{route('products.index')}}" class="border border-indigo-500 
    rounded px-4 pt-1 h-10 bg-white text-indigo-500 font-semibold mx-2">Products</a>

    <a href="{{route('products.create')}}" class="text-white rounded px-4 pt-1 h-10 bg-indigo-500 font-semibold mx-2
    hover:bg-blue-600">Create</a>

    <main class="p-16 flex justify-center">
        @yield('content')
    </main>


  </body>
</html>