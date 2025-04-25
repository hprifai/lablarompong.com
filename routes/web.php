<?php

use App\Models\Category;
use App\Models\Service;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Service $service) {
    $service = Service::latest();
    return view('home', ['title'=> 'Home Page','service'=>Service::limit(4)->get() ]);
});

Route::get('/posts', function () {
    $posts = Post::latest();
    if(request('search')){
        $posts->where('title', 'like', '%' . request('search'). '%' );
    }
    
    return view('posts',['title' => 'Blog', 'posts' => Post::filter(request(['search','category','author']))->latest()->paginate(5)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function ( Post $post){
    return view('post', ['title' => 'Single post', 'post'=>$post]);
});

Route::get('/authors/{user:username}', function ( User $user){
    $posts = $user->posts->load('category','author');
    return view('posts', ['title' =>'Article by '.$user->name. ' : '.count($posts), 'posts' => $posts]);
});

Route::get('/categories/{category:slug}', function ( Category $category){
    $posts = $category->posts->load('category','author');
    return view('posts', ['title' => 'Article in: '.$category->name, 'posts'=>$posts]);
});

Route::get('/layanan', function () {
    $allServices = Service::latest();
    return view('layanan', ['title' => 'Layanan', 'allServices'=>Service::all()]);
    // return view('layanan', ['title' => 'Layanan']);
});

Route::get('/layanan/{service:slug}', function (Service $service) {
    return view('layanan_detail', ['title' => 'Layanan Detail','service'=>$service]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});
