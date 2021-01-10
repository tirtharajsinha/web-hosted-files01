function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  var counter=2;
  setInterval(function(){
    document.getElementById('radio'+counter).checked=true;
    counter++;
    if(counter > 4){
      counter=1;
    }
  },5000)

AOS.init();

let bg=document.getElementById("bg-grass");



      window.addEventListener('scroll',function(){
        var value=window.scrollY;
        bg.style.top=-value*0.5+"px";

      })

function blogna(){
  alert('Sorry !! BlogPost site is currently under-maintenance.')
}
function credna(){
  alert('Sorry !! Credentials section is still not avalaible.')
}
