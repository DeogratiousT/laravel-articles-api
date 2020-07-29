<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('articles', ArticleController::class);
Route::apiResource('authors', AuthorController::class);
Route::apiResource('comments', CommentController::class);


Route::get(
    'articles/{article}/relationships/author',
    [
        'uses' => ArticleRelationshipController::class . '@author',
        'as' => 'articles.relationships.author',
    ]
);
Route::get(
    'articles/{article}/author',
    [
        'uses' => ArticleRelationshipController::class . '@author',
        'as' => 'articles.author',
    ]
);
Route::get(
    'articles/{article}/relationships/comments',
    [
        'uses' => ArticleRelationshipController::class . '@comments',
        'as' => 'articles.relationships.comments',
    ]
);
Route::get(
    'articles/{article}/comments',
    [
        'uses' => ArticleRelationshipController::class . '@comments',
        'as' => 'articles.comments',
    ]
);