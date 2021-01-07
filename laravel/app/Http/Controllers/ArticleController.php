<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        for ($i = 1; $i <= 4; $i++) {
            $articles[] =
                (object) [
                    'id' => $i,
                    'title' => 'タイトル' . $i,
                    'body' => '本文' . $i,
                    'created_at' => now(),
                    'user' => (object) [
                        'id' => $i,
                        'name' => 'ユーザー名' . $i,
                    ],
                ];
        }
        return view('articles.index', ['articles' => $articles]);
    }
}