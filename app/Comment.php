<?php

namespace App;

use App\Http\Requests\PostForm;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'post_id'];
    //
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
