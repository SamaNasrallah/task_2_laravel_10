
@extends('layouts.main')
@section('MainContent')

<br>
<div class="center">
<h2>Folder Page</h2>
</div>
<div class="add-folder">
    <a href="{{ URL('folders') }}" style="text-decoration: none;">
       <h2><span class="plus">+</span></h2>
       <h4>Add </h4>
    </a>
 </div>


 @php
 use App\Models\Folder;
        $folders = Folder::all();
@endphp
<br>


@foreach($folders as $folder)
   <div class="folder">
      <div>
         <i class="fas fa-folder" ></i> 
     </div>
      <div class="folder-name">
            <h4>{{ $folder->name }}</h4>
      </div>
      <div class="eye-icon">
         @if ($folder->is_active)
            <a href="{{ route('file.index', $folder->id) }}">
               <i class="fas fa-eye"></i> 
            </a>
         @else
            <span>
               <i class="fas fa-eye" style="color: gray;"></i> 
            </span>
         @endif
      </div>
      <div class="edit-icon">
         @if ($folder->is_active)
            <a href="{{ route('folder.edit', $folder->id) }}">
               <i class="fas fa-edit"></i> 
            </a>
         @else
            <span>
               <i class="fas fa-edit" style="color: gray;"></i> 
            </span>
         @endif
      </div>
      
      <div class="delete-icon">
         @if ($folder->is_active)
         <form action="{{ route('folder.destroy', $folder->id) }}" method="post" id="delete-form" onsubmit="return confirmDelete()">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-delete" id="btn-delete">
                <i class="fas fa-trash-alt"></i> 
            </button>
        </form>
         @else
            <button type="button" class="btn-delete" disabled>
               <i class="fas fa-trash-alt" style="color: gray;"></i> 
            </button>
         @endif
      </div>
      
<script>
   function confirmDelete() {
       var fileCount = {!! json_encode($folder->files->count()) !!};
       if (fileCount > 0) {
           return confirm('Are you sure you want to delete the folder? folder contains ' + fileCount + ' files and they will be deleted too!');
       }else{
         alert("Folder is empty, cannot delete."+fileCount);
       }

       return true;
   }
</script>

   <div class="activation-icon">
      <form action="{{ route('folder.toggleActivation', $folder->id) }}" method="post">
          @csrf
          @method('PATCH')
          <button type="submit" class="btn-activation" id="btn-activation_{{ $folder->id }}">
              @if($folder->is_active)
                  <i class="fas fa-check-circle"></i> 
              @else
                  <i class="fas fa-times-circle"></i> 
              @endif
          </button>
      </form>
  </div>

   </div>
   <br>
@endforeach

@stop


