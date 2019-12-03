<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    //

    public static function uploadMedia($file,$folder)
    {
        $file_name = substr(md5(rand()), 0, 100) . "." . $file->getClientOriginalExtension();

        $PATH = public_path('/'.$folder.'/');

        $file->move($PATH, $file_name);

        return $file_name;
    }

public function categoriesList()
{
     $categories= Category::all();
    return response()->json(compact('categories'));
}

    public function apiGetCategory($id)
    {
        $category = Category::find($id);
        return response()->json(compact('category'));
    }

    public function getCategories()
    {
        $categories = Category::all();
        return View::make("admin/categories")->with('categories',$categories);
    }

    public function addCategoryView(Request $request)
    {
        return View::make("admin/addCategory");

    }
    public function addCategory(Request $request)
    {
        $data = $request->all();
        $category = new Category();
        $category->name = $data['name'];

        if($request->hasFile('file'))
        {
            if($request->file('file')->isValid())
            {
                $filePath =  CategoryController::uploadMedia($request->file('file'),"adImagesFolder");
            }
            $category->img_url = $filePath;

        }

        $category->save();
        return redirect('/categories');
    }

}
