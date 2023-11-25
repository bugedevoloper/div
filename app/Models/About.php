<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'fio',
        'tel',
        'email',
        'description',
        'manzil',
        'image',
    ];

     public const IMAGE_PATH = '/admin/abouts/';

    public function fileExists()
    {
       return file_exists($this->imagePath());
    }

    public function imagePath()
    {
        return public_path(self::IMAGE_PATH) . $this->image;
    }

    public function deleteImage()
    {
        if ($this->fileExists()) {
           unlink($this->imagePath());
        }
    }
}
