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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test',function () {
	/*
	$client = new \GuzzleHttp\Client();

	try{

		$response = $client->request('POST', 'http://mtazamo.epizy.com/api.php', [
				'form_params' => [
					'email' => 'dgiacobelli0@arizona.edu',
					'password' => '6hm9zwsvecmw',
				]
			]);
	}catch(Exception $e) {
		dd($e->getMessage());
	}

	return $res->getStatusCode();
	*/
	return view('test');
});
