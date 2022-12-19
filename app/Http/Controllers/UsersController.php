<?php

namespace App\Http\Controllers;

use App\Oders;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
   public function getlist()
   {
   		$data = User::paginate(10);
    	return view('back-end.users.list',['data'=>$data]);
   }
   public function getedit($id)
   {
   		$data = User::where('id',$id)->first();
   		return view('back-end.users.edit',['data'=>$data]);

   }
   public function postedit($id,Request $rq)
   {
       $user= User::find($id);
       $user->name = $rq -> txtnameu;
       $user->email= $rq -> txtemailu;
       $user->phone= $rq -> txtphone;
       $user->address = $rq -> txtaddress;
       $user->save();
       return redirect('admin/khachhang');
   }
    public function getdel($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/khachhang')
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa người dùng:  '.$user['name'].' !']);
    }
}
