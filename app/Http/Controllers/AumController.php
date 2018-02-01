<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\aum;

class AumController extends Controller
{
    public function index(){
        $message = "ฮ่าาาาาาาาาาาาาาาาาาาาาาาาาาาาาา";
        $aums = aum::all();
       
        return view('aum.index', compact('aums'));
    }
     public function store()
     {

    // {
    //    $aum =new aum(request(
    //        ['name','lname']
    //   ));
    // $aum->save();

    Aum::create(request( 
        ['name','lname']
    ));
      return back();
    }
    public function view(aum $aum)
    {
        return view('aum.view',compact('aum'));
      //  dd($aum);
    }
    public function update($aum)
    {
    //   $aum=aum::find($aum);
    //   $aum-> request(name);
    //   $aum-> request(lname);
    //   $aum-> save();

    aum::find($aum)->update(request( ['name','lname']));
    return redirect('/aumkhrit');
    }
    // public function destroy(aum $aum)
    // {
    //     $aum->delete();
    //     return back();
    // }


    public function destroy($aum)
    {
        aum::destroy($aum);
        return back();
    }
}
