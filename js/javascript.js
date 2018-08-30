"use strict";
window.onload = function(){

let w = document.getElementById("cen-cir").offsetWidth;

console.log(w);


document.getElementById("title-semcir").addEventListener("click", function(){

    console.log("title semi circle");
    
    document.getElementById("inner-cir-one").classList.remove("hidden");
    document.getElementById("con-cir-one").classList.remove("hidden");
    document.getElementById("con-cir-two").classList.remove("hidden");

});

document.getElementById("about-semcir").addEventListener("click", function(){

    console.log("about semi circle");
    
    document.getElementById("inner-cir-one").classList.add("hidden");
    document.getElementById("con-cir-one").classList.add("hidden");
    document.getElementById("con-cir-two").classList.add("hidden");
});

let viewObject = {
    fadeOut : function(el, step, callback, inline) {
        let opac = 1;  
        let steps = setInterval(function () {
            if (opac <= 0){
                
                clearInterval(steps);
                //callback();
            }
            el.style.opacity = opac;
            opac -= 0.1;
        }, step);
    },

    fadeIn : function(el, step, callback, inline){
        let opac = 0; 
        let steps = setInterval(function() {
            if (opac >= 0.9){
                console.log(" start " + new Date());
                clearInterval(steps);
                if(callback){
                    callback(); 
                    console.log(new Date()); 
                }
            }
            el.style.opacity = opac; 
            opac += 0.1; 
        }, step)
    },
    
    staggerShow : function(els){
    
    },
    
    flash : function(el, color, y, x, spread, blur, timeIn, timeOut){
        let flashed = el;
        console.log(flashed); 
        let out = function(){
            setTimeout(function(){
                    flashed.removeAttribute("style");
                    flashed.setAttribute("style", "opacity: 1"); 
                            
            }, 2000);
        }
        setTimeout(function(){
            flashed.setAttribute("style", `box-shadow: 0 0 30px 0 rgba(0, 199, 236, 0.5)`);
            out();
        }, 4)
    },

    rotateBackwards : function(el, step, initA, endA){
        let angle = initA;
        let steps = setInterval(function(){
            if(angle <= endA){
                clearInterval(steps); 
            }
            el.style.transform = `translate(-50%, -50%) rotate(${angle}deg)`
            angle -= 5; 
        }, step); 
    },

    findKeyframesRule : function(rule) {
        var ss = document.styleSheets;
        for (var i = 0; i < ss.length; ++i) {
        console.log(ss);
        for (var j = 0; j < ss[i].cssRules.length; ++j) {
            console.log(ss[i].cssRules); 
            if (ss[i].cssRules[j].type == window.CSSRule.WEBKIT_KEYFRAMES_RULE &&
            ss[i].cssRules[j].name == rule) { 
            console.log(ss[i].cssRules[j]);
            return ss[i].cssRules[j]; }
        }
        }
        console.log("null");
        return null;
    }

}

let controllerObject = {
    staggerGroup : function(els){
        let shown = document.querySelectorAll(`${els}`);
        let numOfEls = 0; 
        while(numOfEls < shown.length){
            numOfEls++;
        }
        console.log(numOfEls);
        for(let i = 0; i < shown.length; i++){
            let step = 100;
            let time = 500 * i; 
            setTimeout(function(){
                 viewObject.fadeIn(shown[i], step, viewObject.flash(shown[i]));
            }, time);
        }

    },
    timeOutLoop : function(){
        
    },
    addMenuClicks : function() {
        let circleNav =  document.getElementById("inner-cir-one"); 
        let theCircle = document.getElementById("cen-cir");
        let menuClicks  = document.getElementsByClassName("stack");
        let semCirAbout = document.getElementById("about-semcir");
        let semCirTitle = document.getElementById("title-semcir"); 
        let container = document.getElementById("container");
        let naviga = document.getElementById("navigation"); 
        let trail = document.getElementById("trail"); 
        let starsRules = document.getElementById("stars");
        let portfolioLink = document.getElementById("stack4"); 
        
            portfolioLink.addEventListener("click", () => {
               container.className += " reveal"; 
               viewObject.fadeOut(semCirAbout, 50); 
               viewObject.fadeOut(semCirTitle, 50); 
               viewObject.fadeOut(theCircle, 100);
               viewObject.fadeOut(circleNav, 100);
               viewObject.rotateBackwards(circleNav, 50, 110, 65); 
               setTimeout(() => {semCirAbout.className += " hidden";}, 4000);
               setTimeout(() => {semCirTitle.className += " hidden";}, 4000); 
               setTimeout(() => {circleNav.className += " hidden"}, 4000);
               //setTimeout(function(){ background-image: url(images/stars.png)})
               setTimeout(() => {theCircle.className += " hidden"}, 4000);
               setTimeout(() => {naviga.classList.remove('hidden'); viewObject.fadeIn(naviga, 100);}, 2000);               
               setTimeout(() => {
                console.log("yes");
                trail.classList.remove('hidden'); 
                this.staggerGroup('.paver');
                }, 2000); 
         
                
            });
  
    },
    addNavClicks : function(){
        document.addEventListener("click", function(){

        }); 
        
        document.addEventListener("click", function(){

        }); 

        document.addEventListener("click", function(){

        }); 

        document.addEventListener("click", function(){

        }); 
    }


}



controllerObject.addMenuClicks();


}