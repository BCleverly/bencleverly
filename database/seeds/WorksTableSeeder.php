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
            'description' => 'Gloucestershires own Cider Festival with big name acts and craft cider for you to enjoy on your August bank holiday weekend.',
            'body' => '',
            'user_id' => 1,
        ]);
        $witcombe->addMediaFromUrl('https://source.unsplash.com/random')
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $brooks = App\Work::create([
            'title' => 'Brooks & Pointon Construction',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $brooks->addMediaFromUrl('https://source.unsplash.com/random')
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $whatsInTheRecipe = App\Work::create([
            'title' => 'What\'s in the recipe?',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $whatsInTheRecipe->addMediaFromUrl('https://source.unsplash.com/random')
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $gwrStationImageApi = App\Work::create([
            'title' => 'GWR Station Name Api',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $gwrStationImageApi->addMediaFromUrl('https://source.unsplash.com/random')
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $emailWeatherAPi = App\Work::create([
            'title' => 'Email Weather API',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $emailWeatherAPi->addMediaFromUrl('https://source.unsplash.com/random')
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $organix = App\Work::create([
            'title' => 'Organix Website',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $organix->addMediaFromUrl('https://source.unsplash.com/random')
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $havasHeliaWebsite = App\Work::create([
            'title' => 'Havas helia website',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $havasHeliaWebsite->addMediaFromUrl('https://source.unsplash.com/random')
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $gapDenimSelector = App\Work::create([
            'title' => 'Gap Denim Selector (PWA)',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $gapDenimSelector->addMediaFromUrl('https://source.unsplash.com/random')
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $diageoLandingPages = App\Work::create([
            'title' => 'Diageo Landing Pages',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $diageoLandingPages->addMediaFromUrl('https://source.unsplash.com/random')
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $diageoPromotions = App\Work::create([
            'title' => 'Diageo Promotions',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $diageoPromotions->addMediaFromUrl('https://source.unsplash.com/random')
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        $gapXMe = App\Work::create([
            'title' => 'Gap X Me',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $gapXMe->addMediaFromUrl('https://source.unsplash.com/random')
            ->withResponsiveImages()
            ->toMediaCollection('hero');


//        $works = factory(App\Work::class, 1)->create();
//        $works->each(function($work) {
//            $work
//                ->addMediaFromUrl('https://source.unsplash.com/random')
//                ->withResponsiveImages()
//                ->toMediaCollection('hero');
//        });
    }
}
