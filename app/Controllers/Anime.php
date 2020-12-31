<?php

namespace App\Controllers;

use App\Models\AnimeModel;

class Anime extends BaseController
{
    protected $animeModel;
    public function __construct()
    {
        //agar dapat digunakan oleh method lain
        $this->animeModel = new AnimeModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Anime List',
            'anime' => $this->animeModel->getAnime()
        ];

        //$komikModel = new $komikModel();

        return view('anime/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Anime',
            'anime' => $this->animeModel->getAnime($slug)
        ];
        return view('anime/detail', $data);
    }
}
