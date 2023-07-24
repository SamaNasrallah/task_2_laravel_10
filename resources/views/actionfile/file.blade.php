@extends('layouts.main')
@section('MainContent')
<br>
<div class="center">
<h2>File Page</h2>
</div>
<div class="add-folder">
   <a href="{{ url('files/create/'.$folder_id) }}" style="text-decoration: none;">
      <h2><span class="plus">+</span></h2>
       <h4>Add </h4>
    </a>
 </div>



@foreach($files as $file)
   <div class="folder">
      <div>
         <i class="fas fa-file" style="font-size: 30px;"></i> 
     </div>
     <div class="folder-name">
  </div>
      <div class="folder-name" style="margin-right: 560px">
         <h4> {{$file->name}}</h4>
      </div>

      <div class="eye-icon">
         <a href="{{route('file.show',$file->id)}}">
            <i class="fas fa-eye"></i> 
         </a>
      </div>
      <div class="edit-icon">

      <a href="{{route('file.edit',$file->id)}}">
         <i class="fas fa-edit"></i> 
      </a>
   </div>
   <a href="{{ Storage::url($file->file_link) }}" download>
      <i class="fas fa-download"></i>
  </a>

   <div class="delete-icon">
      <form action="{{ route('file.destroy', $file->id) }}" method="post">
         @csrf
         @method('DELETE')
         <button type="submit" class="btn-delete" id="btn-delete">
            <i class="fas fa-trash-alt"></i> 
         </button>
      </form>
   </div>
   <script>
      $(document).ready(function() {
         $("#btn-delete").click(function() {
            alert("Delete successfully");
        });
      });
   </script>
   </div>

  
   <br>
@endforeach


@stop