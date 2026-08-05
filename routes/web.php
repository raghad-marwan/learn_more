<?php

use App\Http\Controllers\Site1\SiteOneController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () { return view('welcome');});

/*Route::get( '/home' , function(){

return ('home');
});*/

//user   ,profile
/*Route::get('/user/profile/{id}', function ($id) {
 echo  $id ;
 });*/


//news  , all new , new

/*Route::get('/news/{id?}', function ($id =null) {
$news = [ 1,2,5,8,9];
if($id){

echo 'new is:' . $id ;

}
else{
echo 'all news';
foreach($news as $new){
 echo $new . '<br>';
}
}*/
/*$news = [ 1,2,5,8,9];

foreach($news as $new){
 echo $new . '<br>';
}
});*/


// site1 ( home  ,  about  , contact )
//prefix
Route::prefix('site1')->controller(SiteOneController::class)->group(function () {
    Route::get('/home', 'home');
    Route::get('/about',  'about');
    Route::get('/contact',  'contact');
    Route::get('/msg/{id}',   'msg');
});
