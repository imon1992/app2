<?php

class HelloController extends BaseController
{

    public function showIndex($name = '%default%')
    {
        return View::make('hello.index',array('name'=>$name));
        
    }

    public function showForm()
    {
        return View::make('hello.form');
    }

    public function postForm()
    {
//        return View::make('hello.post',array('name'=> Input::get('name')));
          return Redirect::to('blade');
    }

    public function showBlade()
    {
      return View::make('hello.blade',['list'=>[1,2,3,4,5],'item'=>'my test','ival'=>100]);
    }

}

