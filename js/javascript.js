"use strict";
window.onload = function(){

let w = document.getElementById("cen-cir").offsetWidth;

let eles = {
    circleNav : document.getElementById("inner-cir-one"), 
    theCircle : document.getElementById("cen-cir"),
    semCirAbout : document.getElementById("about-semcir"),
    semCirTitle : document.getElementById("title-semcir"), 
    container : document.getElementById("container"),
    naviga : document.getElementById("navigation"),
    trail : document.getElementById("trail"),
    works : document.getElementById("works"), 
    starsRules : document.getElementById("stars"),
    contactLink : document.getElementById("stack2"),
    portfolioLink : document.getElementById("stack4"), 
    worksLink : document.getElementById("stack3"),
    tile5 : document.getElementById("tile5"),
    darken : document.getElementById("darken"), 
    contact : document.getElementById("contact"),
    contactClose : document.getElementById("close1"), 
    portContact : document.getElementById("tile2"),
    menuClicks  : document.getElementsByClassName("stack")
}

let viewObject = {
    fadeOut : function(el, step, callback, inline) {
        let opac = 1;  
        let steps = setInterval(function () {
            if (opac <= 0){
                
                clearInterval(steps);
            }
            el.style.opacity = opac;
            opac -= 0.1;
        }, step);
    },

    fadeIn : function(el, step, callback, inline){
        console.log(el);
        let opac = 0; 
        let steps = setInterval(function() {
            if (opac >= 0.9){
                clearInterval(steps);
            }
            el.style.opacity = opac; 
            opac += 0.1; 
        }, step)
    },
    
    staggerShow : function(els){
    
    },
    
    flash : function(el, color, y, x, spread, blur, timeIn, timeOut){
        let flashed = el;
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

        for (var j = 0; j < ss[i].cssRules.length; ++j) {
        
            if (ss[i].cssRules[j].type == window.CSSRule.WEBKIT_KEYFRAMES_RULE &&
            ss[i].cssRules[j].name == rule) { 
            
            return ss[i].cssRules[j]; }
        }
        }
        return null;
    }

}

let controllerObject = {
    staggerGroup : (els, timing, fdingOut) => {
        console.log('y');
        let shown = document.querySelectorAll(`${els}`);
        let numOfEls = 0; 
        while(numOfEls < shown.length){
            numOfEls++;
        }
        if(fdingOut === true){
            console.log('l');
            for(let i = 0; i < shown.length; i++){
                let step = 100; 
                let time = timing * i;
                setTimeout(function(){
                    viewObject.fadeOut(shown[i], step); 
                }, time); 
            }
        }
        else{
            console.log("p");
        for(let i = 0; i < shown.length; i++){
            let step = 100;
            let time = timing * i; 
            setTimeout(function(){
                 viewObject.fadeIn(shown[i], step, viewObject.flash(shown[i]));
                 controllerObject.addMouseEnterLeave(shown[i]);
            }, time);
        }
    }

    },
    addMouseEnterLeave : function(element){
        let el = element; 
        el.addEventListener("mouseenter", () => {
            el.children[0].className += " modul"
        }); 

        el.addEventListener("mouseleave", () => {
            el.children[0].classList.remove('modul'); 
        });
    },
    addMenuClicks : function() {
      

        let inclick = function(event) {
            console.log(event.taget);
            viewObject.fadeOut(darken, 10);
            setTimeout(() => {eles.darken.classList.add('hidden')}, 1500);
            viewObject.fadeOut(contact, 10);
            setTimeout(() => {eles.contact.classList.add('hidden');}, 1500);
            console.log(event.target);
            event.target.removeEventListener("click", inclick);
            };

            eles.contactLink.addEventListener("click",  (e) => {
                console.log(e);
               
                eles.darken.classList.remove('hidden'); 
                eles.contact.classList.remove('hidden');
                viewObject.fadeIn(eles.darken, 10);
                viewObject.fadeIn(eles.contact, 100);
                
                
                eles.contactClose.addEventListener("click", inclick);
                eles.darken.addEventListener("click", inclick);
            });

            eles.portContact.addEventListener("click", (e) => {
                eles.darken.classList.remove('hidden'); 
                eles.contact.classList.remove('hidden');
                viewObject.fadeIn(eles.darken, 10);
                viewObject.fadeIn(eles.contact, 100);
                
                
                eles.contactClose.addEventListener("click", inclick);
                eles.darken.addEventListener("click", inclick);
            })
        
            eles.portfolioLink.addEventListener("click", () => {
               eles.container.className += " reveal"; 
               viewObject.fadeOut(eles.semCirAbout, 50); 
               viewObject.fadeOut(eles.semCirTitle, 50); 
               viewObject.fadeOut(eles.theCircle, 100);
               viewObject.fadeOut(eles.circleNav, 100);
               viewObject.rotateBackwards(eles.circleNav, 50, 110, 65); 
               setTimeout(() => {eles.semCirAbout.className += " hidden";}, 4000);
               setTimeout(() => {eles.semCirTitle.className += " hidden";}, 4000); 
               setTimeout(() => {eles.circleNav.className += " hidden"}, 4000);
               //setTimeout(function(){ background-image: url(images/stars.png)})
               setTimeout(() => {eles.theCircle.className += " hidden"}, 4000);
               setTimeout(() => {eles.naviga.classList.remove('hidden'); viewObject.fadeIn(eles.naviga, 100);}, 2000);               
               setTimeout(() => {
                eles.trail.classList.remove('hidden'); 
                this.staggerGroup('.paver', 500);
                }, 2000); 
            });

            eles.worksLink.addEventListener("click", () => {
                eles.container.className += " reveal";
                viewObject.fadeOut(eles.semCirAbout, 50); 
                viewObject.fadeOut(eles.semCirTitle, 50); 
                viewObject.fadeOut(eles.theCircle, 100); 
                viewObject.fadeOut(eles.circleNav, 100); 
                viewObject.rotateBackwards(eles.circleNav, 50, 110, 65); 
                setTimeout(() => {eles.semCirAbout.className += " hidden";}, 4000);
                setTimeout(() => {eles.semCirTitle.className += " hidden";}, 4000); 
                setTimeout(() => {eles.circleNav.className += " hidden"}, 4000);
                //setTimeout(function(){ background-image: url(images/stars.png)})
                setTimeout(() => {eles.theCircle.className += " hidden"}, 4000);
                setTimeout(() => {eles.naviga.classList.remove('hidden'); viewObject.fadeIn(eles.naviga, 100);}, 2000);   
                setTimeout(() => {
                    eles.works.classList.remove('hidden'); 
                    this.staggerGroup('.work', 250);
                    }, 2000);  
            });

            eles.tile5.addEventListener("click", () => {
                this.staggerGroup('.paver', 500, true);
                
                setTimeout(() => {eles.works.classList.remove('hidden'); this.staggerGroup('.work', 250); eles.trail.classList += " hidden"}, 5000);
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