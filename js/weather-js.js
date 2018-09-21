"use strict"

var bG = {
          clouds: 'url("https://res.cloudinary.com/dp8syui83/image/upload/v1522720232/sky-1107579_1920_gqklng.jpg")',
          snow: 'url("https://res.cloudinary.com/dp8syui83/image/upload/v1522697201/winter-2896970_1920_ltaovz.jpg")',
          rain: 'url("https://res.cloudinary.com/dp8syui83/image/upload/v1522719488/rain-122691_1920_f5ilsd.jpg")',
          coldsun: 'url("https://res.cloudinary.com/dp8syui83/image/upload/v1522455859/winter-3254054_1920_o18ryw.jpg")', 
          hotsun: 'url("https://res.cloudinary.com/dp8syui83/image/upload/v1523133158/summer-1283724_xlcgoc.jpg")', 
          sun: 'url("https://res.cloudinary.com/dp8syui83/image/upload/v1522961832/clouds-429228_1920_ahqiq5.jpg")',
          moon: 'url("https://res.cloudinary.com/dp8syui83/image/upload/v1522274853/photoshop-2845779_1920_x2tk4g.jpg")',
          coldmoon: 'url("https://res.cloudinary.com/dp8syui83/image/upload/v1522374861/snow-2399849_1920_qu2wem.jpg")'
        }//Object to load backgrounds initially 

//Function for adding new backgrounds and showing there associated icons while hiding the weather icon previously on the screen. 
var backgrounds = function(bNum, caller){//function takes the number assigned to associated background and a caller number to do something different depending on how it is called.
  //console.log(document.styleSheets[1].cssRules);
  switch(bNum){
    case "1":
      document.getElementById("clouds").classList.remove("hide");//Removes display: none CSS rule from the clouds icon. 
      document.body.style.backgroundImage = bG.clouds;//Sets background to the background for clouds
      if(caller === 2){//If 2 is passed as the caller arguement add display: none CSS rule to all weather icons expecting the weather icon of the weather condition selected. 
      hider('clouds');
      document.getElementById("flex-con").style.color = "black";//Set backgound color of the text that show the weather read out to black if it was white. 
      }
      break; 
    case "2":
      document.getElementById("snow").classList.remove('hide');
      document.getElementById("flex-con").style.color = "white";//Set color of text area to white if loaded initially or by a function call that doesnt pass 2 into the arguement caller. 
      document.body.style.backgroundImage = bG.snow;
      if(caller === 2){
      hider('snow');
      }
      break;
    case "3":
     
      document.getElementById("rain").classList.remove("hide");
      document.getElementById("flex-con").style.color = "white";
      document.body.style.backgroundImage = bG.rain;
      if(caller === 2){
      hider('rain');
      }
      break; 
    case "4": 
      
      document.getElementById("cold-sun").classList.remove("hide");
      document.getElementById("flex-con").style.color = "black";
      document.body.style.backgroundImage = bG.coldsun; 
      if(caller === 2){
      hider('cold-sun');
      }
      break; 
    case "5": 
      
      document.getElementById("sunicon-hot").classList.remove("hide");
      document.body.style.backgroundImage = bG.hotsun;
      if(caller === 2){
      document.getElementById("flex-con").style.color = "black";
      hider('sunicon-hot');
      }
      break; 
    case "6": 
      document.getElementById("sunicon").classList.remove("hide");
      document.body.style.backgroundImage = bG.sun;
      if(caller === 2){
      document.getElementById("flex-con").style.color = "black";
      hider('sunicon');
      }
      break; 
    case "7": 
     
     document.getElementById("moon").classList.remove("hide");
      document.getElementById("flex-con").style.color = "white";
      document.body.style.backgroundImage = bG.moon;
      if(caller === 2){
      hider('moon');
      }
      break; 
    case "8":
      
      document.getElementById("cold-moon").classList.remove("hide");
      document.getElementById("flex-con").style.color = "white";
      document.body.style.backgroundImage = bG.coldmoon;
      if(caller === 2){
      hider('cold-moon');
      }
      break; 
    default:
      console.log("Error In selecting number for function background");
      break;
  }
}

//Function to call the weather api
var weatherAPI = function(url, callback) {
        var request = new XMLHttpRequest();//New XMLHttpRequest
        request.onreadystatechange = function() {//Run rest of function when XMLHttpRequest readyState changes.  
            if (request.readyState == 4 && request.status == 200)//Check if readyState is done and XMLHttpRequest status is Ok.
                callback(request.responseText);//Get the XMLHttpRequest Response Text when done. 
        }
        request.open( "GET", url, true ); //Get what is requested by the URL            
        request.send( null ); //Send the request.
    }

//Fade in weather icon and text area while fading out grey loading background. 
var fadeInInfo = function(){
  jQuery(".flex-element").fadeTo(1000, 1.0);
  jQuery("#weather-icon").fadeTo(1000, 1.0);
  document.getElementById('container').classList.add('grey-fade');
}

//Function to remove old elements and add new data from api into the text area. 
var drawData = function(arg){
  var toJSON = JSON.parse(arg);
  var weathCode = toJSON.weather[0]["id"];//
  var time = Math.floor(Date.now() / 1000);//Get users current time in seconds from UNIX GMT.
  var sunrise = toJSON.sys.sunrise;//Get time of sunrise in seconds UNIX GMT.
  var sunset = toJSON.sys.sunset;//Get time of sunset in seconds UNIX GMT. 
  var dayNight = false;
  if(time > sunrise && time < sunset){
    dayNight = true; 
  }//Set dayNight to true if it is night were user is located. 
  var weatherCon = "1";//Set defualt weather condition var to 1
  var temp = toJSON.main.temp;//Get tempurature
  if(weathCode === 800){//If it is clear out get set weather condition var to get clear backgrounds and icons. 
    if(dayNight){
      if(temp < 5){
        weatherCon = "4";
        console.log("sucess");
      }//if it is day for user and local temp is under 5°c set weather condition var to get the coldsun.
      else if (temp > 24){
        weatherCon = "5";
        console.log("sucess");
      }//if it is day for user and local temp over 24°c set weather condition var to get hot sun. 
      else{
        weatherCon = "6";
        console.log("sucess");
      }//If day set weather condition var to get sun
    }
    else{//If it is night set the weather condition to get clear night icons and backgrounds. 
      if(temp < 5){
        weatherCon = "8";
        console.log("sucess");
      }
      else{
        weatherCon = "7";
        console.log("sucess");
      }
    }
  }
  else if(Math.round(weathCode * 0.01) == 6){
    weatherCon = "2";
  }//Set weather condition var to to get snow if user has snow 
  else if(Math.round(weathCode * 0.01) == 5 || Math.round(weathCode) == 3){//Set weather condition var to rain if user weather is rain or adverse weather
    weatherCon = "3"; 
  }
  else{//If api doesnt return weather expected get the code it returns to the hundreth place and print to the console log
    console.log("error  " + typeof Math.round(weathCode * 0.01));
  }
 backgrounds(weatherCon, 1);//call backgrounds to change the weather the background and icon to the weather condition returned 
  var con = toJSON.weather[0]["main"];//Get Condition name
  var location = toJSON.name;//Get location name 
  console.log(temp + "   " + con + "  " + location + "   " + toJSON);
  jQuery("#loading-text").fadeTo(1000, 0.0);//fade out loading text
  jQuery("#loading").fadeTo(1000, 0.0, function(){
  document.getElementById("temp").innerHTML = temp; 
  document.getElementById("condition").innerHTML = con; 
  document.getElementById("location").innerHTML = location;
    console.log(con);
  let childOne = document.getElementById("loading");
  let childTwo = document.getElementById("loading-text");
  childOne.parentNode.removeChild(childOne);
  childTwo.parentNode.removeChild(childTwo);
  fadeInInfo();
  });//add the weather information to its respective boxes and remove loading elements after they have fadeded out then fade in the weather info.
  
}

var options = {
  enableHighAccuracy: false,
  timeout: 30000,
  maximumAge: 0 //36000000
};//Options for geolocation

function success(position) {
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;
  latitude = Math.round(latitude * 1000000) / 1000000;//Round latitude to sixth decimal 
  longitude = Math.round(longitude * 1000000) / 1000000;//Round longitude to sixth decimal
  var dynamicURL = "https://fcc-weather-api.glitch.me/api/current?lat=" + latitude + "&lon=" + longitude;
  document.getElementById("latlon").classList.remove("flex-element");
  weatherAPI(dynamicURL, function(json){
  console.log(json)
  drawData(json);
});
  console.log('Your current position is:');
  console.log(`Latitude : ${position.coords.latitude}`);
  console.log(`Longitude: ${position.coords.longitude}`);
  console.log(`More or less ${position.coords.accuracy} meters.`);
}

function error(error) { 
  var errorURL = "https://fcc-weather-api.glitch.me/api/current?lat=41.836944&lon=-87.684722";
  if(error.code === 1){
    weatherAPI(errorURL, function(json){
  console.log(json)
  drawData(json);
  document.getElementById("latlon").classList.remove("hide");
  setTimeout(function(){jQuery('#latlon').fadeTo(2000, 1.0)}, 3000);
  document.getElementById("latlon").innerHTML = "This page does not have permission to access your geolocation information showing current weath for Chicago, IL";
  jQuery('#latlon').fadeTo(2000, 1.0);
});
  }
  else if(error.code === 2){
  weatherAPI(errorURL, function(json){
  console.log(json)
  drawData(json);
  document.getElementById("latlon").classList.remove("hide");
  setTimeout(function(){jQuery('#latlon').fadeTo(2000, 1.0)}, 3000);
  document.getElementById("latlon").innerHTML = "The acquisition of the geolocation failed showing current weather for Chicago, IL";
  jQuery('#latlon').fadeTo(2000, 1.0);
});
  }
  else if(error.code === 3){
    weatherAPI(errorURL, function(json){
  console.log(json)
  drawData(json);
  document.getElementById("latlon").classList.remove("hide");
  document.getElementById("latlon").innerHTML = "HTML Geolocation Timed Out showing current weather for Chicago, IL";
  setTimeout(function(){jQuery('#latlon').fadeTo(8000, 0.0)}, 3000, function(){
    jQuery('#latlon').animate({height: 0}, 500)
  });
  
  
});
  }
  else{
  console.warn(`ERROR(${error.code}): ${error.message}`);
  }
}

jQuery(document).ready(function() {
    if ('geolocation' in navigator) {
       navigator.geolocation.getCurrentPosition(success, error, options);
    } else { 
        document.getElementById("latlon").innerHTML = "Geolocation is not supported by this browser.";
    }
});

var hider = function(bID){
 var y = document.getElementById("weather-icon").children;//Assign all the elements that are direct childern #weather-icon to array y.
  for(var i = 0; i < y.length; i++){
   if(y[i].id !== bID){
     y[i].classList.add("hide");
     console.log(y[i]); 
      }//for each direct child of y add the hide to set display of none unless the ID of that class is equal to bID. 
  }
}

document.getElementById("t").addEventListener("change", function(){
let x = document.getElementById("t").options[document.getElementById("t").selectedIndex].value;       
  backgrounds(x, 2);
  });//Set background and icon to selected value dropdown menu t when its value is changed. 

document.getElementById("fercel").addEventListener("click", function(){
  console.log(typeof document.getElementById("fercel").innerHTML)
  var swaped = document.getElementById("temp").innerHTML;
  if(document.getElementById("fercel").innerHTML === '°C'){
    swaped = Math.round(((parseFloat(swaped) * 1.8) + 32) *100) / 100 ;
    document.getElementById("temp").innerHTML = swaped; 
    document.getElementById("fercel").innerHTML = '°F'
  }//If tempurature is in °C convert the value of the tempurature to °F then set the InnerHTML of #temp to that new value and set InnerHtml of #fercel °F
  else if(document.getElementById("fercel").innerHTML === '°F'){
    swaped = Math.round(((parseFloat(swaped) - 32) / 1.8) * 100 ) / 100; 
    document.getElementById("temp").innerHTML = swaped; 
    document.getElementById("fercel").innerHTML = '°C';
  }//If tempurature is in °F convert the value of the tempurature to °C then set the InnerHTML of #temp to that new value and set InnerHtml of #fercel °C
  else{
    console.log("error in °C °F Toogle")
  }
});