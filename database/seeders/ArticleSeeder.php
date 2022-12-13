<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleTag;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Article::truncate();

        /*for ($i = 0; $i <= 10; $i++) {
        Article::create(['subject' => '標題' . $i, 'content' => '內容' . $i, 'cgy_id' => $i, 'enabled_at' => Carbon::now(), 'enabled' => true]);
        }*/
        $articles = Article::factory()->times(100)->create();

        foreach ($articles as $article) {
            $at = new ArticleTag;
            $at->article_id = $article->id;
            $at->tag_id = rand(1, 30);
            $at->save();
        }

    }
}
