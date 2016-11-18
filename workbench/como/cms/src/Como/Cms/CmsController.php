<?php
/**
 * Created by PhpStorm.
 * User: xwk
 * Date: 2016/11/6
 * Time: 11:54
 */

namespace Como\Cms;



use Illuminate\Routing\Controller;

class CmsController extends Controller   {

	public function main() {
		return view('como\cms::main');
	}
	public function edit() {
		return view('como\cms::edit');
	}
}