<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\ChannelCategory;

class ChannelCategoryController extends Controller
{
    public function create()
    {
        return view('backend.pages.channel_category');
    }

    public function index()
    {
        $categories = ChannelCategory::orderBy('id','desc')->get();
        return view('backend.pages.category', compact('categories'));
    }

    public function store(Request $request)
    {
       $store = ChannelCategory::insert([
           'category_name'=>$request->category_name,
       ]);
       return redirect()->back()->with('success', 'Successfully Category Inserted...!');
    }
}
