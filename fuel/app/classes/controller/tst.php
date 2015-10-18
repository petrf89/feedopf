<?php
/**
 * Controller class
 */



class Controller_Tst extends Controller
{
   // public $template = 'test_template';

    //public $auto_render = true;

    public function action_index()
    {
        echo "Hello World!";
        echo '"', __NAMESPACE__, '"';
       // return Response::forge(View::forge('cart/index'));
    }

    /*
    public function action_index()
    {
        $model['data']= 'hello world';
        //echo Model_Test::hello_world();
        $this->template->title = "test";
        $this->template->content= \View::factory('test/index');
    }
    */

}