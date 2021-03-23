<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'name' => 'ali',
                'address' => 'taman seroja',
                'qty' => 3,
                'price' => 15,
            ],
            [
                'name' => 'abu',
                'address' => 'taman melor',
                'qty' => 2,
                'price' => 30,
            ]
        ];

        foreach ($books as $book) {
            DB::table('books')->insert($book);            
        }
    }
}
