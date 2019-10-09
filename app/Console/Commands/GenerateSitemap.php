<?php

namespace App\Console\Commands;

use App\Post;
use App\Work;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('Staring sitemap generation...');
        $sitemap = SitemapGenerator::create(config('app.url'))->getSitemap();
        $this->info('Adding posts...');
        foreach(Post::published()->cursor() as $post) {
            $sitemap->add(route('post.show', $post->slug));
        }
        $this->info('Adding works...');
        foreach(Work::published()->cursor() as $work) {
            $sitemap->add(route('work.show', $work->slug));
        }
        $this->info('Writing sitemap to file...');
        $sitemap->writeToFile(public_path('sitemap.xml'));
        $this->info('Done!');
    }
}
