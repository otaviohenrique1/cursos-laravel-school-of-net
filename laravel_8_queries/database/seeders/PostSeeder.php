<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Comment;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = 20;
        for($i = 0; $i < $items; $i++) {
            Post::factory()
            ->has(Comment::factory()->count(rand(2, 5)))
            ->has(Tag::factory()->count(rand(2, 5)))
            ->create();
        }
    }
}
