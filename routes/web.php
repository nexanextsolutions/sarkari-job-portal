<?php
use Spatie\Sitemap\SitemapGenerator;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FrontEndController;

Route::get('/test', function(){
    return magichomes\User::find(1)->profile;
});


Route::post('/reg/store', [
    'uses' => 'RegController@store',
    'as' => 'reg.store'   
]);

Route::post('pay-success', [ 
    'uses' => 'PayController@success',
    'as' => 'pay-success'  
]);

Route::post('pay-successful', [
    'uses' => 'PayController@successful',
    'as' => 'pay-successful'  
]);

Route::get('/success', function () {
    return view('successful');
});


Route::get('event', 'PayController@index');
Route::post('pay', 'PayController@pay');
// Route::get('pay-success', 'PayController@success');

// Route::get('/success', function () {
//     return view('success');
// });



// Send text message to Telegram Route
Route::get('send-text-message-to-telegram', 'SocialSharingController@sendTextMessageToTelegram');

// Send photo to Telegram Route
Route::get('send-photo-to-telegram', 'SocialSharingController@sendPhotoToTelegram');

// Send audio to Telegram Route
Route::get('send-audio-to-telegram', 'SocialSharingController@sendAudioToTelegram');

// Send document to Telegram Route
Route::get('send-document-to-telegram', 'SocialSharingController@sendDocumentToTelegram');

// Send video to Telegram Route
Route::get('send-video-to-telegram', 'SocialSharingController@sendVideoToTelegram');

// Send voice to Telegram Route
Route::get('send-voice-to-telegram', 'SocialSharingController@sendVoiceToTelegram');

// Send media group to Telegram Route
Route::get('send-media-group-to-telegram', 'SocialSharingController@sendMediaGroupToTelegram');

// Send point on the map to Telegram Route
Route::get('send-point-on-the-map-to-telegram', 'SocialSharingController@sendPointOnTheMapToTelegram');

// Send information about a venue to Telegram Route
Route::get('send-information-about-a-venue-to-telegram', 'SocialSharingController@sendInformationAboutVenueToTelegram');

// Send message with inline button to Telegram Route
Route::get('send-message-with-inline-button-to-telegram', 'SocialSharingController@sendMessageWithInlineButtonToTelegram');

// Send text tweet Route
Route::get('send-text-tweet', 'SocialSharingController@sendTextTweet');

// Send tweet with media Route
Route::get('send-tweet-with-media', 'SocialSharingController@sendTweetWithMedia');

// Send link to Facebook Route
Route::get('send-link-to-facebook', 'SocialSharingController@sendLinkToFacebook');

// Send photo to Facebook Route
Route::get('send-photo-to-facebook', 'SocialSharingController@sendPhotoToFacebook');

// Send video to Facebook Route
Route::get('send-video-to-facebook', 'SocialSharingController@sendVideoToFacebook');


Route::get('/privacy',  [
    'uses' => 'FrontEndController@privacy',
    'as' =>'privacy'
]);

Route::get('/app-privacy-policy',  [
    'uses' => 'FrontEndController@appprivacy',
    'as' =>'appprivacy'
]);

Route::get('/terms-and-conditions',  [
    'uses' => 'FrontEndController@appterm',
    'as' =>'appterm'
]);

Route::get('/about',  [
    'uses' => 'FrontEndController@about',
    'as' =>'about'
]);

Route::get('/private',  [
    'uses' => 'FrontEndController@private',
    'as' =>'private'
]);
Route::get('/govt',  [
    'uses' => 'FrontEndController@govt',
    'as' =>'govt'
]);
Route::get('/onlyresult',  [
    'uses' => 'FrontEndController@onlyresult', 
    'as' =>'onlyresult'
]);

Route::get('/contact',  [
    'uses' => 'FrontEndController@contact',
    'as' =>'contact'
]);

Route::get('/disclaimer',  [
    'uses' => 'FrontEndController@disclaimer',
    'as' =>'disclaimer'
]);
  
Route::get('/send', [
    'uses' => 'mailController@send',
    'as' =>'send'

]);
 
Route::get('/', [FrontEndController::class, 'index']);
Route::get('/posts/{slug}', [FrontEndController::class, 'singlepost'])->name('post.single');


Route::get('/register/{slug}', [ 
    'uses' => 'FrontEndController@reg', 
    'as' => 'post.pay'
]);

Route::get('/home', [
    'uses' => 'FrontEndController@index',
    'as' =>'index' 
]);

// Route::get('/registration', [
//     'uses' => 'FrontEndController@reg',  
//     'as' =>'reg' 
// ]);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/result', [
    'uses' => 'PostController@result',
    'as' => 'result'
]);

Route::get('/examsearch', [
    'uses' => 'PostController@examsearch',
    'as' => 'examsearch'
]);

Route::get('/rents', [
    'uses' => 'PostController@rents',
    'as' => 'rents'
]);

Route::get('/allexams', [
    'uses' => 'PostController@allexams', 
    'as' => 'allexams'
]);

Auth::routes(); 

Route::group(['prefix' =>'admin', 'middleware' => 'auth'], function(){

    Route::get('/post/create', [
        'uses' => 'PostController@create',
        'as' => 'post.create'
    ]); 

     Route::get('/admin/mysearch', [
        'uses' => 'PostController@mysearch',
        'as' => 'mysearch'
    ]);

    Route::post('/post/store', [
        'uses' => 'PostController@store',
        'as' => 'post.store' 
    ]); 

    Route::get('/post/trashed', [
        'uses' => 'PostController@trashed',
        'as' => 'post.trashed'
    ]);

    Route::get('/post/trashedall', [
        'uses' => 'PostController@trashedall', 
        'as' => 'post.trashedall'
    ]);

    Route::get('/post/kill/{id}', [
        'uses' => 'PostController@kill',
        'as' => 'post.kill'
    ]);

    Route::get('/post/restore/{id}', [
        'uses' => 'PostController@restore',
        'as' => 'post.restore'
    ]);

    Route::get('/post/edit/{id}', [
        'uses' => 'PostController@edit',
        'as' => 'post.edit'
    ]);

    Route::post('/post/update/{id}', [
        'uses' => 'PostController@update',
        'as' => 'post.update'
    ]);

    Route::get('/postingo', [
        'uses' => 'PostController@index',
        'as' => 'post'
    ]);

    Route::get('/reg-users', [
        'uses' => 'RegController@index',
        'as' => 'reg.index'
    ]);

    Route::get('/mypost', [
        'uses' => 'PostController@mypost',
        'as' => 'mypost'
    ]);

    Route::get('/post', [
        'uses' => 'PostController@mypost', 
        'as' => 'mypost'
    ]);

    Route::get('/home', [
      'uses' => 'PostController@mypost',
        'as' => 'mypost'
    ]);

    Route::get('/post/delete{id}', [
        'uses' => 'PostController@destroy',
        'as' => 'post.delete'
    ]);

    Route::get('/reg/delete{id}', [
        'uses' => 'RegController@destroy',
        'as' => 'reg.delete'
    ]);

    Route::get('/users', [
        'uses' => 'UsersController@index',
        'as' => 'users'
    ]);

    Route::get('/user/delete/{id}', [
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
    ]);

    Route::get('/user/create', [
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);

    Route::post('/user/store', [
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);

    Route::get('/user/not-admin/{id}', [
        'uses' => 'UsersController@not_admin',
        'as' => 'user.not.admin'
    ]);

    Route::get('/user/admin/{id}', [
        'uses' => 'UsersController@admin',
        'as' => 'user.admin'
    ]);

    Route::get('/user/profile', [
        'uses' => 'ProfilesController@index',
        'as' => 'user.profile'
    ]);

    Route::post('/user/profile/update', [
        'uses' => 'ProfilesController@update',
        'as' => 'user.profile.update'
    ]);

});
 
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);