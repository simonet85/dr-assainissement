<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Sample Project 1',
            'description' => 'This is the description for the sample project 1.',
            'image' => 'projects/sample-image1.jpg',
        ]);
    
        Project::create([
            'title' => 'Sample Project 2',
            'description' => 'This is the description for the sample project 2.',
            'image' => 'projects/sample-image2.jpg',
        ]);
    }
}
