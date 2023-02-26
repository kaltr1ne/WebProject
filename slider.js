var array = [
    'img/slider/white.jpg',
    'img/slider/furniture1.jpg',
    'img/slider/furniture3.jpg',
    'img/slider/furniture4.jpg'
  ];
  var index = 0;
  
  function slider() {
    document.getElementById('banner10').src = array[index++];
    if (index == array.length) {
      index = 0;
    }
    setTimeout(slider, 2000); 
  }
  slider();

  var subImages = document.querySelectorAll('.sub-image');
  var mainImage = document.getElementById('banner10');
  
  subImages.forEach(image => {
    image.onclick = () => {
      var src = image.getAttribute('src');
      mainImage.src = src;
    }
  });
