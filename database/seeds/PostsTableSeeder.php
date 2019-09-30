<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $witcombe = App\Post::create([
            'title' => 'jQuery validate mass array validation',
            'description' => "In this post I'll show you how to dynamically generate jQuery validate rules at build time.",
            'body' => "<p>Recently I had a project where I had to make use of jQuery validate (VanillaJs available) and needed to run the same validation across anywhere form 1 to N amount of dynamic assets. This also included a validation rule that was conditional based on the value of another </p>
<p>Following DRY principles, I decided to make use of the loop and then using string literals to build up the selectors for jQuery validate.</p>
<pre class='language-javascript line-numbers'><code>let assetRules = {rules:{}};
for(let i = 1; i <= 100; i++) {
    assetRules.rules[`asset[\${i}][file]`] = {};
    assetRules.rules[`asset[\${i}][name]`] = {
        required: function() {
            return !!($(`input[name=\"asset[\${i}][file]\"]`).get(0).files.length > 0 || $(`asset[\${i}][id]`).not(':empty'));
        }
    };
    assetRules.rules[`asset[\${i}][channel]`] = {
        required: function() {
            return !!($(`input[name=\"asset[\${i}][file]\"]`).get(0).files.length > 0 || $(`asset[\${i}][id]`).not(':empty'));
        }
    };
}
let validationRules = {
    ignore: [],
    rules: {
        purpose: {
            required: true
        },
        campaign: {
            required: true
        }
    }
};
$('#form').validate(_.merge(validationRules, assetRules));</code></pre>",
            'user_id' => 1,
            'publish_at' => now()
        ]);
        $witcombe->addMedia(resource_path('images/witcombe.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('post-hero');

        // Create three App\User instances...
//        $posts = factory(App\Post::class, 50)->create();
    }
}
