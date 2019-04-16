
      var przycisk = document.getElementById('przycisk');
      var blok = document.getElementById('blok');


      przycisk.addEventListener('click', function(){
      blok.textContent += 'click';
      });

      przycisk.addEventListener('mousedown', function(){
        blok.textContent += 'nacisniecie przycisku myszy';
      });

      przycisk.addEventListener('mouseup', function(){
        blok.textContent += 'puszczenie przycisku myszy';
      });

      przycisk.addEventListener('mouseover', function(){
        blok.textContent += 'najechanie myszką';
      });

      przycisk.addEventListener('mousemove', function(){
        blok.textContent += 'ruszanie myszką po elemencie';
      });

      przycisk.addEventListener('mouseout', function(){
        blok.textContent += 'opuszczenie elemetu';
      });

      przycisk.addEventListener('dblclick', function(){
        blok.textContent += 'podwójneklikniecie';
      });
