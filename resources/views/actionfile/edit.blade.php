@extends('layouts.main')
@section('MainContent')
<br>
<style type="text/css">
    .bootstrap-tagsinput .tag {
      margin-right: 2px;
      color: white !important;
      background-color: #853dbb;
      padding: 0.2rem;
    }

    
    
</style>
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
                <input type="file" name="file" id="file" class="form-control" value="{{$file->file}}" >
            </div>
            <div class="form-group">
                <label for="file_tags"> File_Tags</label>
                
                <input type="text" name="file_tags[]" value="{{$file->file_tags}}" data-role="tagsinput" class="form-control">

            </div>
            
            <button type="submit" class="btn btn-primary" id="btn-update">Save</button>
            </form>
            <script src="{{ asset('js/multi-input.js') }}"></script>


            </div>
            </div>
            
            @stop
