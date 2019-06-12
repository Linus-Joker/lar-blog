<?php

namespace  App\Http\Controllers\Admin;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JD\Cloudder\Facades\Cloudder;

use App\Http\Model\blogclient;


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

	public function logins(Request $request)
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
	public function testfont(Request $request)
	{
		// $times = date('Y-m-d G:i:s');
		// echo $times;

		$picdata = $request->file('pic');
		$realPath = $picdata->getRealPath();
		$entension = $picdata->getClientOriginalExtension();
		$filename = date('YmdHi');

		// dd($realPath);

		Cloudder::upload($realPath, $filename);

		$publicId = Cloudder::getPublicId();
		$result = Cloudder::getResult();
		$version = $result['version'];

		dd($result);
		// dd($version);

		// return redirect('testform');

		// dd(env('CLOUDINARY_API_KEY'));

		$pathname = 'https://res.cloudinary.com/linus-li/image/upload/' . 'v' . $version . '/' . $filename;
		echo $pathname;
	}
}
