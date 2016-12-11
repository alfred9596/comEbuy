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
	$validator = Validator::make($request->all(),['pin' => 'required|max:6|min:6']);
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

//delete existing tasks
Route::delete('/task/{id}', function($id){
	Task::findOrFail($id)->delete();
    return redirect('/');
});

/*
DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
$affected = DB::update('update users set votes = 100 where name = ?', ['John']);
$deleted = DB::delete('delete from users');
$users = DB::select('select * from users where active = ?', [1]);

$input = Request::all();

DB::insert('
            insert into at (studentID, completedBy, timeStamp, contact, intervention, level, goal, access, recording, support, motivators, notes)
            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [ $input['studentID'], $input['completedBy'], $input['timeStamp'], $input['contact'], $input['intervention'], $input['level'], $input['goal'], $input['access'], $input['recording'], $input['support'], $input['motivators'], $input['notes'] ]);


Route::post('/task',function(Request $request){
	$validator = Validator::make($request->all(),[ 'name' => 'required|max:255' ]);
	
	if($validator->fails()){
		return redirect('/')->withInput()->withErrors($validator);
	}

	$task = new Task;
	$task->name = $request->name;
	$task->save();

	return redirect('/');
});

//delete existing tasks
Route::delete('/task/{id}', function($id){
	Task::findOrFail($id)->delete();
    return redirect('/');
});