<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThumbsShareController extends Controller
{
    public function oggShare(/* $title, $describe */)
    {
        return '<meta property="og:title" content="Curso Laravel Fullstack - Turma 2024">
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://laravelfullstack.com.br/">
        <meta property="og:description" content="Curso criado para lhe colocar no mercado de trabalho">
        <meta property="og:site_name" content="Laravel Fullstack">
        <meta property="og:image" content="https://laravelfullstack.com.br/public/mestre_laravel.jpg">';
        /*
        <!-- HTML Meta Tags -->
        <title>Aprenda Com os Mestres do Laravel</title>
        <meta name="description" content="Única turma que haverá em 2023. Não perca essa chance de transforma-se também num ninja em Laravel">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://laravelfullstack.com.br/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Aprenda Com os Mestres do Laravel">
        <meta property="og:description" content="Única turma que haverá em 2023. Não perca essa chance de transforma-se também num ninja em Laravel">
        <meta property="og:image" content="https://opengraph.b-cdn.net/production/documents/000de615-1fc1-4da1-9e96-2a0c86ae20c4.jpg?token=xjOQXHRsOluSTrcBtFBOBNEn7GA9hEuNWuo6G3RneTk&height=600&width=400&expires=33247915280">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="laravelfullstack.com.br">
        <meta property="twitter:url" content="https://laravelfullstack.com.br/">
        <meta name="twitter:title" content="Aprenda Com os Mestres do Laravel">
        <meta name="twitter:description" content="Única turma que haverá em 2023. Não perca essa chance de transforma-se também num ninja em Laravel">
        <meta name="twitter:image" content="https://opengraph.b-cdn.net/production/documents/000de615-1fc1-4da1-9e96-2a0c86ae20c4.jpg?token=xjOQXHRsOluSTrcBtFBOBNEn7GA9hEuNWuo6G3RneTk&height=600&width=400&expires=33247915280">

        <!-- Meta Tags Generated via https://www.opengraph.xyz -->
        */
/*
        <!-- MS, fb & Whatsapp -->
        <!-- MS Tile - for Microsoft apps-->
        <meta name="msapplication-TileImage" content="http://www.example.com/image01.jpg">    
        <!-- fb & Whatsapp -->
        <!-- Site Name, Title, and Description to be displayed -->
        <meta property="og:site_name" content="The Rock Photo Studio">
        <meta property="og:title" content="The Rock Photo Studio in Florida">
        <meta property="og:description" content="The best photo studio for your events">
        <!-- Image to display -->
        <!-- Replace   «example.com/image01.jpg» with your own -->
        <meta property="og:image" content="http://www.example.com/image01.jpg">
        <!-- No need to change anything here -->
        <meta property="og:type" content="website" />
        <meta property="og:image:type" content="image/jpeg">
        <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
        <meta property="og:image:width" content="300">
        <meta property="og:image:height" content="300">
        <!-- Website to visit when clicked in fb or WhatsApp-->
        <meta property="og:url" content="http://www.example.com">
*/



    }
}
