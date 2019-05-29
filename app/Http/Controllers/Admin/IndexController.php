<?php

namespace  App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function home()
	{
		return view('AdminLayouts.home');
	}

	public function registed()
	{
		return view('AdminLayouts.registed');
	}

	public function quit()
	{
		// session(['admin' => null]);
		session()->forget('admin');
		return redirect('home');
	}

	public function login(Request $request)
	{
		$all = $request->all();
		$username = $all['user_name'];
		if ($username !== 'apple') {
			return redirect('home');
		} else {
			session(['admin' => $username]);
			return redirect('index');
		}

		// session(['admin' => 3]);
		// return view('HomePages.index');
	}
	public function index()
	{
		return view('AdminHomePages.index');

		// session(['admin' => 3]);
		// return view('HomePages.index');
	}

	public function info()
	{
		return view('AdminHomePages.common.info');
	}

	//圖片上傳
	public function upload(Request $request)
	{
		$all = $request->all();
		dd($all);
	}

	//測試前端套件
	public function testfont()
	{
		return view('testfont');
	}
}
