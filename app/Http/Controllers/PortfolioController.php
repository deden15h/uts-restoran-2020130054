<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $carousels = [
            ["url" => "https://source.unsplash.com/user/erondu/900x300", "width" => "900", "height" => "300"],
            ["url" => "https://source.unsplash.com/user/charlesdeluvio/900x300", "width" => "900", "height" => "300"],
            ["url" => "https://source.unsplash.com/user/danielkorpai/900x300", "width" => "900", "height" => "300"]];
        return view('products', compact('carousels'));


        return view('products');
    }
}

class TestimonialsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $carousels = [
            ["url" => "https://source.unsplash.com/user/erondu/900x300", "width" => "900", "height" => "300"],
            ["url" => "https://source.unsplash.com/user/charlesdeluvio/900x300", "width" => "900", "height" => "300"],
            ["url" => "https://source.unsplash.com/user/danielkorpai/900x300", "width" => "900", "height" => "300"]];
        return view('testimonials', compact('carousels'));


        return view('testimonials');
    }
}

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $carousels = [
            ["url" => "https://source.unsplash.com/user/erondu/900x300", "width" => "900", "height" => "300"],
            ["url" => "https://source.unsplash.com/user/charlesdeluvio/900x300", "width" => "900", "height" => "300"],
            ["url" => "https://source.unsplash.com/user/danielkorpai/900x300", "width" => "900", "height" => "300"]];
        return view('about', compact('carousels'));


        return view('about');
    }
}

