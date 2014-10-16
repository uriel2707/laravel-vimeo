laravel-vimeo
=============

Laravel Vimeo Integration (Alpha version)

## Installation

Require this package in your composer.json and run composer update:

    "urielon/laravel-vimeo": "dev-master"

After updating composer, add the Service Provider to the providers array in app/config/app.php

    'Urielon\LaravelVimeo\LaravelVimeoServiceProvider',

You add config files.

    $ php artisan config:publish urielon/laravel-vimeo

If you want to use the facade, add this to your facades in app/config/app.php

    'Vimeo' => 'Urielon\LaravelVimeo\Facades\Vimeo',

## Examples
### Upload Video

    
    $file = Input::file('video');

    $uri = Vimeo::upload($file->getRealPath());

    $video_data = Vimeo::request($uri);
    
    
   
### Api Vimeo 
    
    $response = Vimeo::request($video->uri . '/pictures');
