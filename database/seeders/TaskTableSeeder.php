<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taskRecords = [
            [
                'id'=>1,
                'user_id'=>1,
                'title'=>'Landing page',
                'description'=>'Create a Landing page for Holand website',
                'completed'=>0,
            ],
            [
                'id'=>2,
                'user_id'=>2,
                'title'=>'API integration',
                'description'=>'Create an API',
                'completed'=>0,
            ],
            [
                'id'=>3,
                'user_id'=>3,
                'title'=>'Call the manager',
                'description'=>'Give mr derek a call',
                'completed'=>0,
            ],
        ];
        Task::insert($taskRecords);
    }
}
