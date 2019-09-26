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
        /**
         * WITCOMBE
         */
        $witcombe = App\Work::create([
            'title' => 'Witcombe Cider Festival',
            'description' => 'Gloucestershires very own Cider Festival with big name acts and craft cider for you to enjoy on your August bank holiday weekend.',
            'body' => '<h2><strong>Technology used:</strong></h2><ul><li>WordPress (Custom theme)<ul><li>ACF</li><li>Gutenburg</li></ul></li><li>Build tools (Laravel mix)</li></ul><p><strong>The goal of the Witcombe Cider Festival site was to increase ticket sales and give the site a bigger and better presence on the web.&nbsp;</strong></p><p>Features on the website:</p><ul><li>Instagram post importer</li><li>Countdown clock</li><li>Random CTA for ticket sales</li><li>Ticket sales via third-party</li><li>Line ups split by day and headline/non-headline</li><li>MailChimp sign up</li><li>GDPR and Cookie compliance</li></ul>',
            'user_id' => 1,
            'publish_at' => now()
        ]);
        $witcombe->addMedia(resource_path('images/witcombe.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        /**
         * BROOKS AND POINTON
         */
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

        /**
         * WHATS IN THE RECIPE
         */
        $whatsInTheRecipe = App\Work::create([
            'title' => 'What\'s in the recipe?',
            'description' => '<a href="https://www.thedrum.com/creative-works/project/krow-communications-pets-home-whats-the-recipe" target="_blank">Posted about in The Drum</a>',
            'body' => '',
            'user_id' => 1,
        ]);
        $whatsInTheRecipe->addMedia(resource_path('images/whats-in-the-recipe.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        /**
         * GWR STATION NAME API
         */
        $gwrStationImageApi = App\Work::create([
            'title' => 'GWR Station Name Api',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $gwrStationImageApi->addMedia(resource_path('images/station-name.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        /**
         * WEATHER API
         */
        $emailWeatherAPi = App\Work::create([
            'title' => 'Email Weather API',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $emailWeatherAPi->addMedia(resource_path('images/weather-api.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        /**
         * ORGANIX
         */
        $organix = App\Work::create([
            'title' => 'Organix Website',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $organix->addMedia(resource_path('images/organix.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        /**
         * HAVAS HELIA WEBSITE
         */
        $havasHeliaWebsite = App\Work::create([
            'title' => 'Havas helia website',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $havasHeliaWebsite->addMedia(resource_path('images/havas-helia-ciren.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        /**
         * GAP DENIM SELECTOR
         */
        $gapDenimSelector = App\Work::create([
            'title' => 'Gap Denim Selector (PWA)',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $gapDenimSelector->addMedia(resource_path('images/denim-selector.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        /**
         * DIAGEO LANDING PAGES
         */
        $diageoLandingPages = App\Work::create([
            'title' => 'Diageo Landing Pages',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $diageoLandingPages->addMedia(resource_path('images/diageo-landingpages.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        /**
         * DIAGEO PROMOTIONS
         */
        $diageoPromotions = App\Work::create([
            'title' => 'Diageo Promotions',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $diageoPromotions->addMedia(resource_path('images/diageo-promotions.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        /**
         * GAPXME
         */
        $gapXMe = App\Work::create([
            'title' => 'Gap X Me',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $gapXMe->addMedia(resource_path('images/gapxme.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        /**
         * GAP NOTIFICATIONS
         */
        $gapXMe = App\Work::create([
            'title' => 'Gap app notifications',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $gapXMe->addMedia(resource_path('images/gapxme.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');

        /**
         * GUIDES
         */
        $crickGuides = App\Work::create([
            'title' => 'Cricklade Guides Step Tracker',
            'description' => '',
            'body' => '',
            'user_id' => 1,
        ]);
        $crickGuides->addMedia(resource_path('images/girl-guides.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('hero');
    }
}
