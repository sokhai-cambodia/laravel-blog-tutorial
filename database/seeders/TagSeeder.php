<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Web Design'
            ],
            [
                'name' => 'HTML'
            ],
            [
                'name' => 'JavaScript'
            ],
            [
                'name' => 'CSS'
            ],
            [
                'name' => 'PHP'
            ],
            [
                'name' => 'Python'
            ],
            [
                'name' => 'Node JS'
            ],
            [
                'name' => 'Mysql'
            ],
            [
                'name' => 'Mongo DB'
            ],
            [
                'name' => 'Vue JS'
            ],
            [
                'name' => 'React'
            ]
        ];

        foreach($data as $record) {
            Tag::create($record);
        }
    }
}
