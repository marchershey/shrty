<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Link extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'destination',
        'code',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Create a new shortened link
     *
     */
    public function createLink(string $destination = null)
    {
        $newLink = new $this;
        $newLink->destination = $destination;
        $newLink->slug = $this->generateUniqueSlug();
        $newLink->user_id = 1;
        $newLink->save();

        return $newLink;
    }

    /**
     * Generate a unique slug
     *
     */
    public function generateUniqueSlug()
    {
        $slug = Str::random(5);

        while ($this->where('slug', $slug)->exists()) {
            $slug = Str::random(5);
        }

        return $slug;
    }
}
