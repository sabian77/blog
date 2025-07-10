<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function getAllCustom()
    {
        return [
            [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul artikel 1',
            'author' => 'Sabian Raka',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, cumque similique. Eaque, dolore quisquam, iure nisi non delectus 
            inventore laudantium, veritatis 
            totam animi accusamus tempora dolor sint voluptates mollitia. Perferendis?'
        ], 
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul artikel 2',
            'author' => 'Nafisya Rhea Prayasti',
            'body' => '13  Juli adalah ultahku Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto voluptatum assumenda ex, sint incidunt temporibus. Nostrum nesciunt voluptates eos dolore sequi autem laborum unde, 
            consectetur culpa ipsum qui quibusdam velit similique!'
        ]
        ];
    }

    public static function find($id){
    //     return Arr::first(static::getAllCustom(), function ($post) use ($slug) {
    //         return $post['slug'] == $slug;
    //     });
    // }
    return Arr::first(static::getAllCustom(), fn ($post) => $post['id'] == $id) ?? abort(404);
    }

}