<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Desig Mastery | Carserving</title>
    <base href="{{ asset('') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link 
     rel="stylesheet" 
     href="../resources/frontend/styles.css" />
    <style>
        .icon-text-container {
            display: flex;
            align-items: center;
        }
        .icon-text-container p {
            margin: 0;
            margin-left: 5px; /* Optional: add some space between the icon and the text */
        }
    </style>
  </head>
  <body>

    @include("frontend/layouts/header")
    
    @yield("content")
  
    
    @if (session('alert_message'))
        <script>
            alert("{{ session('alert_message') }}");
        </script>
    @endif

    @include("frontend/layouts/footer")

    @yield("script") 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="../resources/frontend/main.js"></script>
  </body>
</html>
