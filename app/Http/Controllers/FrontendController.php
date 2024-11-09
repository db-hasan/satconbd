<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home() {
        return view('frontend.home');
    }
    public function about() {
        return view('frontend.about');
    }
    public function contact() {
        return view('frontend.contact');
    }
    public function service() {
        return view('frontend.service');
    }
    public function package() {
        return view('frontend.package');
    }
    public function media() {
        return view('frontend.media');
    }
    public function corporate() {
        return view('frontend.corporate');
    }
}
