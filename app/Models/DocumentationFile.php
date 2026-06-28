<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentationFile extends Model
{
    // 1. Tentukan nama tabelnya (Berupa STRING, bukan array)
    protected $table = 'documentation_files';

    // 2. Tentukan kolom yang boleh diisi (Gunakan $fillable dan perbaiki typo)
    protected $fillable = ['title', 'file_path','file_type'
    ];
}