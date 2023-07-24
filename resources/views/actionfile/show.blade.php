@extends('layouts.main')
@section('MainContent')
<br>
<h2>File Details</h2>
<p>Name: {{ $file->name }}</p>
<p>Name: {{ $file->file }}</p>
<p>File Tags: {{ $file->file_tags }}</p>
<p>download File :<a href="{{ Storage::url($file->file_link) }}" download>
    <i class="fas fa-download"></i>
</a></p>

<iframe src="{{ Storage::url($file->file_link) }}" style="width: 100%; height: 500px;"></iframe>
@endsection
