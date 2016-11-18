<?php
/**
 * Created by PhpStorm.
 * User: xwk
 * Date: 2016/11/6
 * Time: 11:27
 */

Route::get('/como/cms', 'Como\Cms\CmsController@main');
Route::get('/como/cms/edit', 'Como\Cms\CmsController@edit');
