<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable= ['title','slug','description',
    'image_path','userid'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Sluggable(): array
    {
        return[
            'slug'=>[
                'source'=>'title'
            ]
            ];
    }
}
