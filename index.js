function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
// whether the slideshow is paused or not
	function myfuntion(imgs){
    var expandImg = document.getElementById("expandedImg");
  
  expandImg.src = imgs.src;

  expandImg.parentElement.style.display = "block";
  }
