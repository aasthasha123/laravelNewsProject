<html>

<head>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>


<body>
    
<div>

    <nav class="light-blue darken-4">
    <div class="nav-wrapper">
    <a href=" {{ route('news.index') }} " class="brand-logo right"> WorldToday </a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
      <li><a href=" {{ route('news.index') }} " > Home  </a></li>
        <li><a href=" {{ route('news.entertainment') }} ">Entertainment</a></li>
        <li><a href=" {{ route('news.sports') }} ">Sports</a></li>
        <li><a href=" {{ route('news.world') }} ">World</a></li>
        <li><a href=" {{ route('news.india') }} ">India</a></li>
        
      </ul>
    </div>
  </nav>
    
    </div>



<div  style="margin-left:100px;margin-right:350px;">


<h2>
        {{$news->title}}
    </h2>

    <p>
        {{ $news->body }}
    </p>



</div>

    

</body>


</html>