<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  User::create([
           'name'=>'Mohamed Salama',
            'email'=> 'mosal@eg.dev',
            'password'=> bcrypt('password'),
            'admin'=>1
        ]);

        Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'uploads/avatars/1.png',
            'about'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis cupiditate debitis distinctio dolorem eos eum impedit iusto minus mollitia natus nobis non nostrum odio, officiis placeat quidem quos voluptatem!',
            'facebook'=>'facebook.com',
            'twitter'=>'twitter.com'
        ]);

        Setting::create([
           'site_name'=>"Fekr",
           'contact_number'=>'01020304050',
           'contact_email'=>'mosal@yahoo.dev',
           'address'=>'Egypt-Ismailia-Fayed'
        ]);
    }
}
