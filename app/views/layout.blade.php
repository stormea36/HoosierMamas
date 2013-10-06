<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brinker-Loyalty</title>
    
    <link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.css" />
    <link href='http://fonts.googleapis.com/css?family=Headland+One|Belleza' rel='stylesheet' type='text/css'>
    <style>
        body { padding-top: 70px;
font-family: 'Belleza', sans-serif;
        }
        body p {
            font-size: 1.3em;
        }
    </style>
  </head>

<body>
    
    
    
    @include('navbar')
    
    @yield('content')
    @include('footer')
    
    


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

  <script src="/js/bootstrap.js"></script>
    <script src="/js/myscript.js"></script>

  </body>
</html>