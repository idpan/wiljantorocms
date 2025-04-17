<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\Section;

class PageAndSectionSeeder extends Seeder
{
    public function run(): void
    {
        // Insert Home Page
        $home = Page::create([
            'name' => 'home',
            'title' => 'Home',
        ]);

        Section::insert([
            [
                'page_id' => $home->id,
                'name' => 'hero',
                'header' => 'Welcome to Our Website',
                'content' => 'This is the hero section.',
            ],
            [
                'page_id' => $home->id,
                'name' => 'about',
                'header' => 'About Us',
                'content' => 'We are a leading contractor company.',
            ],
            [
                'page_id' => $home->id,
                'name' => 'featured_projects',
                'header' => 'Our Projects',
                'content' => 'Check out our featured projects.',
            ],
            [
                'page_id' => $home->id,
                'name' => 'cta',
                'header' => 'Let’s Work Together',
                'content' => 'Contact us today.',
            ],
        ]);

        // Insert About Page
        $about = Page::create([
            'name' => 'about',
            'title' => 'About',
        ]);

        Section::insert([
            [
                'page_id' => $about->id,
                'name' => 'story',
                'header' => 'Our Story',
                'content' => 'Our company began in 2000...',
            ],
            [
                'page_id' => $about->id,
                'name' => 'vision',
                'header' => 'Vision',
                'content' => 'To be the most trusted contractor.',
            ],
            [
                'page_id' => $about->id,
                'name' => 'mission',
                'header' => 'Mission',
                'content' => 'Delivering quality and excellence.',
            ],
            [
                'page_id' => $about->id,
                'name' => 'cta',
                'header' => 'Ready to Build?',
                'content' => 'Let’s bring your project to life.',
            ],
        ]);

        // Insert Project Page
        $project = Page::create([
            'name' => 'project',
            'title' => 'Projects',
        ]);

        Section::create([
            'page_id' => $project->id,
            'name' => 'hero',
            'header' => 'Our Projects',
            'content' => 'Explore the work we’ve done.',
        ]);
    }
}
