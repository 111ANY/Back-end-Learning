<?php
namespace app\index\controller;
use app\index\model\Message;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $list = Message::all('1,2');
		// $this->assign('list',$list);
       // return $list;
    }
    public function add()
    {
        return $this->fetch();
    }
    // public function addarticle()
    // {
    //     $message=new MessageModel();  
    //     $message->name  = $_POST['name'];
    //     $message->article= $_POST['content'];
    //     $message->save();
    //     return fetch('index');
    // }

}
