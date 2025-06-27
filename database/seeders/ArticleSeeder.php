<?php
// database/seeders/ArticleSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $articles = [
            [
                'title' => 'Menguasai Laravel dari Dasar',
                'slug' => 'menguasai-laravel-dari-dasar',
                'excerpt' => 'Panduan lengkap untuk memahami framework Laravel dari konsep dasar hingga advanced.',
                'content' => '<p>Laravel adalah framework PHP yang sangat populer untuk pengembangan web. Dalam artikel ini, kita akan membahas dasar-dasar Laravel...</p>',
                'category' => 'Laravel',
                'image' => 'https://source.unsplash.com/800x600/?laravel,php',
                'published_at' => Carbon::now()->subDays(5),
            ],
            [
                'title' => 'JavaScript ES6+ Features',
                'slug' => 'javascript-es6-features',
                'excerpt' => 'Fitur-fitur terbaru JavaScript ES6+ yang wajib dikuasai developer modern.',
                'content' => '<p>JavaScript terus berkembang dengan fitur-fitur baru yang memudahkan development. Mari kita bahas fitur ES6+...</p>',
                'category' => 'JavaScript',
                'image' => 'https://source.unsplash.com/800x600/?javascript,programming',
                'published_at' => Carbon::now()->subDays(3),
            ],
            // Tambahkan data lainnya...
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
