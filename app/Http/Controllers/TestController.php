<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use PDF;
use SnappyImage;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $path = Storage::putFile('avatars', $request->avatar);
        
        $file = Storage::get($path);
    
        $base64 = base64_encode($file);
    
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $imgUri = 'data:image/' . $type . ';base64,' . $base64;

        $html = view('canvas', [
            'imgUri' => $imgUri,
            'name' => $request->name,
        ]);
        $name = 'canvas.png';
        $img = App::make('snappy.image.wrapper');
        
        $img->loadHTML($html);
        $img->save(public_path('storage/') . $name, true);
        
        return view('complete');
    }
    
    public function displayForm()
    {
        return view('form');
    }
}
