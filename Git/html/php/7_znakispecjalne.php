<?php

echo 'Interpretacja znaków specjalnych<br>';
echo "\x61 &#10083 &#9829 &#x1f60d &#10086"; // a zapis hexadecymalny (dziesiętne 97)

echo '<br>Bez interpretacji znaów specjalnych: <br>';
echo "\u{9829} \u{61} \u{1560} \u{9825}";






 ?>
