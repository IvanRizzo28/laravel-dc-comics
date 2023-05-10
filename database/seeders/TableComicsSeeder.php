<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TableComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=config('comics');

        foreach ($data as $item) {
            $tmp=new Comic();
            $tmp->title=$item['title'];
            $tmp->description=$item['description'];
            $tmp->thumb=$item['thumb'];
            $tmp->price=Str::substr($item['price'], 1);
            $tmp->series=$item['series'];
            $tmp->sale_date=$item['sale_date'];
            $tmp->type=$item['type'];
            $tmp->save();
        }
    }
}
