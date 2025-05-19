<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Error;
use Illuminate\Cache\Events\RetrievingKey;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;
use Illuminate\Support\MessageBag;

use function Laravel\Prompts\error;
use function PHPUnit\Framework\isNull;

class PostController extends Controller
{


     public function index()
     {

          $PostFromDB = Post::all();
          return view('index', ["posts" => $PostFromDB]);
     }


     public function create()
     {
          $UserFromDB = User::all();
          return view('create', ['User' => $UserFromDB]);
     }


     public function store(Request $request)
     {
          $request->validate([
               'Title' => ['required', 'min:3'],
               'description' => ['required', 'min:5'],
               'PostCreator'=>['required','exists:posts,user_id']
          ]);
          Post::create([
               'Title' => $request->Title,
               'description' => $request->description,
               'user_id' => $request->PostCreator,

          ]);
          return to_route('posts.index');
     }



     public function show(Post $post)
     {

          return view('show', ["post" => $post]);
     }

     public function update(Request $request, $postId)
     {     
          $request->validate([
               'Title' =>['required','min:3'],
               'description' =>['required','min:5'],
               'PostCreator'=>['required']

          ]);
          $post = Post::find($postId);
          $post->update(
               [
                    'Title' => $request->Title,
                    'description' => $request->description,
                    'user_id' => $request->PostCreator,
               ]
          );
          return to_route('posts.show', $post);
     }
     public function edite($postId)
     {
          $post = Post::find($postId);
          $user = User::all();
          return view('edite', ["post" => $post, 'user' => $user]);
     }


     public function destroy(Post $post)
     {
          $post->delete();
          return to_route('posts.index');
     }

     public function hello()
     {
          ehoc "hellow word"
}
