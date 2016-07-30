<?
Route::group(['middleware' => ['web']], function () {
    Route::get('category/{slug?}', 'Intergit\Products\Http\Controllers\PrsoCategoryController@show');
});
?>