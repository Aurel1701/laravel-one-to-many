<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'cover', 'body', 'category_id'];

    
    /**
     * Get the category that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(App\Category::class);
    }
}
//$post->category->name; // ottengo il nome --:: senza '->name' ottengo tutto 




