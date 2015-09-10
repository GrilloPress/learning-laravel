<?php

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