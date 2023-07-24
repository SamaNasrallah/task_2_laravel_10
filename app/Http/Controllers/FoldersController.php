<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FoldersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $folders = Folder::all();
        return view('action.folder',compact('folders'));
              
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('action.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $name=$request['name'];
        $is_active=$request->has('is_active');
         
        $result= Folder::create([
            "name"        =>$name,
            "is_active"   =>$is_active,
        ]
        );

        return redirect()->route('folder.index') ;
       }

    /**
     * Display the specified resource.
     */
    public function show(Folder $folder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Folder $folder)
    {
        return view('action.edit',compact('folder'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Folder $folder)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $input = $request->all();
        $folder->update($input);
      
        return redirect()->route('folder.index')
        ->with('success','Folder updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Folder $folder)
    {
        $files = $folder->files;

        if ($files->count() > 0) {
         $message = 'Are you sure you want to delete this folder? It contains ' . $files->count() . ' files.';
         $folder->delete();
         return redirect()->route('folder.index')
                ->with('warning', $message);

        } else {
            $folder->delete();
            return redirect()->route('folder.index')
                ->with('success','Folder deleted successfully');
        }
    }

    public function toggleActivation(Folder $folder)
    {
        $folder->update([
            'is_active' => !$folder->is_active, 
        ]);
    
        return redirect()->back(); 
    }
}