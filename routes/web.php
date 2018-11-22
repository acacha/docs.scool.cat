<?php

/**
 * Set the default documentation version...
 */
if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', '1.0');
}

Route::get('/', function () {
    return view('marketing');
});

Route::get('docs', 'DocsController@showRootPage');
Route::get('docs/{version}/{page?}', 'DocsController@show');

Route::get('/discord', function () {
    dump('TODO');
//    return redirect('https://discord.gg/wTgA8jR');
});

