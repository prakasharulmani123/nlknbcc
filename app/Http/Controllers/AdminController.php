<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function banners(Request $request)
    {
        if($request->isMethod('post')){
            if($banners = $request->banners){
                foreach ($banners as $banner => $image) {
                    if($banner){
                        Banner::updateOrCreate(
                            [
                                'name' => $banner
                            ],
                            [
                                'image' => Storage::disk('public')->putFile('banners', $image)
                            ]);
                    }
                }
            }

            return redirect()->back();
        }
        return view('admin.banners');
    }
}
