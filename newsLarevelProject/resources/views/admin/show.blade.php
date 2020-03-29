<html>
<head>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body >
    
    <div class="container">
        
<h1> {{ $news->title }} </h1>

<p> {{ $news->body }} </p>

<a href={{ route('admin') }} >  
    See all News
</a>
    </div>

</body>

</html>