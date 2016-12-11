<?php

use App\storez;
use Illuminate\Http\Request;
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
    return view('home');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/insert_laptop', function () {
    return view('insert_laptop');
});
Route::get('/insert_komponen', function () {
    return view('insert_komponen');
});
Route::get('/insert_aksesoris', function () {
    return view('insert_aksesoris');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/login',function(Request $request){
	try{
		//$users = DB::select('select username from member where username = ? and password = ?', [$request['username'],$request['pass']])->first();
		$users = DB::table('member')->where('username',$request['username'])->where('password',$request['pass'])->value('username');
		session(['members' => $request['username']]);
		return Redirect::back();
	}
	catch(\Illuminate\Database\QueryException $ex){ 
 	 	return Redirect::back()->withInput()->withErrors("wrong username or password");
 	}
});
Route::post('/log_in',function(Request $request){
		session(['admin' => $request['username']]);
		session(['members' => $request['username']]);
		return view('home');
});
Route::get('/logout', function () {
  	session()->flush();
    return Redirect::back();
});

//
Route::post('/reg_submit',function(Request $request){
	$validator = Validator::make($request->all(),['password' => 'same:password2']);
	if($validator->fails()){
		return redirect('register')->withInput()->withErrors("password and the retype password must same");
	}
	$validator = Validator::make($request->all(),['pin' => 'same:pin2']);
	if($validator->fails()){
		return redirect('register')->withInput()->withErrors("pin and the retype pin must same");
	}
	$validator = Validator::make($request->all(),['pin' => 'required|max:6|min:6|numeric']);
	if($validator->fails()){
		return redirect('register')->withInput()->withErrors($validator);
	}
	try{
	DB::insert("
		insert into member (username,password,pin,created_at,updated_at) values (?,?,?,?,?)",[$request['username'],$request['password'],$request['pin'],date('Y-m-d H:i:s'),date('Y-m-d H:i:s')]);
	echo "<script>alert('register success');</script>";
	return view('home');
	} catch(\Illuminate\Database\QueryException $ex){ 
 	 return redirect('register')->withInput()->withErrors("someone had picked that username");
 	}
	
});

Route::post('/task',function(Request $request){
	$validator = Validator::make($request->all(),[ 'names' => 'required|max:255|min:6' ]);
	
	if($validator->fails()){
		return redirect('/')->withInput()->withErrors($validator);
	}

	$task = new Task;
	$task->name = $request->name;
	$task->save();

 	return Redirect::back();
});
Route::get('/aksesoris', function () {
	return view('aksesoris');
});
Route::get('/aksesoris/{name}',function($name){
	//$users = DB::select('select username from member where username = ? and password = ?', [$request['username'],$request['pass']])->first();
	return view('aksesoriss',['name'=> $name]);
});
Route::get('/komponen', function () {
	return view('komponen');
});
Route::get('/komponen/{name}',function($name){
	//$users = DB::select('select username from member where username = ? and password = ?', [$request['username'],$request['pass']])->first();
	return view('komponent',['name'=> $name]);
});

Route::post('/search',function(Request $request){
	//$users = DB::select('select username from member where username = ? and password = ?', [$request['username'],$request['pass']])->first();
	session(['search' => $request['search']]);
	echo "<script>alert(session('search'));</script>";
	return view('search');
});

Route::get('/laptop', function () {
	return view('laptop');
});
Route::post('/ins_kom',function(Request $request){
	$validator = Validator::make($request->all(),['price' => 'required|numeric']);
	if($validator->fails()){
		return redirect('insert_komponen')->withInput()->withErrors($validator);
	}
	try{
	DB::insert(" insert into komponen (nama,type,brand,harga,deskripsi,inserter,created_at,updated_at) values (?,?,?,?,?,?,?,?)",[$request['name'],$request['type'],$request['brand'],$request['price'],$request['desc'],session('members'),date('Y-m-d H:i:s'),date('Y-m-d H:i:s')]);
	echo "<script>alert('insert success');</script>";
	return view('komponen');
	} catch(\Illuminate\Database\QueryException $ex){ 
 	 return redirect('insert_komponen')->withInput()->withErrors("there is an error");
 	}
});
Route::post('/ins_acc',function(Request $request){
	$validator = Validator::make($request->all(),['price' => 'required|numeric']);
	if($validator->fails()){
		return redirect('insert_aksesoris')->withInput()->withErrors($validator);
	}
	try{
	DB::insert(" insert into aksesoris (nama,type,brand,harga,deskripsi,inserter,created_at,updated_at) values (?,?,?,?,?,?,?,?)",[$request['name'],$request['type'],$request['brand'],$request['price'],$request['desc'],session('members'),date('Y-m-d H:i:s'),date('Y-m-d H:i:s')]);
	echo "<script>alert('insert success');</script>";
	return view('aksesoris');
	} catch(\Illuminate\Database\QueryException $ex){ 
 	 return redirect('insert_aksesoris')->withInput()->withErrors("there is an error ");
 	}
});
Route::post('/ins_laptop',function(Request $request){
	$validator = Validator::make($request->all(),['price' => 'required|numeric']);
	if($validator->fails()){
		return redirect('insert_laptop')->withInput()->withErrors($validator);
	}
	try{
	DB::insert(" insert into notebook (nama,prosesor,os,storage,ram,graphic,koneksi,kamera,display,warna,harga,brand,inserter,created_at,updated_at) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",[$request['model'],$request['prosesor'],$request['os'],$request['storage'],$request['ram'],$request['graphic'],$request['koneksi'],$request['kamera'],$request['display'],$request['warna'],$request['price'],$request['brand'],session('members'),date('Y-m-d H:i:s'),date('Y-m-d H:i:s')]);
	echo "<script>alert('insert success');</script>";
	return view('laptop');
	} catch(\Illuminate\Database\QueryException $ex){ 
 	 return redirect('insert_laptop')->withInput()->withErrors("there is an error ");
 	}
});
Route::post('/upd_laptop',function(Request $request){
	$validator = Validator::make($request->all(),['price' => 'required|numeric']);
	if($validator->fails()){
		return Redirect::back()->withInput()->withErrors($validator);
	}
	try{/*
	$gblk = DB::update('update notebook set nama = '.$request['model']. ', prosesor = '.$request['prosesor'].', os = '.$request['os'].', storage = '.$request['storage'].', ram = '.$request['ram'].', graphic = '.$request['graphic'].', koneksi = '.$request['koneksi'].', kamera = '.$request['kamera'].', display = '.$request['display'].', warna = '.$request['warna'].', harga = '.$request['price'].', brand = '.$request['brand'].', updated_at = '.date('Y-m-d H:i:s').' where laptop_id = ?',[$request['ids']]);*/
	$gblk = DB::update('update notebook set nama = ?, prosesor = ?, os = ?, storage = ?, ram = ?, graphic = ?, koneksi = ?, kamera = ?, display = ?, warna = ?, harga = ?, brand = ?, updated_at = ? where laptop_id = ?',[$request['model'],$request['prosesor'],$request['os'],$request['storage'],$request['ram'],$request['graphic'],$request['koneksi'],$request['kamera'],$request['display'],$request['warna'],$request['price'],$request['brand'],date('Y-m-d H:i:s'),$request['ids']]);
	echo "<script>alert('update success');</script>";
	return view('laptop');
	} catch(\Illuminate\Database\QueryException $ex){ 
 	 return Redirect::back()->withInput()->withErrors("there is an error");
 	}
});
Route::get('/update_laptop/{name}',function($name){
	//$users = DB::select('select username from member where username = ? and password = ?', [$request['username'],$request['pass']])->first();
	return view('update_laptop',['name'=> $name]);
});

Route::post('/upd_acc',function(Request $request){
	$validator = Validator::make($request->all(),['price' => 'required|numeric']);
	if($validator->fails()){
		return Redirect::back()->withInput()->withErrors($validator);
	}
	try{/*
	$gblk = DB::update('update notebook set nama = '.$request['model']. ', prosesor = '.$request['prosesor'].', os = '.$request['os'].', storage = '.$request['storage'].', ram = '.$request['ram'].', graphic = '.$request['graphic'].', koneksi = '.$request['koneksi'].', kamera = '.$request['kamera'].', display = '.$request['display'].', warna = '.$request['warna'].', harga = '.$request['price'].', brand = '.$request['brand'].', updated_at = '.date('Y-m-d H:i:s').' where laptop_id = ?',[$request['ids']]);*/
	$gblk = DB::update('update aksesoris set nama = ?, type = ?, brand = ?, harga = ?, deskripsi = ?, updated_at = ? where acc_id = ?',[$request['name'],$request['type'],$request['brand'],$request['price'],$request['desc'],date('Y-m-d H:i:s'),$request['ids']]);
	echo "<script>alert('update success');</script>";
	return view('laptop');
	} catch(\Illuminate\Database\QueryException $ex){ 
 	 return Redirect::back()->withInput()->withErrors("there is an error");
 	}
});
Route::get('/update_aksesoris/{name}',function($name){
	//$users = DB::select('select username from member where username = ? and password = ?', [$request['username'],$request['pass']])->first();
	return view('update_aksesoris',['name'=> $name]);
});

Route::post('/upd_kmp',function(Request $request){
	$validator = Validator::make($request->all(),['price' => 'required|numeric']);
	if($validator->fails()){
		return Redirect::back()->withInput()->withErrors($validator);
	}
	try{/*
	$gblk = DB::update('update notebook set nama = '.$request['model']. ', prosesor = '.$request['prosesor'].', os = '.$request['os'].', storage = '.$request['storage'].', ram = '.$request['ram'].', graphic = '.$request['graphic'].', koneksi = '.$request['koneksi'].', kamera = '.$request['kamera'].', display = '.$request['display'].', warna = '.$request['warna'].', harga = '.$request['price'].', brand = '.$request['brand'].', updated_at = '.date('Y-m-d H:i:s').' where laptop_id = ?',[$request['ids']]);*/
	$gblk = DB::update('update komponen set nama = ?, type = ?, brand = ?, harga = ?, deskripsi = ?, updated_at = ? where kom_id = ?',[$request['name'],$request['type'],$request['brand'],$request['price'],$request['desc'],date('Y-m-d H:i:s'),$request['ids']]);
	echo "<script>alert('update success');</script>";
	return view('laptop');
	} catch(\Illuminate\Database\QueryException $ex){ 
 	 return Redirect::back()->withInput()->withErrors("there is an error");
 	}
});
Route::get('/update_komponen/{name}',function($name){
	//$users = DB::select('select username from member where username = ? and password = ?', [$request['username'],$request['pass']])->first();
	return view('update_komponen',['name'=> $name]);
});



Route::get('/delete_laptop/{name}',function($name){
	$deleted = DB::delete('delete from notebook where laptop_id = ?',[$name]);
});
Route::get('/delete_komponen/{name}',function($name){
	$deleted = DB::delete('delete from komponen where laptop_id = ?',[$name]);
});
Route::get('/delete_aksesoris/{name}',function($name){
	$deleted = DB::delete('delete from aksesoris where laptop_id = ?',[$name]);
});

