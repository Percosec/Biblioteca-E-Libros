<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'image',
        'price',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class, 'book_id', 'id');
    }

    // protected function getImageUrl(): Attribute {
    //     return new Attribute(
    //         get: function () {
    //             if ($this->image) {
    //                 if (substr($this->image, 0, 8) === 'https://') {
    //                     return $this->image;
    //                 }
    //                 return Storage::url($this->image);
    //             } else {
    //                 return "https://upload.wikimedia.org/wikipedia/commons/f/fc/No_picture_available.png"; // o una imagen por defecto
    //             }
    //         }
    //     );
    // }
}
