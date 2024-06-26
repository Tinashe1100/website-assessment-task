<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use App\Models\CallToAction;
use App\Models\Home;
use App\Models\Pricing;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Home::create([
            'heading' => "Coroorate Website",
            'para' => "We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things.",
            'image' => "landing page image"
        ]);
        About::create([
            'heading' => "Our team comes with the experience and knowledge",
            'para1' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has more-or-less normal distribution of letters, look like readable English.",
            'para2' => "There are many variations od passages of Lorem Ipsum available, but the majority have in some form, by injected humor.",
            'image' => "landing page image"
        ]);
        Service::create([
            'name' => "Refreshing Design",
            'details' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, omnis aliquid. Facilis qui culpa omnis id?",
        ]);
        Service::create([
            'name' => "Refreshing Design",
            'details' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, omnis aliquid. Facilis qui culpa omnis id?",
        ]);
        Service::create([
            'name' => "Refreshing Design",
            'details' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, omnis aliquid. Facilis qui culpa omnis id?",
        ]);
        Service::create([
            'name' => "Refreshing Design",
            'details' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, omnis aliquid. Facilis qui culpa omnis id?",
        ]);
        Service::create([
            'name' => "Refreshing Design",
            'details' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, omnis aliquid. Facilis qui culpa omnis id?",
        ]);
        Service::create([
            'name' => "Refreshing Design",
            'details' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, omnis aliquid. Facilis qui culpa omnis id?",
        ]);
        Pricing::create([
            'package_name' => "Standard",
            'package_desc' => "Lorem Ipsum is simply dummy text of the printing and industry.",
            'package_cta' => "START FREE TRIAL",
            'package_price' => '50'
        ]);
        Pricing::create([
            'package_name' => "Standard",
            'package_desc' => "Lorem Ipsum is simply dummy text of the printing and industry.",
            'package_cta' => "START FREE TRIAL",
            'package_price' => '50'
        ]);
        Pricing::create([
            'package_name' => "Standard",
            'package_desc' => "Lorem Ipsum is simply dummy text of the printing and industry.",
            'package_cta' => "START FREE TRIAL",
            'package_price' => '50'
        ]);
        CallToAction::create([
            'heading' => 'We love to make perfect solutions for your business',
            'paragraph' => "Why I say old chap that is, spiffing off his nut cor blimey guvnords geeza bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around chesed of bum bag old lost the pilot say there spiffing off his nut.",
            'cta_button' => 'GET STARTED'
        ]);
    }
}
