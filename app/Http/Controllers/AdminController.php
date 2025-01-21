<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {

        return view('admin.add_item');
    }

    public function upload(Request $request)
    {
        $item=new item;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->image->move('itemimage',$imagename);
        $item->image=$imagename;

        $item->name=$request->realname;
        $item->typenumber=$request->typenumber;
        $item->housingtype=$request->housingtype;
        $item->location=$request->location;
        
        $item->save();
        return redirect()->back()->with('pesan','Item Berhasil Ditambahkan');
    }

    public function showitem()
    {
        $data = item::All();

        return view('admin.showitem', compact('data'));
    }

    public function updateitem($id)
    {
        $data = item::find($id);

        return view('admin.update_item',compact('data'));
    }

    public function deleteitem($id)
    {
        $data = item::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function edititem(Request $request, $id)
    {
        $item = item::find($id);

        $item->name=$request->realname;

        $item->typenumber=$request->typenumber;

        $item->housingtype=$request->housingtype;

        $item->location=$request->location;

        $image=$request->image;

        if($image)
        {

        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->image->move('itemimage',$imagename);
        $item->image=$imagename;

        }

        $item->save();
        return redirect()->back()->with('pesan','Item Berhasil DiUpdate');

    }

    public function showappointment()
    {
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
    }

    public function diterima($id)
    {
        $data=appointment::find($id);

        $data->status='approved';

        $data->save();
        return redirect()->back();
    }

    public function ditolak($id)
    {
        $data=appointment::find($id);

        $data->status='canceled';

        $data->save();
        return redirect()->back();
    }
}
