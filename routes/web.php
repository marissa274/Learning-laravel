<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//quand l'utilisateur veut accerder a la page dacceuil (les routes qui sont acceder par des routeur)
//methode http:
// les routes sont coome les dictionnaire ou les hashmap
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    $posts = DB::select("SELECT * FROM posts");
    return view('posts.index', [
        'posts' => $posts
    ]);
});

Route::post("/posts", function (Request $request) {
   $validated = $request->validate([
       'title' => 'required|max:255',
       "description" => "nullable|min:10"
   ]);

    DB::insert("INSERT INTO posts (title, description) VALUES (? ,?)", [$validated["title"], $validated["description"]]
    );

    return redirect("/posts");
});



//mon php artisan serve est different de composer run dev
// tous ce qui est entre les acolades on appelle ca un  segment
//ls vaiables qui sont dans les accollades doivent etre du meme nomque la variables qui est dans string
Route::get('/posts/{id}', function (string $id) {
    $post = DB::selectOne("SELECT * FROM posts WHERE id = ?" ,[$id]);
    if(!$post){
        abort(404);
    }
    return view('posts.show', [
        'post' => $post
    ]);
})->whereNumber('id');

Route::delete('/posts/{id}', function (string $id) {
    DB::delete("DELETE FROM posts WHERE id = ?" ,[$id]);
    return redirect("/posts");
});

Route::get('/posts/create', function () {
    return view('posts.create');
});
