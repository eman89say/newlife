<?php

namespace App\Http\Controllers;

use App\Advertizement;
use App\Http\Requests\AdvRequest;
use Illuminate\Http\Request;
use App\Helper\Helper;
use Illuminate\Support\Facades\Session;



class AdvertizementController extends Controller
{

    public function __construct(Helper $helper){
        $this->middleware('auth');
        $this->helperObj = $helper;
    }
    public function index(){
        $advs= Advertizement::latest()->paginate(5);
        return view('dashboard.pages.adv.index',compact('advs'));
    }

    public function store(AdvRequest $request){
        $fileNameToStore= $this->helperObj->storeImage($request,'adv_image' ,'advImages');

        $fields = $request->all();

        $choosed= ($request->choosed)?true:false;
        $fields['choosed']= $choosed;

        $fields['adv_image']  = $fileNameToStore;

        $adv = Advertizement::create($fields);


        Session::flash('success','The advertizement was successfully saved');

        return redirect()->back();

    }

    public function choose($adv_id){
        $adv=Advertizement::find($adv_id);

        if($adv->choosed == '1') {
            $adv->update(['choosed'=>'0']);
            Session::flash('success', 'Advertizement unselected');
        }
        else{
            $adv->update(['choosed'=>'1']);
            Session::flash('success', 'Article choosed');
        }


        return redirect()->back();
    }

    public function destroy($adv_id){
        $adv=Advertizement::find($adv_id);

        $this->helperObj->deleteImage($adv->adv_image,'advImages');

        $adv->delete();

        Session::flash('success','The advertizement was successfully deleted');

        return redirect()->back();

    }
}
