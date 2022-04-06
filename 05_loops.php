<?php
/* -------- Loops & Iteration ------- */


/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed

}
*/
// for ($i = 0; $i < 10; $i++) {
//     echo $i;
//     echo '<br/>';
// }


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
// $x = 1;

// while ($x <= 10) {
//     echo $x;
//     echo '<br/>';
//     $x++;
// }


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $a = 1;
// do {
//     echo $a;
//     $a++;
// } while ($a <= 10);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['first post', 'second post', 'third post'];

// for ($i = 0; $i < count($posts); $i++) {
//     echo $posts[$i];
// }
foreach ($posts as $index => $post) {
    echo $post;
}
