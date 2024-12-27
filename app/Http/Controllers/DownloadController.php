<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download_resources($filename){
        $filePath = 'files/'.$filename; // Path relative to storage/app or public

    // If using public storage
    if (file_exists(public_path($filePath))) {
        return response()->download(public_path($filePath));
    }
    if (!file_exists($filePath)) {
        return abort(404, 'File not found.');
    }
    return redirect()->back()->with('error', 'File not found.');
    }
}
