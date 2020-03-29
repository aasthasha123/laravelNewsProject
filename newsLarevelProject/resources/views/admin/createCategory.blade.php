<html>

<head>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body >



<nav class="light-blue darken-4">
    <div class="nav-wrapper">
    <a href=" {{ route('news.index') }} " class="brand-logo right"> WorldToday </a>
    
          <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href=" {{ route('admin') }} " > Admin Panel  </a></li>
        <li><a href=" {{ route('admin') }} "> Posts </a></li>
        <li><a href=" {{ route('admin.category') }} ">Categories</a></li>
        <li><a href=" {{ route('news.create') }} ">Add Post</a></li>
        <li><a href=" {{ route('category.create') }} ">Add Category</a></li>
        
      </ul>
    </div>
  </nav>

  
<h3 style="margin:50px" > Add Category</h3>  
    <div  style="margin-left:100px;margin-right:100px;">
{!! Form::open(array('route' => 'category.store','data-parsley-validate' => '' )) !!}
    {{ form::label('title','Title') }}
    {{ form::text('title',NULL,array('class' => 'form-control','required' => '', 'maxLength'=> '255' )) }}
    {{ form::submit("Add Category", array(' class ' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px' ) ) }}

{!! Form::close()  !!}


<a href=" {{route('admin.category')}} " class="btn">Close</a>

  </div>


</body>

</html>