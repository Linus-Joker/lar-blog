<?php

namespace  App\Http\Controllers\Blog;

use DB;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Model\blog;
use App\Http\Model\blogclient;

class blogController extends Controller
{
	public function blog()
	{
		//連線測試
		// $data = DB::table('blog')->get();

		$data = blog::orderBy('article_id', 'desc')->paginate(3);
		$items = blog::orderBy('article_id', 'desc')->take(5)->get();

		// dd($data);
		// dd($items);


		// return view('Blog.blog')->with('data', $data);
		return view('Blog.blog', compact('data', 'items'));
	}

	public function bloglogin()
	{
		return view('Blog.login');
	}

	public function bloglogintest(Request $request)
	{
		$all = $request->all();
		$username = $all['user_name'];
		if ($username !== 'apple') {
			return redirect('bloglogin');
		} else {
			session(['blog' => $username]);
			return redirect('blog');
		}
	}

	public function quit()
	{
		// session(['admin' => null]);
		// session()->forget('blog');
		session()->flush();
		return redirect('bloglogin');
	}

	public function blogregisted()
	{
		return view('Blog.registed');
	}

	public function blogregistedtest(Request $request)
	{
		$all = $request->except('_token');
		$user_name = $all['name'];
		$user_password = $all['password'];
		$user_phone = $all['phone'];
		$user_mail = $all['mail'];
		$user_gender = $all['gender'];

		$rules = [
			'name' => 'required',
			'password' => 'required | between:6,20 | alpha_num',
			'phone' => 'required | numeric | digits:10',
			'mail' => 'required | email',
		];
		$message = [
			'name.required' => '請填入帳號!!',
			'password.required' => '請輸入密碼!!',
			'password.between' => '密碼欄位必須在3-20位元之間!!',
			'password.alpha_num' => '密碼欄位只能數字加上字母!!',
			'password.confirmed' => '確認密碼不一致!!',
			'phone.required' => '請填入電話!!',
			'phone.numeric' => '請輸入正確電話號碼格式',
			'phone.digits' => '請輸入09開頭10位數電話號碼',
			'mail.required' => '請輸入信箱!!',

		];

		$validator = Validator::make($all, $rules, $message);
		if ($validator->passes()) {
			$db_name = blogclient::where('name', $user_name)->first();
			$db_phone = blogclient::where('phone', $user_phone)->first();
			$db_mail = blogclient::where('mail', $user_mail)->first();
			if ($db_name) {
				return back()->with('msg', 'name repeat!!');
			}
			if ($db_phone) {
				return back()->with('msg', 'phone repeat!!');
			}
			if ($db_mail) {
				return back()->with('msg', 'mail repeat!!');
			} else {
				// DB::table('blogclient')->insert($all);
				$blog_reg = new blogclient;
				$blog_reg->name = $user_name;
				$blog_reg->password = $user_password;
				$blog_reg->phone = $user_phone;
				$blog_reg->mail = $user_mail;
				$blog_reg->gender = $user_gender;
				$blog_reg->created_at = date('Y-m-d G:i:s');
				$blog_reg->save();
				return back()->with('msg', '註冊成功');
			}
		} else {
			return back()->withErrors($validator);
		}
		// return redirect('blog');
	}

	public function art($id)
	{
		// echo $id;
		$data = DB::table('blog')->WHERE('article_id', $id)->first();
		$items = blog::orderBy('article_id', 'desc')->take(5)->get();
		// dd($items);

		// return view('Blog.art')->with('data', $item);
		return view('Blog.art', compact('data', 'items'));
	}
}
