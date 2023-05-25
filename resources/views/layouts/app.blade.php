<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')  Movies</title>

          <!--CDN TAILWINDCSS-->
          <script src="https://cdn.tailwindcss.com"></script>
   </head>
<body>


    <head>
        <nav class="h-16 flex justify-end py-4 px-16">
            <a href="{{ route('ind3x') }}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2 hover:bg-blue-500 hover:text-white">Movies</a>
            <a href="{{ route('cr3ate') }}" class="text-white rounded px-6 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-white hover:text-blue-500 hover:border hover:border-blue-500">Create</a>
        </nav>
    </head>
    <main>
      @yield('content')
    </main>

</body>

</html>

