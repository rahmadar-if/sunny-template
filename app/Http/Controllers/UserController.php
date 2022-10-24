<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index(){
        $user = User::latest()->get();
        return view('2_account', compact('user'));
    }

    public function create(Request $request, User $newUser) 
    {
        $data = $request->all(); 
      //  $file = $request->file("faq-attachment");
        
        $newUser->name = $data["name"];
        $newUser->email = $data["email"];
        $newUser->password = Hash::make($data["password"]);
        Alert::success('Success', "Account Berhasil Ditambah")->autoClose(3000);
        $newUser->save();
       

        // if ($file == null)
        // {   
        //     
        //     
        // }else{
        //     $path = "faqs/";
        //     $file_name = $file->getClientOriginalName();
        //     // $file_id =  date('Ymd_His_').$file_name;
        //     $file_id =  date('His_').$file_name;
        //     // dd($file_id);
        //     $file->move(public_path($path), $file_id);

        //     $newFaq->faq_attachment = $file_id;
        //     $newFaq->save();
        // }
        return redirect()->back();
    }
    public function update(Request $request, User $newUser) 
    {
        // dd($idFaq);
        
        $data = $request->all(); 
      //  $file = $request->file("faq-attachment");
        
        // dd($data);
        
        $newUser = User::find($data["id"]);
        $newUser->name = $data["name"];
        $newUser->email = $data["email"];
        $newUser->password = Hash::make($data["password"]);
        Alert::success('Success', "Data Account Berhasil di Edit")->autoClose(3000);
        $newUser->save();

        // if ($file == null)
        // {   
        //     Alert::success('Success', "Tambah Knowledge Base Berhasil")->autoClose(3000);
        //     $newFaq->save();
        // }else{
        //     $path = "faqs/";
        //     $file_name = $file->getClientOriginalName();
        //     $file_id =  date('His_').$file_name;
        //     // dd($file_id);
        //     $file->move(public_path($path), $file_id);

        //     $newFaq->faq_attachment = $file_id;
        //     $newFaq->save();
        // }

        return redirect()->back();

    }

    public function delete($id)
    {
        $id = User::find($id);
        $name = $id->name;
        
        $id->delete();
        Alert::success('Account', $name.", Berhasil Dihapus")->hideCloseButton();

        return redirect()->back();
    }
}
