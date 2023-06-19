<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke(Request $request)
    {
        $pageTitle = 'My Profile';
        $namaa = 'Laily Niswatin Rachmawati';
        $email = 'lailynswtn@gmail.com';
        $instagram = 'niswatinlaily';
        $desc = 'Hi everyone! You can call me Laily. I am 20 years old. I am 
        Kpopers, I like NCT song 
        Besides, I love learning new things';

        return view(('profile'), [
            'pageTitle' => $pageTitle,
            'namaa' => $namaa,
            'email' => $email,
            'instagram' => $instagram,
            'desc' => $desc,
        ]);
    }};