<?php

  define("CONSTANT", "Bonjour le monde.");
 /* echo CONSTANT; // affiche "Bonjour le monde."
  


/ Simple valeur scalaire
const CONSTANT = 'Bonjour le monde !'; */

echo CONSTANT;

// Expression scalaire
const ANOTHER_CONST = CONSTANT.'; Aurevoir le monde !';
echo ANOTHER_CONST;



    // Tableaux constant
      define('ANIMALS', array('chien',
        'chat',
        'oiseaux'));

      echo ANIMALS[2]; // affiche "chat"
  ?>