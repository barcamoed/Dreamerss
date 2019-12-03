<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Company;
use App\Message;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Namshi\JOSE\JWT;
use Illuminate\Support\Facades\View;
use Pusher\Laravel\Facades\Pusher;

class AdminController extends Controller
{
    public function  adminLogin(Request $request){
        $user=$request->all();
        if(Auth::attempt(['email'=>$user['email'],'password'=>$user['password']]) )
        {
            if(Auth::user()->role=='admin')
            {
                return redirect('/artistsTable');
            }
            else
                {
                Auth::logout();
                return redirect('/signin');
                }
        }
        else

            return redirect('/signin')->with('error','Invalid credentials');

    }

    public function adminLogout()
    {
        Auth::logout();
        return redirect('/signin');
    }

    public function showAdminProfileInfo()
    {
        return View::make("admin/adminProfile");
    }
    public function changeAdminInfo(Request $request)
    {

        $data = $request->all();

            $user = Auth::user();
        if($data['name'])
        {
            $user->name = $data['name'];
        }
        if($data['email'])
        {
            $user->email = $data['email'];
        }
        $user->save();
        $admin = Admin::where('user_id',Auth::user()->id)->get();
        if($data['name'])
        {
        $admin[0]->name = $data['name'];
        }
        if($data['email'])
        {
        $admin[0]->email = $data['email'];
        }

        $ProdPicPath = '';
        if($request->file('newAdminPic')!= null)
        {
            if($request->file('newAdminPic')->isValid())
            {
            $adminPicPath =  AdminController::uploadMedia($request->file('newAdminPic'),"adImagesFolder");
            $admin[0]->profilePicUrl = $adminPicPath;
            }
        }
        $admin[0]->save();
        return redirect('/artistsTable');
    }

    public static function uploadMedia($file,$folder)
    {
        $file_name = substr(md5(rand()), 0, 100) . "." . $file->getClientOriginalExtension();
        $PATH = public_path('/'.$folder.'/');
        $file->move($PATH, $file_name);
        return $file_name;
    }

    public function showMessengerPage()
    {
        $message = Message::where('receiver_id',48)->get()->pluck('sender_id');
        $uniqueIds = $message->unique()->values()->all();

        $userName=[];
        $i=0;
        foreach($uniqueIds as $uniqueMessageId)
        {
//          DB::setFetchMode(\PDO::FETCH_ASSOC);
            $userName[$i] = DB::table('companies')->where('user_id',$uniqueMessageId)->get();
            $i++;
//          DB::setFetchMode(\PDO:: FETCH_ASSOC);
        }

//        return $userName;
        return View::make("admin/messenger")->with('userName',$userName);
    }

    public function getMessages($id)
    {
        $user = Company::where('id',$id)->with('user')->get();
//        return $user[0]->user->id;
        $userChat = Message::where('sender_id',$user[0]->user->id)
            ->orWhere('receiver_id',$user[0]->user->id)
            ->orderBy('created_at','asc')
            ->get();

        return response()->json(compact('userChat'),201);
    }

    public function sendMessage($id,Request $request)
    {
        $data = $request->all();
//        print_r($data);

        $user_id = Company::where('id',$id)->get()->pluck('user_id');
        $message = new Message();
//return $request->input( 'message' );
        $message->message = $data['message'];
        $message->sender_id = 48;
        $message->receiver_id = $user_id[0];
        $message->save();

        Pusher::trigger('chat_chanel','chat_saved',['message'=> $message]);
        return response()->json(compact('message'),201);
    }

}
