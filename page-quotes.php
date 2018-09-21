<?php /* Template Name: page quotes */ ?>


<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>" />
    <title>Kennys Portfolio</title>
    <?php wp_head();?>
    <link rel="stylesheet" type ="text/css" href="<?php bloginfo('template_url');?>/styles/quotes-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/fonts/font-awesome/css/font-awesome.min.css">
  </head>

<body>
<div id="container" class="container"> 
  
  <div id="box" class="box">
    
    <div id="title" class="title">
      <h1>Quotes, Quotes, Qoutes</h1>
      <h2>... Live Quotes from Dead People Just Click The Button Below</h2>
    </div>
   
   <div class="slip" id="slip"> 
     
     <div id="theQuote">
      <q id="q" cite="https://en.wikiquote.org/wiki/Sally_Field">When I was born, the doctor looked at my mother and said, 'Congratulations, you have an actor!'</q>
      <p id="attr">— Sally Fields</p>
     </div>
     
     <div id="bottom-line" class="bottom-line clearfix">
        
        <div id="share" class="share">
        <a href="https://twitter.com/intent/tweet?text=When%20I%20was%20born%2C%20the%20doctor%20looked%20at%20my%20mother%20and%20said%2C%20%27Congratulations%2C%20you%20have%20an%20actor!%27%0A%E2%80%94%20Sally%20Fields" id="tweet" class="fa fa-twitter-square"  data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a href="https://www.tumblr.com/widgets/share/tool?posttype=quote&content=When%20I%20was%20born%2C%20the%20doctor%20looked%20at%20my%20mother%20and%20said%2C%20%27Congratulations%2C%20you%20have%20an%20actor%21&title=Sally%20Fields&canonicalUrl=https%3A%2F%2Fs.codepen.io%2Frekerc4%2Fdebug%2FZrZOxz%2FNQMzYnXNpBdk&shareSource=tumblr_share_button" id="tumbl" class="fa fa-tumblr-square"></a><script id="tumblr-js" async src="https://assets.tumblr.com/share-button.js"></script>
        </div>
        
        <div id="button" class="button">
          <button id="clicker">Get a quote</button>
        </div>
      </div>
  </div>
    
    <div id="quote-box" class="quote-box">
    
   </div>
  </div>
 </div>

<?php wp_footer();?>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/quotes-js.js"></script>

  </body>
  
  
  
  </html>
