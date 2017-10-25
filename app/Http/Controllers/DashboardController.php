<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/10/2017
 * Time: 01:57 ص
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;
use App\User;

class DashboardController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users=User::latest()->paginate(10);
        return view('dashboard.pages.index',compact('users'));
    }

    public function getContact(){
        $contacts = Contact::latest()->paginate(5);
        return view('dashboard.pages.contacts',compact('contacts'));
    }


    public function getSingleContact(Contact $contact){
        return view('dashboard.pages.showContact')->withContact($contact);

    }



}