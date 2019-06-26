<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['name','description','quantity','price','imagem']; //'name','description','quantity','price','imagem'
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'produtos'; //nome da tabela
}

// class Tag extends Model
// {
//     public function images(){
//         return $this->belongsToMany('App\Image', 'image_tag','tag_id','image_id');
//         return $this->belongsToMany('App\Tag', 'image_tag ','image_id','tag_id');
//     }
// }
