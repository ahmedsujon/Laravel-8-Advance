<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $post = Http::Post('https://jsonplaceholder.typicode.com/posts/',[
            'userId' => 1,
            'title' => 'New Post Title',
            'body' => 'Post Descriptions'
        ]);
        return $post->json();
    }

    public function show($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }

    public function edit(Client $client)
    {
        //
    }

    public function update(Request $request, Client $client)
    {
        $post = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' => 'Updated Post Title',
            'body' => 'Updated Post Descriptions'
        ]);
        return $post->json();
    }

    public function destroy($id)
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
      
    }
}
