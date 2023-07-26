<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index(Request $request )
    {
        $folder_id = $request->route('folder_id');
        $files = File::where('folder_id', $folder_id)->get();
        return view('actionfile.file', compact( 'folder_id', 'files'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $folder_id = $request->route('folder_id');
        $files = File::where('folder_id', $folder_id)->get();
        return view('actionfile.create', compact('folder_id', 'files'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file_tags' => 'required|array',
        ]);
        
        $name = $request['name'];
        $file_tags = implode(', ' , $request['file_tags']); // عشان احول المصفوفة ل سلسلة نصية
     

        $folder_id = $request->route('folder_id'); 
        
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                
                $filePath = $file->store('public/files');
        
                $result = File::create([
                    "name" => $name,
                    "file" => $file->getClientOriginalName(),
                    "extension" => $file->getClientOriginalExtension(),
                    "file_link" => $filePath,
                    "folder_id" => $folder_id,
                    "file_tags" => $file_tags,
                ]);
            }
        }

        return redirect()->route('file.index', $folder_id);
    }



    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        if (File::exists($file)) {
            return view('actionfile.show', compact('file'));
        } else {
            return response('File Not Found', 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {    
        if (File::exists($file)) {
        return view('actionfile.edit',compact('file'));
        } else {
        return response('File Not Found', 404);
    }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        $request->validate([
            'name'=>'required',
            'file_tags'=>'required',
        ]);
        $input = $request->all();
        $file->update($input);
      
        return redirect()->route('file.index', ['folder_id' => $file->folder_id])
        ->with('success','File updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        if (File::exists($file)) {
            $file->delete();
            Storage::delete($file->file_link);
            return redirect()->back()
                ->with('success', 'File deleted successfully');
        } else {
            return response('File Not Found', 404);
        }
    }


    public function search(Request $request)
    {
        $search = $request->input('search');
        $folder_id = $request->route('folder_id');
    
        if ($search) {
            $files = File::where('name', 'like', '%' . $search . '%')
                ->orWhere('file_tags', 'like', '%' . $search . '%')
                ->orWhereHas('folder', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                })
                ->get();
        }
    
        return view('actionfile.file', compact('search', 'files', 'folder_id'));
    }

  
}
