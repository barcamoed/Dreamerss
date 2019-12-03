<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Company;
use Illuminate\Http\Request;
use App\Post;

class CompanyController extends Controller
{
    //
    public function apiGetCompanyPosts($id){
        $userPosts = Post::where('company_id','=',$id)->with('category')->with('competition')->with('company')->with('rating')->with('claps')->with('files')->get();
        return response()->json(compact( 'userPosts'));
    }


    public function showCompanies()
    {
        $companies = Company::all();
        return View::make("admin/companiesDataTable")->with('companies',$companies);
    }
}
