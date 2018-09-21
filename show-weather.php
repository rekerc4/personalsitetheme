<?php /* Template Name: page weather */ ?>


<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>" />
    <title>Kennys Portfolio</title>
    <?php wp_head();?>
    <link href='https://fonts.googleapis.com/css?family=Jua|Anton|Luckiest Guy|Nothing You Could Do' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type ="text/css" href="<?php bloginfo('template_url');?>/styles/weather-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/fonts/font-awesome/css/font-awesome.min.css">
  </head>

<head>
 
</head>
<body class='body'>
  <div class='container' id='container'>
    <div class='center' id='center'>
      <div class='title' id='title'>
        <h1>Local Weather App</h1>
        <div class='loading' id='loading'>
          <ul class='loadingbars'>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class='loadingtext' id='loading-text'>
          <h2>Loading...</h2>
        </div>
      </div>
      <div class='flex' id='flex-con'>
        <div class='flex-element' id='tempa'>
          <span id='temp'></span>
          <span class='fercel' id='fercel'>°C</span>
        </div>
        <div class='flex-element' id='condition'>PLACEHOLDER RAINING</div>
        <div class='flex-element' id='location'>PLACEHOLDER</div>
        <div class='select flex-element' id='select'>
          <div class='showdrop' id='showdrop'>Show other types of weather</div>
          <select class='t' id='t'>
            <option value='1'>Clouds</option>
            <option value='2'>Snow</option>
            <option value='3'>Rain</option>
            <option value='4'>Cold Sun</option>
            <option value='5'>Hot Sun</option>
            <option value='6'>Sun</option>
            <option value='7'>Moon</option>
            <option value='8'>Cold Moon</option>
          </select>
        </div>
        <div class='flex-element hide' id='latlon'></div>
      </div>
      <div class='weather-icon' id='weather-icon'>
        <div class='picon hide'>
          <ul class='sn'>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class='clouds hide' id='clouds'>
          <div class='cloud cloudone cloudshadow'>
            <div class='cloudfront cloudshadow'></div>
            <div class='cloudback cloudshadow'></div>
          </div>
          <div class='cloud cloudtwo'>
            <div class='cloudfront cloudshadow'></div>
            <div class='cloudback cloudshadow'></div>
          </div>
          <div class='cloud cloudthree'>
            <div class='cloudfront cloudshadow'></div>
            <div class='cloudback cloudshadow'></div>
          </div>
        </div>
        <div class='snow hide' id='snow'>
          <div class='flake flake1'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
          <div class='flake flake2'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
          <div class='flake flake3'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
          <div class='flake flake4'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
          <div class='flake flake5'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
          <div class='flake flake6'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
          <div class='flake flake7'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
          <div class='flake flake8'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
          <div class='flake flake9'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
          <div class='flake flake10'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
          <div class='flake flake11'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
          <div class='flake flake12'>
            <svg data-name='Layer 1' height='24.3706' id='Layer_1' width='25.6089' xmlns='http://www.w3.org/2000/svg'>
              <defs></defs>
              <style>
                .cls-2{fill:none;stroke-miterlimit:10;stroke:#baf2ef}
              </style>
              <path d='M12.805 25.2565v-25m0 3.85L9.0521.3536m3.7529 3.7529L16.5579.3536M14.682 8.3147h5.3075m5.3155 4.4417h-25m3.8015 0l-3.7529 3.753m3.7529-3.753L.3536 9.0035m21.2902 12.5918L3.9662 3.9176m2.6781 2.6781H1.3368m5.3075 0V1.2883m14.8581 11.4681l3.7529 3.753m-3.7529-3.753l3.7529-3.7529m-3.6115-5.0859L3.9662 21.5953m3.1796-3.1796v5.3074m0-5.3074H1.8383m10.9667 2.8484l3.7529 3.753m-3.7529-3.753l-3.7529 3.753m9.3252-6.6883h5.3075m-5.3075 0v5.3074m.4603-16.9123V1.4164m0 5.3075h5.3074M5.5547 8.3147h5.3074m3.3668 8.6125h5.3075m-13.301-.0486h5.3075m-1.3916-9.7483h5.3074m-4.548-1.7767H14.73m-4.5634 13.2238h5.3075m-4.5481 1.7767h3.8194m-7.6567-4.9439v-5.3075M5.312 14.6508v-3.8194m13.1081 4.5788v-5.3074m1.7767 4.548v-3.8193' fill='none' stroke-miterlimit='10' stroke-width='2' stroke='#fff'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              <path class='cls-2'></path>
              end
            </svg>
          </div>
        </div>
        <div class='rain hide' id='rain'>
          <div class='rain-drop drop1'>
            <svg data-name='Layer 1' height='100%' viewBox='0 0 143.8278 265.278' width='100%' xmlns='http://www.w3.org/2000/svg'>
              <defs>
                <linearGradient gradientTransform='matrix(.773 -.2616 .3218 .9511 -61.9588 19.5769)' gradientUnits='userSpaceOnUse' id='a' x1='8.4142' x2='47.2285' y1='223.2866' y2='208.9953'>
                  <stop offset='0' stop-color='#8be7f5'></stop>
                  <stop offset='1' stop-color='#364fcc'></stop>
                </linearGradient>
              </defs>
              <path d='M60.39 2.778c-16 76-45 117-56 154-9.9326 33.41-5.0071 108 65 108 61 0 88.8514-58.1537 66-101-24-45-68-116-75-161z' fill='#364fcc' stroke-miterlimit='10' stroke='#000'></path>
              <path d='M44.5981 242.5985c2.6329 1.8676 12.8192 4.6 15.3641 3.3018 2.2377-1.1412 1.1443-5.4045.7148-8.4271s-3.937-3.8321-5.5773-6.3844c-2.6342-4.099-5.6958-5.8088-8.6105-9.6508-7.5222-9.9151-14.1092-24.7821-19.562-36.2727-3.2448-6.8376-7.6289-18.8371-12.6872-9.631-2.6841 4.8851-.2551 23.5769 1.5857 28.8935 6.6491 19.2045 13.3926 27.2612 28.7724 38.1707z' fill='url(#a)'></path>
              end
            </svg>
          </div>
          <div class='rain-drop drop2'>
            <svg data-name='Layer 1' height='100%' viewBox='0 0 143.8278 265.278' width='100%' xmlns='http://www.w3.org/2000/svg'>
              <defs>
                <linearGradient gradientTransform='matrix(.773 -.2616 .3218 .9511 -61.9588 19.5769)' gradientUnits='userSpaceOnUse' id='a' x1='8.4142' x2='47.2285' y1='223.2866' y2='208.9953'>
                  <stop offset='0' stop-color='#8be7f5'></stop>
                  <stop offset='1' stop-color='#364fcc'></stop>
                </linearGradient>
              </defs>
              <path d='M60.39 2.778c-16 76-45 117-56 154-9.9326 33.41-5.0071 108 65 108 61 0 88.8514-58.1537 66-101-24-45-68-116-75-161z' fill='#364fcc' stroke-miterlimit='10' stroke='#000'></path>
              <path d='M44.5981 242.5985c2.6329 1.8676 12.8192 4.6 15.3641 3.3018 2.2377-1.1412 1.1443-5.4045.7148-8.4271s-3.937-3.8321-5.5773-6.3844c-2.6342-4.099-5.6958-5.8088-8.6105-9.6508-7.5222-9.9151-14.1092-24.7821-19.562-36.2727-3.2448-6.8376-7.6289-18.8371-12.6872-9.631-2.6841 4.8851-.2551 23.5769 1.5857 28.8935 6.6491 19.2045 13.3926 27.2612 28.7724 38.1707z' fill='url(#a)'></path>
              end
            </svg>
          </div>
          <div class='rain-drop drop3'>
            <svg data-name='Layer 1' height='100%' viewBox='0 0 143.8278 265.278' width='100%' xmlns='http://www.w3.org/2000/svg'>
              <defs>
                <linearGradient gradientTransform='matrix(.773 -.2616 .3218 .9511 -61.9588 19.5769)' gradientUnits='userSpaceOnUse' id='a' x1='8.4142' x2='47.2285' y1='223.2866' y2='208.9953'>
                  <stop offset='0' stop-color='#8be7f5'></stop>
                  <stop offset='1' stop-color='#364fcc'></stop>
                </linearGradient>
              </defs>
              <path d='M60.39 2.778c-16 76-45 117-56 154-9.9326 33.41-5.0071 108 65 108 61 0 88.8514-58.1537 66-101-24-45-68-116-75-161z' fill='#364fcc' stroke-miterlimit='10' stroke='#000'></path>
              <path d='M44.5981 242.5985c2.6329 1.8676 12.8192 4.6 15.3641 3.3018 2.2377-1.1412 1.1443-5.4045.7148-8.4271s-3.937-3.8321-5.5773-6.3844c-2.6342-4.099-5.6958-5.8088-8.6105-9.6508-7.5222-9.9151-14.1092-24.7821-19.562-36.2727-3.2448-6.8376-7.6289-18.8371-12.6872-9.631-2.6841 4.8851-.2551 23.5769 1.5857 28.8935 6.6491 19.2045 13.3926 27.2612 28.7724 38.1707z' fill='url(#a)'></path>
              end
            </svg>
          </div>
          <div class='rain-drop drop4'>
            <svg data-name='Layer 1' height='100%' viewBox='0 0 143.8278 265.278' width='100%' xmlns='http://www.w3.org/2000/svg'>
              <defs>
                <linearGradient gradientTransform='matrix(.773 -.2616 .3218 .9511 -61.9588 19.5769)' gradientUnits='userSpaceOnUse' id='a' x1='8.4142' x2='47.2285' y1='223.2866' y2='208.9953'>
                  <stop offset='0' stop-color='#8be7f5'></stop>
                  <stop offset='1' stop-color='#364fcc'></stop>
                </linearGradient>
              </defs>
              <path d='M60.39 2.778c-16 76-45 117-56 154-9.9326 33.41-5.0071 108 65 108 61 0 88.8514-58.1537 66-101-24-45-68-116-75-161z' fill='#364fcc' stroke-miterlimit='10' stroke='#000'></path>
              <path d='M44.5981 242.5985c2.6329 1.8676 12.8192 4.6 15.3641 3.3018 2.2377-1.1412 1.1443-5.4045.7148-8.4271s-3.937-3.8321-5.5773-6.3844c-2.6342-4.099-5.6958-5.8088-8.6105-9.6508-7.5222-9.9151-14.1092-24.7821-19.562-36.2727-3.2448-6.8376-7.6289-18.8371-12.6872-9.631-2.6841 4.8851-.2551 23.5769 1.5857 28.8935 6.6491 19.2045 13.3926 27.2612 28.7724 38.1707z' fill='url(#a)'></path>
              end
            </svg>
          </div>
          <div class='rain-drop drop5'>
            <svg data-name='Layer 1' height='100%' viewBox='0 0 143.8278 265.278' width='100%' xmlns='http://www.w3.org/2000/svg'>
              <defs>
                <linearGradient gradientTransform='matrix(.773 -.2616 .3218 .9511 -61.9588 19.5769)' gradientUnits='userSpaceOnUse' id='a' x1='8.4142' x2='47.2285' y1='223.2866' y2='208.9953'>
                  <stop offset='0' stop-color='#8be7f5'></stop>
                  <stop offset='1' stop-color='#364fcc'></stop>
                </linearGradient>
              </defs>
              <path d='M60.39 2.778c-16 76-45 117-56 154-9.9326 33.41-5.0071 108 65 108 61 0 88.8514-58.1537 66-101-24-45-68-116-75-161z' fill='#364fcc' stroke-miterlimit='10' stroke='#000'></path>
              <path d='M44.5981 242.5985c2.6329 1.8676 12.8192 4.6 15.3641 3.3018 2.2377-1.1412 1.1443-5.4045.7148-8.4271s-3.937-3.8321-5.5773-6.3844c-2.6342-4.099-5.6958-5.8088-8.6105-9.6508-7.5222-9.9151-14.1092-24.7821-19.562-36.2727-3.2448-6.8376-7.6289-18.8371-12.6872-9.631-2.6841 4.8851-.2551 23.5769 1.5857 28.8935 6.6491 19.2045 13.3926 27.2612 28.7724 38.1707z' fill='url(#a)'></path>
              end
            </svg>
          </div>
          <div class='rain-drop drop6'>
            <svg data-name='Layer 1' height='100%' viewBox='0 0 143.8278 265.278' width='100%' xmlns='http://www.w3.org/2000/svg'>
              <defs>
                <linearGradient gradientTransform='matrix(.773 -.2616 .3218 .9511 -61.9588 19.5769)' gradientUnits='userSpaceOnUse' id='a' x1='8.4142' x2='47.2285' y1='223.2866' y2='208.9953'>
                  <stop offset='0' stop-color='#8be7f5'></stop>
                  <stop offset='1' stop-color='#364fcc'></stop>
                </linearGradient>
              </defs>
              <path d='M60.39 2.778c-16 76-45 117-56 154-9.9326 33.41-5.0071 108 65 108 61 0 88.8514-58.1537 66-101-24-45-68-116-75-161z' fill='#364fcc' stroke-miterlimit='10' stroke='#000'></path>
              <path d='M44.5981 242.5985c2.6329 1.8676 12.8192 4.6 15.3641 3.3018 2.2377-1.1412 1.1443-5.4045.7148-8.4271s-3.937-3.8321-5.5773-6.3844c-2.6342-4.099-5.6958-5.8088-8.6105-9.6508-7.5222-9.9151-14.1092-24.7821-19.562-36.2727-3.2448-6.8376-7.6289-18.8371-12.6872-9.631-2.6841 4.8851-.2551 23.5769 1.5857 28.8935 6.6491 19.2045 13.3926 27.2612 28.7724 38.1707z' fill='url(#a)'></path>
              end
            </svg>
          </div>
          <div class='rain-drop drop7'>
            <svg data-name='Layer 1' height='100%' viewBox='0 0 143.8278 265.278' width='100%' xmlns='http://www.w3.org/2000/svg'>
              <defs>
                <linearGradient gradientTransform='matrix(.773 -.2616 .3218 .9511 -61.9588 19.5769)' gradientUnits='userSpaceOnUse' id='a' x1='8.4142' x2='47.2285' y1='223.2866' y2='208.9953'>
                  <stop offset='0' stop-color='#8be7f5'></stop>
                  <stop offset='1' stop-color='#364fcc'></stop>
                </linearGradient>
              </defs>
              <path d='M60.39 2.778c-16 76-45 117-56 154-9.9326 33.41-5.0071 108 65 108 61 0 88.8514-58.1537 66-101-24-45-68-116-75-161z' fill='#364fcc' stroke-miterlimit='10' stroke='#000'></path>
              <path d='M44.5981 242.5985c2.6329 1.8676 12.8192 4.6 15.3641 3.3018 2.2377-1.1412 1.1443-5.4045.7148-8.4271s-3.937-3.8321-5.5773-6.3844c-2.6342-4.099-5.6958-5.8088-8.6105-9.6508-7.5222-9.9151-14.1092-24.7821-19.562-36.2727-3.2448-6.8376-7.6289-18.8371-12.6872-9.631-2.6841 4.8851-.2551 23.5769 1.5857 28.8935 6.6491 19.2045 13.3926 27.2612 28.7724 38.1707z' fill='url(#a)'></path>
              end
            </svg>
          </div>
          <div class='rain-drop drop8'>
            <svg data-name='Layer 1' height='100%' viewBox='0 0 143.8278 265.278' width='100%' xmlns='http://www.w3.org/2000/svg'>
              <defs>
                <linearGradient gradientTransform='matrix(.773 -.2616 .3218 .9511 -61.9588 19.5769)' gradientUnits='userSpaceOnUse' id='a' x1='8.4142' x2='47.2285' y1='223.2866' y2='208.9953'>
                  <stop offset='0' stop-color='#8be7f5'></stop>
                  <stop offset='1' stop-color='#364fcc'></stop>
                </linearGradient>
              </defs>
              <path d='M60.39 2.778c-16 76-45 117-56 154-9.9326 33.41-5.0071 108 65 108 61 0 88.8514-58.1537 66-101-24-45-68-116-75-161z' fill='#364fcc' stroke-miterlimit='10' stroke='#000'></path>
              <path d='M44.5981 242.5985c2.6329 1.8676 12.8192 4.6 15.3641 3.3018 2.2377-1.1412 1.1443-5.4045.7148-8.4271s-3.937-3.8321-5.5773-6.3844c-2.6342-4.099-5.6958-5.8088-8.6105-9.6508-7.5222-9.9151-14.1092-24.7821-19.562-36.2727-3.2448-6.8376-7.6289-18.8371-12.6872-9.631-2.6841 4.8851-.2551 23.5769 1.5857 28.8935 6.6491 19.2045 13.3926 27.2612 28.7724 38.1707z' fill='url(#a)'></path>
              end
            </svg>
          </div>
          <div class='rain-drop drop9'>
            <svg data-name='Layer 1' height='100%' viewBox='0 0 143.8278 265.278' width='100%' xmlns='http://www.w3.org/2000/svg'>
              <defs>
                <linearGradient gradientTransform='matrix(.773 -.2616 .3218 .9511 -61.9588 19.5769)' gradientUnits='userSpaceOnUse' id='a' x1='8.4142' x2='47.2285' y1='223.2866' y2='208.9953'>
                  <stop offset='0' stop-color='#8be7f5'></stop>
                  <stop offset='1' stop-color='#364fcc'></stop>
                </linearGradient>
              </defs>
              <path d='M60.39 2.778c-16 76-45 117-56 154-9.9326 33.41-5.0071 108 65 108 61 0 88.8514-58.1537 66-101-24-45-68-116-75-161z' fill='#364fcc' stroke-miterlimit='10' stroke='#000'></path>
              <path d='M44.5981 242.5985c2.6329 1.8676 12.8192 4.6 15.3641 3.3018 2.2377-1.1412 1.1443-5.4045.7148-8.4271s-3.937-3.8321-5.5773-6.3844c-2.6342-4.099-5.6958-5.8088-8.6105-9.6508-7.5222-9.9151-14.1092-24.7821-19.562-36.2727-3.2448-6.8376-7.6289-18.8371-12.6872-9.631-2.6841 4.8851-.2551 23.5769 1.5857 28.8935 6.6491 19.2045 13.3926 27.2612 28.7724 38.1707z' fill='url(#a)'></path>
              end
            </svg>
          </div>
        </div>
        <div class='cold-sun hide' id='cold-sun'>
          <ul class='cold'>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class='cold-moon hide' id='cold-moon'>
          <ul class='cold-stars'>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <ul class='craters'>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <div class='coldhilight'></div>
        </div>
        <div class='moon hide' id='moon'>
          <ul class='stars'>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class='moonhlight'></div>
        <div class='sunicon-hot hide' id='sunicon-hot'>
          <ul class='sun-hot'>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class='sunicon hide' id='sunicon'>
          <ul class='sun'>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php wp_footer();?>

  <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/weather-js.js"></script>
</body>