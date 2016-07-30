<?
Route::group(['middleware' => ['web']], function () {
    Route::get('category/{slug?}', 'Intergit\Products\Http\Controllers\PrsoCategoryController@show');
    Route::get('category/{slug?}', 'Intergit\Products\Http\Controllers\PrsoCategoryController@show');
    Route::get('product/{slug}/{categoryid?}', 'Intergit\Products\Http\Controllers\PrsoProductController@show');
});
?>