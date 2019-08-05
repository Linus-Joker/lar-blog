<?php

namespace App\Http\Controllers\Admin;

use DB;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JD\Cloudder\Facades\Cloudder;

use App\Http\Model\blog;

class categoryController extends Controller
{
	// get:讀取category
	public function index()
	{
		$item = DB::table('blog')->paginate(7);
		// $item = DB::table('blog')
		// 	// ->OrderBY('id', 'desc')
		// 	->get();


		// $item = DB::table('blog')->get();
		// foreach ($item as $list) {
		// 	$id = $list->article_id;
		// 	echo $id;
		// }
		return view('AdminHomePages.common.category')->with('data', $item);
	}

	// get過來的 category/create  增加列表
	public function create()
	{
		return view('AdminHomePages.common.add');
	}

	// post過來的 category  增加列表提交
	public function store(Request $request)
	{
		$all = $request->all();
		// dd($all);
		$title = $all['title'];
		$content = $all['editor1'];
		// dd($content);
		$picdata = $request->file('pic');
		// dd($picdata);
		if ($picdata->isValid()) {
			$clientName = $picdata->getClientOriginalName();
			$realPath = $picdata->getRealPath();
			$entension = $picdata->getClientOriginalExtension();
			$filename = date('YmdHi');
			// $picdata->move(base_path() . '/public/images', $filename);
			// $pathname = 'images' . '/' . $filename;

			Cloudder::upload($realPath, $filename);
			$result = Cloudder::getResult();
			$version = $result['version'];

			$pathname = 'https://res.cloudinary.com/linus-li/image/upload/' . 'v' . $version . '/' . $filename;
		}

		//時間
		$create_time = date('Y-m-d');
		// dd($create_time);

		// //原本的插入沒問題
		// $all = $request->all();

		// echo $title . '<br>' . $content;

		// blog::insert(
		// 	[
		// 		'article_title' => $title,
		// 		'article_description' => $content,
		// 		'article_pic' => $pathname,
		// 		'created_at' => $create_time,
		// 	]
		// );

		$flight = new blog;

		$flight->article_title = $title;
		$flight->article_description = $content;
		$flight->article_pic = $pathname;
		$flight->created_at = $create_time;
		$flight->save();

		return redirect('category');
	}

	// get過來的 category/{category}/edit 
	//按下提交後先到這個頁面，做完修改put到updata做處理
	public function edit($id)
	{
		$field = DB::table('blog')->WHERE('article_id', $id)->first();

		return view('AdminHomePages.common.edit')->with('data', $field);
	}

	// put過來的 category/{category} 
	//接收edit 查詢完的ID 準備更新
	public function update(Request $request, $id)
	{
		$all = $request->all();
		$title = $all['title'];
		$content = $all['editor1'];
		$picdata = $request->file('pic');

		if ($picdata) {
			$realPath = $picdata->getRealPath();
			$entension = $picdata->getClientOriginalExtension();
			$filename = date('YmdHi');
			// $picdata->move(base_path() . '/public/images', $filename);
			// $pathname = 'images' . '/' . $filename;

			Cloudder::upload($realPath, $filename);
			$result = Cloudder::getResult();
			$version = $result['version'];
			$pathname = 'https://res.cloudinary.com/linus-li/image/upload/' . 'v' . $version . '/' . $filename;
		} else {
			$result = blog::WHERE('article_id', $id)->first();
			$pathname = $result->article_pic;
			// dd($pathname);
		}

		//時間
		$update_time = date('Y-m-d');
		// dd($create_time);

		DB::table('blog')->WHERE('article_id', $id)->update([
			'article_title' => $title,
			'article_description' => $content,
			'article_pic' => $pathname,
			'updated_at' => $update_time,
		]);

		return redirect('category');
	}

	// delete過來的 category/{category}
	// 用ajax傳遞過來的id 查詢資料刪除
	public function destroy($id)
	{
		$result = DB::table('blog')->WHERE('article_id', $id)->delete();

		if ($result) {
			$data = [
				'status' => 0,
				'msg' => '文章刪除成功!!',
			];
		} else {
			$data = [
				'status' => 1,
				'msg' => '文章刪除失敗，請稍後在試!!',
			];
		}
		return $data;
	}
}
