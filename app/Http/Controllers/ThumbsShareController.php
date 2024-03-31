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
/*
    <meta charset="utf-8">
    <meta name="language" content="">
    <title>chamada</title>
    <meta name="description" content="minha descrição">
    <meta name="robots" content="all">
    <meta name="author" content="daniels hogans">
    <meta name="keywords" content="">

    <meta property="og:type" content="page">
    <meta property="og:url" content="laravelfullstack.cm.br">
    <meta property="og:title" content="chamada">
    <meta property="og:image" content="https://laravelfullstack.com.br/public/mestre_laravel.jpg">
    <meta property="og:description" content="sute a para texto ate como aparece no twitter">

    <meta property="article:author" content="">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:title" content="chamada">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:description" content="sute a para texto ate como aparece no twitter">


*/
/*
<meta property="og:site_name" content="Colby Fayock" />
<meta property=“og:title” content=“Anyone Can Map! Inspiration and an introduction to the world of mapping - Colby Fayock" />
<meta property="og:description" content="Chef Gusteau was a visionary who created food experiences for the world to enjoy. How can we take his lessons and apply them to the world of…" />
<meta property="og:url" content="https://www.colbyfayock.com/2020/03/anyone-can-map-inspiration-and-an-introduction-to-the-world-of-mapping/" />
<meta property="og:type" content="article" />
<meta property="article:publisher" content="https://www.colbyfayock.com" />
<meta property="article:section" content="Coding" />
<meta property="article:tag" content="Coding" />
<meta property="og:image" content="https://res.cloudinary.com/fay/image/upload/w_1280,h_640,c_fill,q_auto,f_auto/w_860,c_fit,co_rgb:232129,g_west,x_80,y_-60,l_text:Source%20Sans%20Pro_70_line_spacing_-10_semibold:Anyone%20Can%20Map!%20Inspiration%20and%20an%20introduction%20to%20the%20world%20of%20mapping/blog-social-card-1.1" />
<meta property="og:image:secure_url" content="https://res.cloudinary.com/fay/image/upload/w_1280,h_640,c_fill,q_auto,f_auto/w_860,c_fit,co_rgb:232129,g_west,x_80,y_-60,l_text:Source%20Sans%20Pro_70_line_spacing_-10_semibold:Anyone%20Can%20Map!%20Inspiration%20and%20an%20introduction%20to%20the%20world%20of%20mapping/blog-social-card-1.1" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="640" />
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:image" content="https://res.cloudinary.com/fay/image/upload/w_1280,h_640,c_fill,q_auto,f_auto/w_860,c_fit,co_rgb:232129,g_west,x_80,y_-60,l_text:Source%20Sans%20Pro_70_line_spacing_-10_semibold:Anyone%20Can%20Map!%20Inspiration%20and%20an%20introduction%20to%20the%20world%20of%20mapping/blog-social-card-1.1" />
<meta property="twitter:site" content="@colbyfayock" />

*/


    }
}
