
      var zdjecie = document.getElementById('zdjecie');
      var pom = 0;

      function zmien(){
        if (pom == 0) {
          pom = 1;
          zdjecie.src ='./chrome.png';
        }else{
          pom = 0;
          zdjecie.src ='./firefox.png';
          zdjecie.style.opacity = 0.5;
        }
      }

zdjecie.addEventListener('click', zmien);
