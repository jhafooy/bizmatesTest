@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
              @include('nav')
              <?php 
                if(Request::segment(1) == 'tokyo'){
                  $bg = 'url(http://127.0.0.1:8000/images/tokyo-bg.jpg) no-repeat center center fixed';
                }elseif(Request::segment(1) == 'yokohama'){
                  $bg = 'url(http://127.0.0.1:8000/images/yokohama-bg.jpg) no-repeat center center fixed';
                }elseif(Request::segment(1) == 'kyoto'){
                  $bg = 'url(http://127.0.0.1:8000/images/kyoto-bg.jpg) no-repeat center center fixed';
                }elseif(Request::segment(1) == 'osaka'){
                  $bg = 'url(http://127.0.0.1:8000/images/osaka-bg.jpeg) no-repeat center center fixed';
                }elseif(Request::segment(1) == 'sapporo'){
                  $bg = 'url(http://127.0.0.1:8000/images/sapporo-bg.jpg) no-repeat center center fixed';
                }elseif(Request::segment(1) == 'nagoya'){
                  $bg = 'url(http://127.0.0.1:8000/images/nagoya-bg.jpg) no-repeat center center fixed';
                }
              ?>
                <div class="card-body weather" style="background:{{$bg}}">
                    <h1 id="city" class="glow"></h1>
                    <ul class='cityInfo'>
                      <li>Population: <label id="population"></label></li>
                      <li>Timezone: <label id="timezone"></label></li>
                      <li>Sunrise: <label id="sunrise"></label></li>
                      <li>Sunset: <label id="sunset"></label></li>
                    </ul>
                    <h3><img id="wicon0" src="" alt="Weather icon"></h3>
                    <ul>
                      </li><label id="temp0"></label>&#8451; temperature from <label id="temp_min0"></label> to <label id="temp_max0"></label>&#8451;, wind <label id="wind0"></label> m/s. clouds <label id="clouds0"></label> %, <label id="pressure0"></label> hpa</li>
                    </ul>
                    <h3><img id="wicon1" src="" alt="Weather icon"></h3>
                    <ul>
                      </li><label id="temp1"></label>&#8451; temperature from <label id="temp_min1"></label> to <label id="temp_max1"></label>&#8451;, wind <label id="wind1"></label> m/s. clouds <label id="clouds1"></label> %, <label id="pressure1"></label> hpa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
