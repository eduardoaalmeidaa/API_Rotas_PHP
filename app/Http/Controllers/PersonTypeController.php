<?php
namespace App\Http\Controllers;
use App\Models\PersonType;


use Illuminate\Http\Request;
 
class PersonTypeController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return PersonType::all();
    }
}