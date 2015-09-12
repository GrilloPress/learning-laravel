<?php

// Routes relating to dice rolling game here
//
//
//
//

Route::get('roll', function() {
  return rand(1, 6);
});

Route::get('roll/{id}', function($id) {
  return "{$id} rolled: " . rand(1, 6);
});

Route::get('dice/{player_one}/{player_two}', function($player_one, $player_two) {
  
  $first_roll = rand(1, 6);
  $second_roll = rand(1, 6);
    
  echo "{$player_one} rolled: " . $first_roll . "<br />" . "{$player_two} rolled: " . $second_roll . "<br />";
  
  if ($first_roll == $second_roll){
    
    echo "DRAW!";
    
  } elseif ($first_roll > $second_roll) {
    
    echo $player_one . " Wins!";
    
  } else {
    
    echo $player_two . " Wins!";
    
  }
  
});

// Routes relating to external tutorial underneath here
//
//
//
//

Route::get('/', function() {
  return 'All cats';
});

Route::get('stray', function() {
  return 'meow MEOW MEOOOOOOOOOOOOOOOOW';
});

Route::get('cats/{id}', function($id) {
  return sprintf('Cat #%s', $id);
});

Route::get('cats/{id}/{age}', function($id, $age) {
  return $id . " " . $age; 
});