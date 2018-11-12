<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/faq', function () {
    return view('faq');
});

/* Book your flght page*/

Route::get('/bookflight', 'FlightController@index');
Route::post('store', 'FlightController@store');

/* End of book your flight page */


/* Launch sites page*/

Route::get('/launchsites', function () {
    return view('launch_sites');
});

/* End of launch sites page */

Route::get('/todo', function () {

    $todosNoDatubazes = \App\Todo::orderBy('updated_at', 'asc')->get();

    return view('todo', [
        'todos' => $todosNoDatubazes,
    ]);
   

});

// http://laravel.test/addnew
Route::any('/addnew', function () {

$jaunsTodo = new \App\Todo;

  $jaunsTodo->title = \Request('note');   
  $jaunsTodo->body = 'some text';  
  $jaunsTodo->is_done = false;   

  $jaunsTodo->save();   

 return redirect('/todo');

});


Route::get('/delete/{id}', function ($id) {

    $todo = \App\Todo::find($id);
    if ($todo != null) {
    $todo->delete();
    }

    return redirect('/todo');

});

Route::get('/update/{id}', function ($id) {

    $todo = \App\Todo::find($id);
    if ($todo->is_done == true) {
        $todo->is_done = false;
    } else {
        $todo->is_done = true;
    }
    $todo->save();   

    return redirect('/todo');

});



