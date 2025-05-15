<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index(): string
    {
        return view('Paris');
    }
    public function FilmFavorit(): string
    {
        return view('FilmFavorit');
    }
    public function MataKuliah(): string
    {
        return view('MataKuliah');
    }
    public function MusicFavorit(): string
    {
        return view('MusicFavorit');
    }
    public function Proyek(): string
    {
        return view('Proyek');
    }
    public function tamplate(): string
    {
        return view('tamplate');
    }
     public function tampilanpertama(): string
    {
        return view('tampilanpertama');
    }
     public function tampilankedua(): string
    {
        return view('tampilankedua');
    }
     public function tampilanketiga(): string
    {
        return view('tampilanketiga');
    }
}
