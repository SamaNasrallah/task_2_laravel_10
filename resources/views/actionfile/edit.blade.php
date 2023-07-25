@extends('layouts.main')
@section('MainContent')
<br>
<div class="row">
    <div class="col-12">
        <form action="{{ route('file.update',$file->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')    
           <div class="form-group">
              <label for ="name">File Name</label>
              <input type="text" name="name" id="name" class="form-control" value="{{$file->name}}">
           </div>

            <div class="form-group">
                <label for ="name">File :</label>
                <input type="file" name="file" id="file" class="form-control" value="{{$file->file}}"  multiple>
            </div>
            <div class="form-group">
                <label for="file_tags"> File_Tags</label>
            
                <input list="languages" name="file_tags[]" value="{{$file->file_tags}}"  class="form-control" multiple>
                <datalist id="languages">
                <option value="JavaScript">JavaScript</option>
                    <option value="Python">Python</option>
                    <option value="Java">Java</option>
                    <option value="C/C++">C/C++</option>
                    <option value="PHP">PHP</option>
                    <option value="Swift">Swift</option>
                    <option value="Ruby">Ruby</option>
                    <option value="Objective-C">Objective-C</option>
                    <option value="SQL">SQL</option>
                </datalist>
            
            </div>
            
            <button type="submit" class="btn btn-primary" id="btn-update">Save</button>
            </form>
            <script src="{{ asset('js/multi-input.js') }}"></script>


            </div>
            </div>
            
            @stop
