
<!DOCTYPE html>
<html lang="en">
  
<!-- courses-grid-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{asset('assets/extra-images/iium_logo.png')}}" <img src="sizes="16x16">
    
    <title>Dashboard</title>

   <!-- Css Files -->
   <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick-slider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/prettyphoto.css')}}" rel="stylesheet">
    <link href="{{asset('assets/build/mediaelementplayer.css')}}" rel="stylesheet">
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/color.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/color-two.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/color-three.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/color-four.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

   
  </head>

  <style>
      body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
   
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">
        
        <!--// Header \\-->
		<header id="wm-header" class="wm-header-one">

            <!--// TopStrip \\-->
			<div class="wm-topstrip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <ul class="wm-adminuser-section">
                                <li>
                              
                                    <span style="padding:5px"><a>{{ Auth::user()->name }}</a></span>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

		</header>
		<!--// Header \\-->

        <!--// Mini Header \\-->
        <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>Dashboard</h1> 
                        </div>  
                    </div>
                </div>
            </div>    
        </div>
        <!--// Mini Header \\-->
       
               
            
		</div>
        
	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->
    <!--// Main Content \\-->
		<div class="wm-main-content">

<!--// Main Section \\-->
<div class="wm-main-section">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4">
                <div class="wm-search-course">
                    <h3 class="wm-short-title wm-color">Find the locations</h3>
                    <p>Fill in the form below to find locations:</p>
                    <form method="post" action="{{ route('home') }}">
                      @csrf
                        <ul>
                            <li> <input type="text" id="date" name="date"  onblur="if(this.value == '') { this.value ='Y/M/D Hour:Min:Sec'; }" onfocus="if(this.value =='Y/M/D Hour:Min:Sec') { this.value = ''; }"> <i class="wmicon-search"></i> </li>
                            <li>
                                <div class="wm-apply-select">
                                    <select>
                                        <option>2021/11/03 12:13:00</option>
                                        <option>2021/01/03 11:13:00</option>
                                        <option>2021/02/03 11:13:00</option>
                                        <option>2021/03/03 11:13:00</option>
                                    </select>
                                </div>
                            </li>
                            <li> <input type="submit"> </li>
                        </ul>
                    </form>
                </div>
            </div>
            @if(!empty($location))
                  @foreach($location as $data)
          <div class="col-md-8">
                <div class="wm-service wm-box-service">
                    <ul>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-suitcase"></i>
                                <h6><a>Name: {{ $data['name'] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-science"></i>
                                <h6><a>ID: {{ $data['id'] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-school"></i>
                                <h6><a>Latitude: {{ $data["latitude"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-suitcase"></i>
                                <h6><a>Longitude: {{ $data["longitude"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-computer"></i>
                                <h6><a>Altitude: {{ $data["altitude"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-technology3"></i>
                                <h6><a>Visibility: {{ $data["visibility"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                    
                    </ul>
                </div>
            </div>
          @endforeach
          @else
            <div class="col-md-8">
                <div class="wm-service wm-box-service">
                    <ul>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-suitcase"></i>
                                <h6><a>Name</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-money"></i>
                                <h6><a>ID</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-school"></i>
                                <h6><a>Longitude</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-science"></i>
                                <h6><a>Latitude</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-computer"></i>
                                <h6><a>Country Code</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-technology3"></i>
                                <h6><a>Altitude</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-web3"></i>
                                <h6><a>Development</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-shape"></i>
                                <h6><a>Velocity</a></h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            @endif
        </div>
        @if(!empty($place))
        <div class="wm-main-section wm-learn-listing-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>More <span>Information</span></h2> </div>
                            <div class="wm-learn-listing">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Maps</h2>
                                                <a href="{{ $place["map_url"] }}" class="wm-banner-btn">Map</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Timezone Id</h2>
                                                <a class="wm-banner-btn">{{ $place["timezone_id"] }}</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Country Code</h2>
                                                <a class="wm-banner-btn">{{ $place["country_code"] }}</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                 </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                @else
                <div class="wm-main-section wm-learn-listing-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>More <span>Informaion</span></h2> </div>
                            <div class="wm-learn-listing">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Maps</h2>
                                                <a class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Country Code</h2>
                                                <a class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Altitude</h2>
                                                <a class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Timezone ID</h2>
                                                <a class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                @endif
              </form> 
    </div>
</div>


    <script type="text/javascript" src="{{asset('assets/script/jquery.js')}}"></script>
	  <script type="text/javascript" src="{{asset('assets/script/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/script/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/script/jquery.prettyphoto.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/script/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/script/fitvideo.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/script/skills.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/script/slick.slider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/script/waypoints-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/build/mediaelement-and-player.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/script/isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/script/jquery.nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{asset('assets/script/functions.js')}}"></script>

</html>