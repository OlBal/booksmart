<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


protected $fillable = [
        'title',
        'url',
        'description',
    ];

  public function user()
    {
        return $this->belongsTo(User::class); 
    }

     public function title()
    {
        return $this->title;
    }

      public function url()
    {
        return $this->url;
    }

}
