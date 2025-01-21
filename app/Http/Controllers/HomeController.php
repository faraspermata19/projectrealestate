<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Item;

use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $item = item::all();
                return view('dashboard', compact('item'));
            }
            else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }
    public function index ()
    {
        if(Auth::id())
        {
            return redirect('dashboard');
        }
        else
        {
        $item = item::all();
        return view('user.home', compact('item'));
        }
    }

    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->nameuser=$request->nameuser;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->realestateitem=$request->realestateitem;
        $data->status='In Progress';
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        }
        $data->save();

        return redirect()->back()->with('pesan','Appointment Request Berhasil. Kami akan segera menghubungi Anda :>');
    }
}
