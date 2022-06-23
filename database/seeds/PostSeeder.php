<?php
use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = config('db.posts');
        foreach ($posts as $post) {
            $new_post = new Post();
            $new_post->title = $post['title'];
            $new_post->cover = $post['cover'];
            $new_post->excerpt = $post['excerpt'];
            $new_post->author = $post['author'];
            $new_post->body = $post['body'];
            $new_post->save();
        }
    }
}
