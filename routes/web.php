<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PostController@index');

// GET - /posts/create - show 'Publish a Post' screen
Route::get('/posts/create', 'PostController@create');

// POST - /posts - Submit post to Post model, redirect to /posts
Route::post('/posts', 'PostController@store');

// GET - /posts - Display list of posts
// GET - /posts/{id} - View post number {id}
// GET - /posts/{id}/edit - Show edit screen, allows editing of post {id}
// PATCH - /posts/{id} - Update post number {id}, submit updated content to Post model
// DELETE - /posts/{id} - Deletes post {id} from the Post model
