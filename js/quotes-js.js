"use strict"

document.getElementById("clicker").addEventListener("click", clicker);//Set event listener for Button

heightSet();//Set initial height of backgrond box of the quote for any screen size.

//Function for constructing and calling API.
function apiContrictor(callback){
  let randomCat = ['American%20actors' , 'American%20actresses'];//random categories from which to generate quotes.
  let category = randomCat[Math.floor(Math.random() * 2)];//select random category
  let firstPart = 'https://en.wikiquote.org/w/api.php?action=query&prop=revisions&rvprop=content&generator=categorymembers&gcmtitle=Category:';
  let secondPart = '&format=json&gcmlimit=51';//Use a generator to get the contents of the first 50 articles in the random category.
  let url = firstPart + category + secondPart;

  jQuery.ajax({
    type: "GET", 
    headers: {}, 
    url: url,
    data: {origin: "*"}
  }).done( function(stuff){
    jQuery.json = stuff;
    callback();//Callback for quotes function.
  });//Call the API.
}

//Function to Set the Height of the background div in the quotes box.
function heightSet(){
  let quoteHeight = document.getElementById("theQuote").offsetHeight;
  jQuery("#bottom-line").animate({top: quoteHeight}, 500);
  quoteHeight = quoteHeight + 95;
  document.getElementById('quote-box').style.height = quoteHeight + 'px';
}

//Function to get a random quote from the the API.
function quotes(callback){

  let contentBox = jQuery.json.query.pages;//Set the pages element of the object returned by the   API to a variable.

  let randIdIndex = Math.floor(Math.random() * (50));
  let randId = Object.keys(contentBox)[randIdIndex];//Get the ID of the random article.
  let title = contentBox[randId].title;//Get the title of the random article.
  let link = title.replace(/\s+/g , '_');//Get the end of the link to the article and form it to match wiki style.
  let orgContent = contentBox[randId].revisions[0]['*'];//Get the content of the random page revision.
  orgContent = orgContent.replace(/[\[\]]+/g , '');//Remove [ and ] in the pages contents.

  if(typeof orgContent.split('== Quotes =='||"==Quotes==") === "undefined"){
     quotes();
     }//Call for a new random article if the article selected doesnt have a quotes section.
  let secContent = orgContent.split('== Quotes =='||"==Quotes==");//Put the quotes section     of the article into the second index of an array.

  if(typeof secContent[1] === "undefined"){
     quotes();
     }//Get a new random article if the article doesnt have a quotes section.
  let terContent = secContent[1].split('*');//Get the first quote in an article.
  let quadContent = terContent[1].substring(0, 355);

  if(terContent[1].length > 355){
    let quadContentIndex = quadContent.lastIndexOf(' ');
    quadContent = quadContent.substring(0, quadContentIndex);
    quadContent = quadContent + '...';

  }//If the first quote was more than 355 characters find the last whitespace of the    truncated quote and cut the quote there adding ... to the end of the quote.

  let html = '<q id=\"q\" cite=\'https://en.wikiquote.org/wiki/' + link + '\'>' + quadContent + '</q>' + '<p id=\"attr\">' + '— ' + title + '</p>';

  document.getElementById("theQuote").innerHTML = html;//Replace the old quote with new quote on page.
  heightSet();
  tweet();
  tumbl();
  jQuery("#theQuote").fadeTo(2500, 1, function(){
  jQuery('#clicker').bind('click', clicker);
  });//Fade in the new quote.
 //Run Height Set Function.
  }

//Function for onclick color changes and attachment to event listener.
function clicker(){

  jQuery('#clicker').unbind();
  jQuery("#theQuote").fadeTo( 1000, 0, function() {
  apiContrictor(quotes);
  });//Fade out the old quote then get an API call before calling quotes.

  let degree = Math.floor(Math.random()*359).toString();//Set a random degree for backgrond gradient.
  let randOne = Math.floor(Math.random()*16777215);
  let randTwo = Math.floor(Math.random()*16777215);//Random numbers for HEX colors.
  let stopOne = randOne.toString(16);
  let stopTwo = randTwo.toString(16);//Turn random numbers into strings base 16 to be used as hex colors.
  let tranparency = Math.random() * (.75 - 0.25) + 0.25;//Number for an opacity for background of quotes box.
  document.body.style.background = 'linear-gradient(' + degree + 'deg' + ',' + '#' + stopOne + ' 40%' + ',' + '#' + stopTwo + ')';//Set new background gradient.

  document.getElementById('quote-box').style.opacity = tranparency.toString();//Set opacity of background of quotes box.

  var nodesArray = document.getElementById('share').getElementsByTagName('a');
  for (var i = 0; i < nodesArray.length; i++) {
    nodesArray[i].style.color = '#' + Math.floor(Math.random()*16777215).toString(16);
  }//Set twitter and tumblr buttons to a random color.

}

//Set the values of twitter link to tweet out the current quote.
function tweet(){
  let text = encodeURIComponent(document.getElementById('theQuote').textContent);//Get the text of the quote and encode that text as a URI.
  let a = document.getElementById('tweet');
  a.href = "https://twitter.com/intent/tweet?text=" + text;
}

//Sets the value of the tumblr link to return the current quote in a new on user tumblr.
function tumbl(){
  let text = encodeURIComponent(document.getElementById("q").textContent);
  let sayer = encodeURIComponent(document.getElementById("attr").textContent.replace(/—+/g, ''));
  let a = document.getElementById('tumbl');
  a.href = "https://www.tumblr.com/widgets/share/tool?posttype=quote&content=" + text + "&title=" + sayer + "&canonicalUrl=https%3A%2F%2Fs.codepen.io%2Frekerc4%2Fdebug%2FZrZOxz%2FNQMzYnXNpBdk&shareSource=tumblr_share_button";
 }