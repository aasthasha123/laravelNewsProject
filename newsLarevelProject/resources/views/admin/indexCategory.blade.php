<html>
<head>
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
    
     
  <h2 style="margin:50px;">Categories</h2>


<div style="margin-left:100px;margin-right:100px;">
        <table>
            <thead  >

                <th>#</th>
                <th>Title</th>
                <th>Created Date</th>
                <th>    </th>       

                <a href=" {{route('category.create')}} " class="btn-floating btn-large waves-effect waves-light  red" style="margin-left:95%;"><i class="material-icons">+</i></a>
            </thead>

            <tbody>
                <?php  $n=1?>
                @foreach ($category as $key => $value )

                    <tr>
                        <td>{{ $n++ }}</td>
                        <td> {{$value->title}} </td>
                        <td>{{ date('M D, Y', strtotime($value->created_at)) }}</td>
                        <td>
                        
                            <!-- <a href=" {{ route('news.show',$value->id) }} ">Open</a>
                            <a href="{{ route('news.edit', $value->id) }}">Edit</a> -->
                            <a href="{{ route('category.delete', $value->id) }}">Delete</a>





                        </td>
                    </tr>

                @endforeach            
            </tbody>
        
        </table>
    
    </div>






</body>



</html>