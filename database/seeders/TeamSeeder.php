<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'id' => 1,
            'user_id' => 1,
            'name' => 'Test Team',
            'personal_team' => 0
        ]);

        DB::table('team_user')->insert([
            'user_id' => 1,
            'team_id' => 1,
            'role' => 'Admin',
        ]);
    }
}
