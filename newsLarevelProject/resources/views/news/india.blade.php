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










        <h3>India News</h3>
    




          <div class="row">

@foreach ($news as $key => $value )
<div class="col s4 m4 l4" style="margin-right:0px;">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
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