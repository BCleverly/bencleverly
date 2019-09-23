<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $witcombe = App\Work::create([
            'title' => 'Witcombe Cider Festival',
            'description' => 'Gloucestershires very own Cider Festival with big name acts and craft cider for you to enjoy on your August bank holiday weekend.',
            'body' => '',
            'user_id' => 1,
            'publish_at' => now()
        ]);
        $witcombe->addMedia(resource_path('images/witcombe.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $brooks = App\Work::create([
            'title' => 'Brooks & Pointon Construction',
            'description' => '',
            'body' => '',
            'user_id' => 1,
            'publish_at' => now()
        ]);
        $brooks->addMedia(resource_path('images/brooks.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $whatsInTheRecipe = App\Work::create([
            'title' => 'What\'s in the recipe?',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $whatsInTheRecipe->addMedia(resource_path('images/station-name.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $gwrStationImageApi = App\Work::create([
            'title' => 'GWR Station Name Api',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $gwrStationImageApi->addMedia(resource_path('images/station-name.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $emailWeatherAPi = App\Work::create([
            'title' => 'Email Weather API',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $emailWeatherAPi->addMedia(resource_path('images/weather-api.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $organix = App\Work::create([
            'title' => 'Organix Website',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $organix->addMedia(resource_path('images/station-name.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $havasHeliaWebsite = App\Work::create([
            'title' => 'Havas helia website',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $havasHeliaWebsite->addMedia(resource_path('images/havas-helia-ciren.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $gapDenimSelector = App\Work::create([
            'title' => 'Gap Denim Selector (PWA)',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $gapDenimSelector->addMedia(resource_path('images/station-name.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $diageoLandingPages = App\Work::create([
            'title' => 'Diageo Landing Pages',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $diageoLandingPages->addMedia(resource_path('images/diageo-promotions.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $diageoPromotions = App\Work::create([
            'title' => 'Diageo Promotions',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $diageoPromotions->addMedia(resource_path('images/diageo-promotions.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $gapXMe = App\Work::create([
            'title' => 'Gap X Me',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $gapXMe->addMedia(resource_path('images/station-name.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $crickGuides = App\Work::create([
            'title' => 'Cricklade Guides Step Tracker',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $crickGuides->addMedia(resource_path('images/girl-guides.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');


//        $works = factory(App\Work::class, 1)->create();
//        $works->each(function($work) {
//            $work
//                ->addMedia(resource_path('images/photo-1556910096-6f5e72db6803.webp'))
//                ->withResponsiveImages()
//                ->toMediaCollection('hero');
//        });
    }
}
