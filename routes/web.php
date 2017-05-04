<?php
Route::get('home', 'HomeController@index');
Route::get('updata', function () {
	return view('up');
});
Route::post('data/return','HomeController@updata');
Route::get('/', function () {
    return view('index');
});

Route::get('/img/{filename}', function ($filename)
{
	$path = storage_path('img') . '/' . $filename;

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file);
	$response->header("Content-Type", $type);

	return $response;
});

Route::auth();

////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('index.axd', 'HomeController@index');
Route::get('index.asx', 'HomeController@index');
Route::get('index.asmx', 'HomeController@index');
Route::get('index.ashx', 'HomeController@index');
Route::get('index.aspx', 'HomeController@index');
Route::get('index.asp', 'HomeController@index');
Route::get('index.css', 'HomeController@index');
Route::get('index.cfm', 'HomeController@index');
Route::get('index.yaws', 'HomeController@index');
Route::get('index.swf', 'HomeController@index');
Route::get('index.html', 'HomeController@index');
Route::get('index.htm', 'HomeController@index');
Route::get('index.xhtml', 'HomeController@index');
Route::get('index.jhtml', 'HomeController@index');
Route::get('index.jsp', 'HomeController@index');
Route::get('index.jspx', 'HomeController@index');
Route::get('index.wss', 'HomeController@index');
Route::get('index.do', 'HomeController@index');
Route::get('index.action', 'HomeController@index');
Route::get('index.js', 'HomeController@index');
Route::get('index.pl', 'HomeController@index');
Route::get('index.php', 'HomeController@index');
Route::get('index.php4', 'HomeController@index');
Route::get('index.php3', 'HomeController@index');
Route::get('index.phtml', 'HomeController@index');
Route::get('index.py', 'HomeController@index');
Route::get('index.rb', 'HomeController@index');
Route::get('index.rhtml', 'HomeController@index');
Route::get('index.shtml', 'HomeController@index');
Route::get('index.xml', 'HomeController@index');
Route::get('index.rss', 'HomeController@index');
Route::get('index.svg', 'HomeController@index');
Route::get('index.cgi', 'HomeController@index');
Route::get('index.dll', 'HomeController@index');
////////////////////////////////////////////////////////////////////////////////////////////////////