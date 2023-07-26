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
        <form action="{{ route('file.store',$folder_id) }}" method="POST" enctype="multipart/form-data">
       
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="form-group">
        <label for ="name">File Name</label> 
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="file">File</label>
        <input type="file" name="files[]" id="file" class="form-control-file" multiple>
    </div>
    <div class="form-group">
        <label for="file_tags"> File_Tags</label>
        <input type="text" name="file_tags[]" data-role="tagsinput"  class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary" id="btn-primary">Save</button>
  
    </form>

    </div>
    </div>




    

    <script>
        $(function () {
          $('input')
            .on('change', function (event) {
              var $element = $(event.target);
              var $container = $element.closest('.example');
    
              if (!$element.data('tagsinput')) return;
    
              var val = $element.val();
              if (val === null) val = 'null';
              var items = $element.tagsinput('items');
    
              $('code', $('pre.val', $container)).html(
                $.isArray(val)
                  ? JSON.stringify(val)
                  : '"' + val.replace('"', '\\"') + '"'
              );
              $('code', $('pre.items', $container)).html(
                JSON.stringify($element.tagsinput('items'))
              );
            })
            .trigger('change');
        });
      </script>
    
  
    @stop
    
