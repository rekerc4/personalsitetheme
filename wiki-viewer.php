<?php /* Template Name: page wikipedia viewer */ ?>


<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>" />
    <title>Kennys Portfolio</title>
    <?php wp_head();?>
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|Oswald|Special+Elite" rel="stylesheet">
    <link rel="stylesheet" type ="text/css" href="<?php bloginfo('template_url');?>/styles/wikipedia-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/fonts/font-awesome/css/font-awesome.min.css">
  </head>

<body>
<div id="container" class="container">
  <div id="topspace" class="topspace">

  </div>
  <div class="folder">

    <div class="tabs">

    <div id="title" class="title">
      Wikipedia Viewer
    </div>
    <div id="random" class="random">
    Get a Random article
    </div>
    <div id="search" class="search">
    Search Wikipedia
    </div>
  <div id="holder">
    <div id="paper" class="paper">
       <div id="writing" class="writing">

      </div>
    </div>
      </div>
  </div>
  <div class="folderbody">
    <form id="srb" class="searchbar" onsubmit="return false">
      <input id="sinput" type="text" name="search" placeholder="Search Wikipedia" value="">
      <button id="sbutton" type="submit">
        <i class="fa fa-search"></i>
      </button>

      </form>

    </div>


  </div>
  </div>
    <?php wp_footer();?>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/wikipedia-js.js"></script>
</body>