<?php

namespace App\Models;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Folder extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'is_active'];
    public function files()
    {
        return $this->hasMany(File::class);
    }
}
