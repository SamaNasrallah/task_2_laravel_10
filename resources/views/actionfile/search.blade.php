@extends('layouts.main')
@section('MainContent')
<br>

@foreach($files as $index => $file)
<div class="folder2" style="margin-top: {{ $index === 0 ? '90px' : '0' }}">
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
         <a href="{{ Storage::url($file->file) }}" download>
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

@endsection