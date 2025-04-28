<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;
use App\Models\Project;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $projects = Project::all();
        $users = User::all();

        foreach ($projects as $project) {
            foreach ($users->random(3) as $user) {
                Task::factory()->create([
                    'project_id' => $project->id,
                    'user_id'    => $user->id,
                    'status'     => ['To Do','In Progress','Done'][array_rand(['To Do','In Progress','Done'])],
                    'deadline'   => now()->addDays(rand(1, 14)),
                ]);
            }
        }
    }
}