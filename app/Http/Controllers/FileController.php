<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadedFileModel;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files= UploadedFileModel::all();
        return view('pages.MindspaceCloud', compact('files'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['file'=>'required|file|max:80048']);
        $file = $request->file('file');
        $path = $file->store('uploads', 'public');
        UploadedFileModel::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);
        return redirect()->route('pages.MindspaceCloud')->with('success', 'File uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */

    public function download(string $id){
        $file = UploadedFileModel::findOrFail($id);

        $filePath = storage_path("app/public/{$file->path}");

        if(!file_exists($filePath)){
            abort(404,'File not found ');
        }
        return response()->download($filePath,$file->name);
    }

   
    public function destroy(string $id)
    {
        $file = UploadedFileModel::findOrFail($id);
        Storage::disk('public')->delete($file->path);
        $file->delete();
        return redirect()->route('pages.MindspaceCloud')->with('success', 'File deleted successfully.');
    }
}
