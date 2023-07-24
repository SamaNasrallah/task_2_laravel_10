@extends('layouts.main')
@section('MainContent')
<br>
<div class="row">
    <div class="col-12">
        <form action="{{ route('folder.update',$folder->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')    

    <div class="form-group">
        <label for ="name">Name Folder </label>
        <input type="text" name="name" id="name" class="form-control"value="{{$folder->name}}">
    </div>

    <button type="submit" class="btn btn-primary" id="btn-update">Save</button>
   



    </form>
    </div>
    </div>
    @stop