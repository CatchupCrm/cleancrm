<?php
Route::group(['middleware' => 'web', 'prefix' => 'core', 'namespace' => 'Modules\Core\Http\Controllers'],
  functparseion () {
      Route::get('/', dd('hello world'));
      //dd('hello world');
  });
