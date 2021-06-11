<?php
namespace App\Http\Repositories;

use App\Models\Article;

class ArticleRepository
{

    public function getArticleBySlug($slug)
    {
        // Post for slug with user, tags and categories
        $article = Article::with(
            'author:id,pseudonyme',
        )
            ->whereSlug($slug)
            ->firstOrFail();

        return $article;
    }

    public function uploadImage($file, $request){
        $file_path = $file->getPathName();
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://api.imgur.com/3/image', [
            'headers' => [
                'authorization' => 'Client-ID ' . '86edcf523247385',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'image' => base64_encode(file_get_contents($request->file('image')->path($file_path)))
            ],
        ]);
        return  $data['file'] = data_get(response()->json(json_decode(($response->getBody()->getContents())))->getData(), 'data.link');
    }

    public function search($n, $search)
    {
        return Article::where(function ($q) use ($search) {
                $q->Where('content', 'like', "%$search%")
                    ->orWhere('title', 'like', "%$search%");
            })->paginate($n);
    }

}
