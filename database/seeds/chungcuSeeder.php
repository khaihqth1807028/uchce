<?php

use Illuminate\Database\Seeder;

class chungcuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('chungcuminis')->truncate();
        \Illuminate\Support\Facades\DB::table('chungcuminis')->insert([
            ['id'=>1,
                'name' => 'Diablo |||',
                'price' => 100,
                'address'=>'Hà Nội' ,
                'description'=>'rất đăt',
                'avartar' => 'https://i.pinimg.com/originals/1d/ae/1a/1dae1ad263fbac22a9296014871cb980.png',
                'created_at' => date('Y-m-d H:i:s'),

            ],

            ['id'=> 2,
                'name' => 'Diablo |||',
                'price' => 100,
                'address'=>'Hà Nội' ,
                'description'=>'rất đăt',
                'avartar' => 'https://i.pinimg.com/originals/1d/ae/1a/1dae1ad263fbac22a9296014871cb980.png',
                'created_at' => date('Y-m-d H:i:s'),

            ],

            ['id'=>3,
                'name' => 'Diablo |||',
                'price' => 100,
                'address'=>'Hà Nội' ,
                'description'=>'rất đăt',
                'avartar' => 'https://i.pinimg.com/originals/1d/ae/1a/1dae1ad263fbac22a9296014871cb980.png',
                'created_at' => date('Y-m-d H:i:s'),

            ],

            ['id'=>4,
                'name' => 'Diablo |||',
                'price' => 100,
                'address'=>'Hà Nội' ,
                'description'=>'rất đăt',
                'avartar' => 'https://i.pinimg.com/originals/1d/ae/1a/1dae1ad263fbac22a9296014871cb980.png',
                'created_at' => date('Y-m-d H:i:s'),

            ],

            [   'id'=>5,
                'name' => 'Diablo |||',
                'price' => 1001,
                'address'=>'Hà Nội' ,
                'description'=>'rất đăt',
                'avartar' => 'https://i.pinimg.com/originals/1d/ae/1a/1dae1ad263fbac22a9296014871cb980.png',
                'created_at' => date('Y-m-d H:i:s'),

            ],

        ]);
    }
}
