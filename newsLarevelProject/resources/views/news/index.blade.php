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
        
        @foreach ($category as $key => $value )


        <li><a href="{{ route('news.categoryNews',$value->title) }}"> {{ $value->title }} </a></li>

        @endforeach
      </ul>
    </div>
  </nav>
    
    </div>







    <div class="row" style="height:20px;">
          <div class="col s12 m12 l12" style="background-color:white;height:50px;">
            <p style="color:green;text-align:center;transform:translateY(-15px)"> <marquee><h6>
            
            
            Asian Paints	1,606.20	||
Axis Bank	359.70		||
Bajaj Auto	2,059.60		||
Bajaj Finance	2,546.45		||
Bharti Airtel	448.90		||
HCL Tech	431.80		||
HDFC	1,754.10		||
HDFC Bank	905.05		||
Hero Motocorp	1,660.15		||
HUL	2,140.30		||
ICICI Bank	340.10	 	||
IndusInd Bank	411.00  	||
Infosys	653.55	||
ITC	162.90	||
Kotak Mahindra	1,397.95 	||
Larsen	836.90		||
M&M	295.65		||
Maruti Suzuki	4,645.75 	||	
            
            
            </h6></marquee> </p>
          </div>
        </div>















 <section style="padding-top:10px;padding-left:50px;padding-right:50px;" id="main_slider">
  <section class="slider" >
    <ul class="slides" style="height:500px;width:100%;">

    @foreach ($slider_record as $key => $value )

      <li style="height:100%;width:100%;" >
        <img  src="{{ asset('images/back2.jpg') }}" width="100%" height="100%"  alt="">
        <div class="caption"  style="padding-top:60px;">
          <h2 class="light grey-text text-lighten-5"> {{$value->title}} </h2>
          <h5 class="light grey-text text-lighten-3" style="color:white;">
          <a style="color:white;text-decoration:underline;" href={{ route('news.single',$value->id) }} >Read More </a>
          </h5>
        </div>
      </li>

      @endforeach
      
    </ul>
  </section>






  <h4>Top News</h4>

  <div class="row">

  @foreach ($main_news as $key => $value )


  <div class="col s4 m4 l4" style="margin-right:0px;">
      <div class="card blue-grey darken-1 hoverable">
        <div class="card-content white-text">
        <span class="badge blue " style="color:white;"> {{$value->category}} </span>
          <span class="card-title">  {{ substr($value->title, 0, 50) }} {{ strlen($value->title) > 50 ? '...' : ""  }} </span>
          <p> {{ substr($value->body, 0, 100) }} {{ strlen($value->body) > 100 ? '...' : ""  }}</p>
        </div>
        <div class="card-action">
        <a href={{ route('news.single',$value->id) }}>Read More </a>
          
        </div>
    
    </div>
  </div>


  @endforeach
  
  </div>







    <section style="padding-left:50px;padding-right:50px;">
          <div class="row" style="padding-bottom:0px;">

          @foreach ($secondary as $key => $value )

            <div class="col s6 m6 l6" style="height:300px;">
              
                
                  <div class="row">
                    <div class="col s12 m12 l12">
                    <div style="background:white;text-align:center;font-size:13px;color:black;">
                    <span class="badge blue " style="color:white;"> {{$value->category}} </span>
        
                    <h4>  {{ substr($value->title, 0, 50) }} {{ strlen($value->title) > 50 ? '...' : ""  }} </h4>

                    <p> {{ substr($value->body, 0, 800) }} {{ strlen($value->body) > 800 ? '...' : ""  }}</p>
                            <a href={{ route('news.single',$value->id) }}>Read More </a>

                      </div>

                    </div>
                  </div>

   
      </div>

      @endforeach
            
          </div>



    



          <div class="row">

@foreach ($news as $key => $value )


<div class="col s4 m4 l4" style="height:250px;">
    
    <div class="row">
      <div class="col s12 m12 l12">
      <div style="background:white;text-align:center;font-size:13px;color:black;">
      <span class="badge blue " style="color:white;"> {{$value->category}} </span>
        
      <h4>  {{ substr($value->title, 0, 50) }} {{ strlen($value->title) > 50 ? '...' : ""  }} </h4>
  <p> {{ substr($value->body, 0, 100) }} {{ strlen($value->body) > 100 ? '...' : ""  }}</p>
  <a href={{ route('news.single',$value->id) }}>Read More </a>

        </div>
        </div>
      </div>
    </div>





@endforeach

</div>


   </div>
        </section>

















    <section style="padding-left:0px;" id="about1">
            <div class="row" style="padding-bottom:50px;">
              
              <div class="col s6 m6 l6" style="height:500px;width:700px;" id="img1">


              <video width="700" height="400" controls>
                <source src="{{ asset('images/video_news.mp4') }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>



              </div>

              <div class="col s8 m8 l8" style="margin-left:100px;height:500px;width:508px;">
                <ul class="collection">
                  <h5 style="text-align:center"><b>Latest Trends</b></h5>
                  <li class="collection-item avatar">
                    <img src="{{ asset('images/twitter.png') }}" alt="" class="circle">
                    <span class="title">
                      <b>#lockdown</b>
                      <p>1000+ Tweets</p>
                    </span>
                    
                   </li>
                  <li class="collection-item avatar">
                    <img src="{{ asset('images/twitter.png') }}" alt="" class="circle">
                    <span class="title">
                      <b>#corona</b>
                      <p>740+ Tweets</p>
                    </span>
                    </li>


                    <li class="collection-item avatar">
                    <img src="{{ asset('images/twitter.png') }}" alt="" class="circle">
                    <span class="title">
                      <b>#pmModi</b>
                      <p>1000+ Tweets</p>
                    </span>
                    </li>


                    <li class="collection-item avatar">
                    <img src="{{ asset('images/twitter.png') }}" alt="" class="circle">
                    <span class="title">
                      <b>#china</b>
                      <p>740+ Tweets</p>
                    </span>
                    </li>
                 
                  </ul>
              </div>

            </div>

          </section>





          <section style="padding-left:0px;background-color:#ADD8E6;height:200px;" id="about" >
          <div class="row">
            <div class="col s6 m6 l6" id="ab1">
              <h3><b>Contact Us</b></h3>
              <p>Phone : <b>+91 99999999</b> </p>
              <p>Email : <b>aasthasharma738@gmail.com</b></p>
            </div>
            <div class="col s6 m6 l6" id="ab2">
            <h4><b>Subscribe For Newsletter!</b></h4>
            <input  type="email" name="" id="">
            <input type="submit" class="btn">
            </div>
          </div>
          </section>





<script>

const slider = document.querySelector('.slider');
      M.Slider.init(slider,{
        indicators: false,
        height:500,
        transition:1000,
        interval:5000,

      })

</script>



</body>





</html>