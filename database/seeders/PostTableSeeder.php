<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PostTableSeeder extends Seeder
{
    private $_posts = [
        ['title' => 'Seeder1', 'description' => 'descA1'],
        ['title' => 'Seeder2', 'description' => 'descB2'],
        ['title' => 'Seeder3', 'description' => 'descC3'],
        ['title' => 'Seeder4', 'description' => 'descD4'],
        ['title' => 'Seeder5', 'description' => 'descE5'],
        ['title' => 'Seeder6', 'description' => 'descF6'],
        ['title' => 'Seeder7', 'description' => 'descG7'],
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach ($this->_posts as $post) {
            $data[] = [
                'title' => $post['title'],
                'description' => $post['description']
            ];
        }
        DB::table('posts')->insert($data);
    }
}
