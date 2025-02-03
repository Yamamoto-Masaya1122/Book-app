<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'id' => 1,
            'title' => 'Webを支える技術 -HTTP、URI、HTML、そしてREST',
            'isbn_code' => '978-4-7741-42043-3',
            'author' => '山本陽平',
            'publishing_company' => '技術評論社',
            'release_date' => '2024-02-13',
            'price' => '2570',
            'memo' => '',
        ]);
        Book::create([
            'id' => 2,
            'title' => '世界一流エンジニアの思考法',
            'isbn_code' => '978-4-16-391768-9',
            'author' => '牛尾剛',
            'publishing_company' => '文藝春秋',
            'release_date' => '2024-02-25',
            'price' => '1600',
            'memo' => '',
        ]);
        Book::create([
            'id' => 3,
            'title' => '「エンジニアxスタートアップ」こそ、最高のキャリアである',
            'isbn_code' => '978-4-295-40777-5',
            'author' => '菊本久寿',
            'publishing_company' => 'クロスメディア・パブリッシング',
            'release_date' => '2022-12-21',
            'price' => '1628',
            'memo' => '',
        ]);
    }
}
