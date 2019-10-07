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
<pre><code>let assetRules = {rules:{}};
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



        $laravelLockout = App\Post::create([
            'title' => 'Laravel user lockout',
            'description' => "How to add a user lockout feature in Laravel 5.8+",
            'body' => "<p>I'm assuming that you already have the auth scaffolding set up within your project.</p>
<p>Go to the following file <code>app/Http/Controllers/Auth/LoginController.php</code> as we will be making changes to this file as well as making a new validation rule.</p>
<p>First of all let's add the max attempts we want to be allowed before an account lock out is put in place.</p>
<pre><code>&lt;?php
//...
class LoginController extends Controller
{
    protected &dollar;maxAttempts = 3;
}
</code></pre>
<p>Next we will want to add our new validation rule in to the mix and then add that to our Validate login method.</p>
<p>So create a new rule using Laravel's artisan command <code>php artisan make:rule AccountIsNotLocked</code> when this has successfully created, go to the file and the below to each of the methods</p>
<pre><code>&lt;?php
class AccountIsNotLocked implements Rule
{
    public function passes(&dollar;attribute, &dollar;value)
    {
        &dollar;user = User::where('email', &dollar;value)
            ->where('locked_at', '!=', null)
            ->first();
    
        if (is_null(&dollar;user)) {
            return true;
        }
        return false;
    }
    
    public function message()
    {
        return 'The account is locked, please contact an administrator';
    }
</code></pre>
<p>Then back to our LoginController we need to add the new rule</p>
<pre><code>&lt;?php
//...
class LoginController extends Controller
{
    protected &dollar;maxAttempts = 3;
    
    protected function validateLogin(Request &dollar;request)
    {
        &dollar;request->validate([
            &dollar;this->username() => [
                'required',
                'string', 
                new App\Rules\AccountIsNotLocked()],
            'password' => 'required|string',
        ]);
    }
}
</code></pre>
<p>Then we need to override the <code>hasTooManyLoginAttempts</code> default behaviour as this just throttles by default.</p>
<pre><code>&lt;?php
//...
class LoginController extends Controller
{
    protected &dollar;maxAttempts = 3;
    
    protected function validateLogin(Request &dollar;request)
    {
        &dollar;request->validate([
            &dollar;this->username() => [
                'required',
                'string', 
                new App\Rules\AccountIsNotLocked()],
            'password' => 'required|string',
        ]);
    }
    
    protected function hasTooManyLoginAttempts(Request &dollar;request)
    {
        &dollar;tooManyAttempts =  &dollar;this->limiter()->tooManyAttempts(
            &dollar;this->throttleKey(&dollar;request),
            &dollar;this->maxAttempts()
        );

        if (&dollar;tooManyAttempts) {
            &dollar;user = User::where('email', &dollar;request->email)->first();
            &dollar;user->update([
                'locked_at' => now()
            ]);
        }

        return &dollar;tooManyAttempts;
    }
}
</code></pre>
<p>Then finally we need to override the <code>defaultLockoutResponse</code> to cater for our lockout situaton</p>
<pre><code>&lt;?php
//...
class LoginController extends Controller
{
    protected &dollar;maxAttempts = 3;
    
    protected function validateLogin(Request &dollar;request)
    {
        &dollar;request->validate([
            &dollar;this->username() => [
                'required',
                'string', 
                new App\Rules\AccountIsNotLocked()],
            'password' => 'required|string',
        ]);
    }
    
    protected function hasTooManyLoginAttempts(Request &dollar;request)
    {
        &dollar;tooManyAttempts =  &dollar;this->limiter()->tooManyAttempts(
            &dollar;this->throttleKey(&dollar;request),
            &dollar;this->maxAttempts()
        );

        if (&dollar;tooManyAttempts) {
            &dollar;user = User::where('email', &dollar;request->email)->first();
            &dollar;user->update([
                'locked_at' => now()
            ]);
        }

        return &dollar;tooManyAttempts;
    }
    
    protected function sendLockoutResponse(Request &dollar;request)
    {
        throw ValidationException::withMessages([
            &dollar;this->username() => [\"Your account has been locked, please contact an administrator.\"],
        ])->status(Response::HTTP_TOO_MANY_REQUESTS);
    }
}
</code></pre>
",
            'user_id' => 1,
            'publish_at' => now()
        ]);
        $laravelLockout->addMedia(resource_path('images/witcombe.jpg'))->preservingOriginal()
            ->withResponsiveImages()
            ->toMediaCollection('post-hero');
    }
}
