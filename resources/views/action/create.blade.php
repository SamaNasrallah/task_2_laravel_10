@extends('layouts.main')
@section('MainContent')
<br>
<div class="row">
    <div class="col-12">
        <form action="{{ route('folder.store') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="form-group">
        <label for ="name">Name Folder </label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="is_active"> Is_Active : </label>
        <input type="checkbox" name="is_active" id="is_active" >
    </div>
    <button type="submit" class="btn btn-primary" id="btn-primary">Save</button>
  
   
    </form>
    </div>
    </div>
    @stop