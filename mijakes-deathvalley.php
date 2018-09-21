<?php /* Template Name: mijikes bikeride */ ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>" />
    <title>Kennys Portfolio</title>
    <?php wp_head();?>
    <link rel="stylesheet" type ="text/css" href="<?php bloginfo('template_url');?>/styles/majikes-styles.css">
  </head>
  <body>
    
   <div id="wrapper" class="wrapper">
    <div id="backplate" class="backplate">
      <section id="header" class="header">
        
  
          <h1 id="title" class="title">
            Majikes Family Death Valley JDRF Bike Ride
          </h1>
        
      </section>

<div class="row">
         <div class="column">
            <div class="card">
              <div class="img-wrap" id="img-wrap-matt">
                <img src="<?php bloginfo('template_url');?>/images/matthew.png" alt="Matthew"/>
              </div>
               <div class="container">
                  <p class="name">Matthew Majikes</p>
                  <p class="role">Coach</p>
                  <p class="blurb">Matthew's been riding now for more than 10 years.
		  This is his sixth year coaching riders.<br> Matthew's focus has been to find a cure for Type 1 Diabetes.</p>
		  <button class="button" id="matt-button"><a href="http://ride.matthew.majikes.net">
                        <font color="white">Donate</font>
                      </a></p>
               </div>
            </div>
         </div>

         <div class="column">
            <div class="card">
              <div class="img-wrap" id="img-wrap-linda">
                <img src="<?php bloginfo('template_url');?>/images/linda.png" alt="Linda""/>
              </div>
               <div class="container">
                  <p class="name">Linda Majikes</p>
                  <p class="role">First time rider</p>
                  <p class="blurb">Linda's will be riding for the first time in Death Valley.
		  This will be a change for Linda who's been a Human Artificial
		  Pancreas for the last 14 years since Daniel was diagnosed
		  with Type 1 Diabetes.
		  </p>
		  <button class="button" id="linda-button"><a href="http://ride.linda.majikes.net">
                        <font color="white">Donate</font>
                      </a></p>
               </div>
            </div>
         </div>

         <div class="column">
            <div class="card">
              <div class="img-wrap" id="img-wrap-john"> 
                <img src="<?php bloginfo('template_url');?>/images/john.png" alt="John""/>
              </div>
               <div class="container">
                  <p class="name">John Majikes</p>
                  <p class="role">Avid rider</p>
                  <p class="blurb">John's been riding since he was a boy.
		  John's riden 100 miles or more several times.
                  This is John's seventh JDRF ride.
          	  But John wants to see how many riders he can help get 
		  across the finish line.
                  <br /> <br />
		  </p>
		  <button class="button" id="john-button"><a href="http://ride.john.majikes.net">
                        <font color="white">Donate</font>
                      </a></p>
               </div>
            </div>
         </div>
      </div>  

    <footer id="foot" class="foot">

</footer>
</div>
</div>

</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/majikes-js.js"></script>
</body>
</html>