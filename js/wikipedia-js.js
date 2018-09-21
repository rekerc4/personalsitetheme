var url = function(uurl) {
    this.url = uurl;
  };
  
  var randomGet = new url('https://en.wikipedia.org/w/api.php?action=query&format=json&rnnamespace=0&list=random&prop=info&inprop=url&rnlimit=1');
  
  var searchGet = new url("https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&srsearch=");
  
  var prefilter = function(){
  
  jQuery.ajaxPrefilter(function(options) {
      if (options.crossDomain && jQuery.support.cors) {
          options.url = 'https://cors-anywhere.herokuapp.com/' + options.url;
      }
  });
  }
  
  var oURL = function(dynamic){
    var outURL = "https://en.wikipedia.org/w/api.php?action=query&format=json&prop=info&pageids=" + dynamic + "&inprop=url";
    return outURL;
  }
  
  var winNew = function(i){
   window.open(i);
  }
  
  var typing = function(curTitle, i, j){
    var writingNodes = document.getElementById("writing").childNodes;
  
    if(j < curTitle.length){
    writingNodes[i].childNodes[0].append(curTitle[j]);
    j++;
    setTimeout(function(callback){
        typing(curTitle, i, j);
        }, 100)}
  }
  
  var typist = function(response, status, objKeys){
         var writingNodes = document.getElementById("writing").childNodes;
         var link = [0]
         for(var i = 1; i < objKeys.length; i++){
          var curTitle = response.query.search[i].title;
          var uriTitle = encodeURIComponent(curTitle);
          link.push("https://www.wikipedia.org/wiki/" + uriTitle);
          console.log(link[i]);
          var j = 0;
          typing(curTitle, i, j);
         }
  }
  
  var searchReturn = function(response, status, callback){
         var html = "<div id=\"top\" class=\"top\"></div>"
  
         var objKeys = Object.keys(response.query.search)
         for(var i = 0; i < objKeys.length; i++){
          var curTitle = response.query.search[i].title;
          var uriTitle = encodeURIComponent(curTitle);
          var link = "https://www.wikipedia.org/wiki/" + uriTitle;
          html = html + "<div class=\"result\"><a href=\"" + link + "\" target=\"_blank\"></a></div>";
          }
          document.getElementById("writing").innerHTML = html;
          typist(response, status, objKeys, callback);
  }
  
  var ranReturn = function(response, status){
          console.log(response.query.random[0].id);
          var j = response.query.random[0].id;
          outURL = oURL(j);
          jQuery.ajax({
            url: outURL,
            type: 'POST',
            success: function (response, status){
              var jsn = response.query.pages[j].fullurl;
              console.log(jsn);
              winNew(jsn);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown){
              console.log('Error:' + textStatus);
            }
          });
  }
  
  var api = function(arg){
  prefilter();
  console.log(arg);
  jQuery.ajax({
      url: arg.url,
      type: 'POST',
      success: function(response, status){
        if(arg === randomGet){ranReturn(response, status)}
        else if(arg === searchGet){searchReturn(response, status)}
        else{alert("error")}
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
          console.log('Error:' + textStatus);
      }
  });
  
  }
  
  window.onload  = function(){
  var searchId = document.getElementById("search");
  var paperId = document.getElementById("paper");
  
  var searchRect = searchId.getBoundingClientRect();
  var searchLeft = searchRect.left;
  var searchBottom = searchRect.bottom;
  paperId.style.height = "calc(" + searchBottom + "px" + " + 25vh)";
  document.getElementById("srb").style.left = searchLeft + 10 +  "px";
  var paperRect = paperId.getBoundingClientRect();
  var paperTop = paperRect.top;
  paperId.style.top = paperTop + "px";
  var leftAdj = paperRect.left - searchLeft;
  var paperRight = paperRect.right - leftAdj;
  var offset = window.innerWidth - paperRight;
  
  if(window.innerWidth - paperRight <= 0){
  
  console.log('yes: ' , searchLeft);
  paperId.style.left = searchLeft + offset + 'px';
  }
  else{
  
  paperId.style.left = searchLeft + "px";
  
  window.addEventListener("resize", function(){
  leftAdj = paperRect.left - searchLeft;
  paperRight = paperRect.right - leftAdj;
  offset = window.innerWidth - paperRight;
  console.log(leftAdj , '  ' , paperRight , ' ' , offset);
  console.log(searchLeft , "  " , offset);
  if(window.innerWidth - paperRight <= 0){
  
   console.log('yes: ' , searchLeft);
   paperId.style.left = searchLeft + offset + 'px';
  }
  
  });
  }
  
  document.getElementById('random').addEventListener('click' , function(){
  api(randomGet);
  });
  
  document.getElementById('srb').addEventListener('submit' , function(event){
  if(document.getElementById("sinput").value === ""){console.log("Enter Something or the search will do nothing")}
  else{
  searchGet.url = "https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&srsearch=";
  console.log(document.getElementById("sinput").value);
  searchGet.url = searchGet.url + document.getElementById("sinput").value;
  event.preventDefault;
  console.log("anything");
  document.getElementById('paper').style.top = "50px";
  document.getElementById('paper').style.transform = "skewY(3deg)";
  api(searchGet);
  }
  });
  
  window.addEventListener("resize", function(){
  document.getElementById("srb").style.left = searchLeft + 10 +  "px";
   });
  
  document.getElementById("search").addEventListener("click", function(){
    jQuery('#srb').fadeTo(2000, 1.0);
    document.getElementById("srb").style.transform = "scaleY(1)";
    document.getElementById("title").style.border = 1 + "px" + " solid" + " black";
    document.getElementById("search").style.border = "4px solid black";
    document.getElementById("search").style.borderBottom = "none";
    });
  }