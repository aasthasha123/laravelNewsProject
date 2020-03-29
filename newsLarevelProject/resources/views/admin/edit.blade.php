<html>

<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>




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

  <h3 style="margin:50px" > Edit Post</h3>  
    <div  style="margin-left:100px;margin-right:100px;">

    {!! Form::model($news,['route'=>['news.update',$news->id],'method'=>'POST']) !!}

        <div>
            {{ Form::label('title','Title') }}
            {{ Form::text('title',NULL, ['Class'=>'form-control input-lg']) }}

            {{ Form::label('body','Body : ',['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body',NULL, ['class'=>'Form-control' ]) }}
            
            {!! Form::label('category', 'Category') !!}
            {!! Form::select('category', $category, null, ['class' => 'form-control']) !!}
            

        </div>

        <div>

        {{ Html::linkroute('admin','Cancel',NULL,array('class'=> 'btn btn-danger' )) }}

        
        </div>

        <div>
        
            {{ form::submit('Save Changes',['class' => 'btn btn-success' ]  )  }}

        </div>
    
    {!! Form::close() !!}
    </div>

</body>

</html>