<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\apiwat;

class ApiwatController extends Controller
{
    public function index(){
        $message = "เฮ้ เฮ้ !!! วู้";
        $books = apiwat::all();
        return view('apiwat56.index', compact('books'));
    }

    public function store(){
        // $title = request(['title','author', 'price','publish_date', 'publishing', 'id']);

        apiwat::create(request(['title','author', 'price','publish_date', 'website', 'id']));

        return back();
    }
    
    public function view(apiwat $apiwat){
        return view('apiwat56.view',compact('apiwat'));
    }
    public function update($id){
        $apiwat = apiwat::find($id)->update(request(
            ['title','author', 'price','publish_date', 'website', 'id']
        ));
        return redirect('/apiwat56');
    }

    // public function destroy(apiwat $id){
    //     $id->delete();
    //     return back();
    // } อันนี้กะได้

    public function destroy($id){
        apiwat::destroy($id);
        return back();
    }
}
