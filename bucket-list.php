<?php /* Template Name: page Bucket List */ ?>


<!DOCTYPE html>
<html lang="en" ng-app="bucketapp">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Cookie|Give+You+Glory|Josefin+Slab|Merienda|Pacifico|Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/styles/bucketlist-styles.css">
  </head>
  <body>
      
    <section class="ease"><h1 class="title">
          EVNT 
        </h1>
    </section>    
    
    <ng-view class="view-animate"></ng-view> 
    

    <script type="text/javascript" src="https://code.angularjs.org/1.6.5/angular.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular-animate.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular-route.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bucketlist/app/module.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bucketlist/components/search/search.js"></script>  
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bucketlist/components/eventlist/event.js"></script>  
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bucketlist/components/bucketlist/bucket.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bucketlist/services/api.js"></script>
  </body>
  
  
  
  </html>