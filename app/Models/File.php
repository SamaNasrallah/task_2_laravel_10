<?php

namespace App\Models;

use App\Models\Folder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'file' , 'extension', 'file_link', 'folder_id','file_tags'];

    public function folder()
    {
        return $this->belongsTo(Folder::class, 'folder_id');
    }

}
