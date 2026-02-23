<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestContoller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



//quand l'utilisateur veut accerder a la page dacceuil (les routes qui sont acceder par des routeur)
//methode http:
// les routes sont coome les dictionnaire ou les hashmap
Route::get('/', function () {
    return view('welcome');
});

Route::resource("posts",PostController::class);

////Route::get("/posts", [PostController::class, 'index']);
////Route::get("/posts/{post}", [PostController::class, 'show']);
////Route::get('/posts', function () {
////    $posts = Post::all();
////    return view('posts.index', [
////        'posts' => $posts
////    ]);
////});
//
//Route::post("/posts", function (Request $request) {
//   $validated = $request->validate([
//       'title' => 'required|max:255',
//       "description" => "nullable|min:10"
//   ]);
//
//   Post::query()->create($validated);
//
//    return redirect("/posts");
//});
//
//
//
////mon php artisan serve est different de composer run dev
//// tous ce qui est entre les acolades on appelle ca un  segment
////ls vaiables qui sont dans les accollades doivent etre du meme nomque la variables qui est dans string
//Route::get('/posts/{post}', function (string $post) {
//return view('posts.show', ["post" => $post]);
//});
//
//Route:: get("/posts/{post}/edit", function (string $post) {
//    return view('posts.edit', ["post" => $post]);
//});
//
//Route::put("/posts/{post}", function (Request $request, string $post) {
//    $validated = $request->validate([
//        'title' => 'required|max:255',
//        "description" => "nullable|min:10"
//    ]);
//        $post->update($validated);
//    return redirect("/posts/$post->id");
//});
//
//Route::delete('/posts/{post}', function (string $post) {
//    post::query()->findOrFail($post)->delete();
//    return redirect("/posts");
//});
//
//Route::get('/posts/create', function () {
//    return view('posts.create');
//});
