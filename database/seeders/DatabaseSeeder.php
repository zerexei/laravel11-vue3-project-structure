<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        DB::table('team_user')->truncate();
        User::truncate();
        Team::truncate();
        

        $user = User::factory()->withPersonalTeam()->create([
            'name' => 'Test Admin User',
            'email' => 'test@example.com',
        ]);

        $team = $user->currentTeam;

        User::factory()->hasAttached($team, ['role' => 'editor'])->create([
            'name' => 'Test Editor User',
            'email' => 'test2@example.com',
            'current_team_id' => $team->id,
        ]);
    }
}
