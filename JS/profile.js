
var backgroundImages = ["bg.jpg", "bg1.jpg", "bg2.jpg"];
var currentImageIndex = 0;


function changeBackgroundImage() {
  var body = document.querySelector("body");
  body.style.backgroundImage = "url('" + backgroundImages[currentImageIndex] + "')";

  
  currentImageIndex++;
  if (currentImageIndex >= backgroundImages.length) {
    currentImageIndex = 0;
  }
}


setInterval(changeBackgroundImage, 5000);
