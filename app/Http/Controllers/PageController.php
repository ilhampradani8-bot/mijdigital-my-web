<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    private function getData()
    {
        $data = [
            'promo_text_eng' => '',
            'promo_text_bm' => '',
            'price_personal' => '1500',
            'price_corporate' => '3500',
            'portfolio_items' => []
        ];

        if (File::exists(base_path('data.json'))) {
            $json = json_decode(File::get(base_path('data.json')), true);
            if ($json) {
                $data = array_merge($data, $json);
            }
        }

        $lang = [
            "nav_home" => ["ENG" => "Home", "BM" => "Utama"],
            "nav_about" => ["ENG" => "About Me", "BM" => "Tentang Saya"],
            "nav_services" => ["ENG" => "Services", "BM" => "Servis"],
            "nav_testi" => ["ENG" => "Testimonials", "BM" => "Testimoni"],
            "nav_portfolio" => ["ENG" => "Portfolio", "BM" => "Portfolio"],
            "nav_faq" => ["ENG" => "FAQ", "BM" => "Soalan Lazim"],
            "nav_chat" => ["ENG" => "Chat With Me", "BM" => "Hubungi Saya"]
        ];

        if (File::exists(base_path('lang.json'))) {
            $langJson = json_decode(File::get(base_path('lang.json')), true);
            if ($langJson) {
                $lang = array_merge($lang, $langJson);
            }
        }

        return ['data' => $data, 'lang' => $lang];
    }

    public function index()
    {
        $payload = $this->getData();
        return view('pages.home', array_merge($payload, [
            'pageTitle' => 'MIJ Digital - Professional Web Solutions'
        ]));
    }

    public function portfolio()
    {
        $payload = $this->getData();
        return view('pages.portfolio', array_merge($payload, [
            'pageTitle' => 'Portfolio - MIJ Digital'
        ]));
    }

    public function pricing()
    {
        $payload = $this->getData();
        return view('pages.pricing', array_merge($payload, [
            'pageTitle' => 'Pricing Packages - MIJ Digital'
        ]));
    }

    public function services()
    {
        $payload = $this->getData();
        return view('pages.services', array_merge($payload, [
            'pageTitle' => 'Our Services - MIJ Digital'
        ]));
    }

    public function faq()
    {
        $payload = $this->getData();
        return view('pages.faq', array_merge($payload, [
            'pageTitle' => 'FAQ - MIJ Digital'
        ]));
    }

    public function privacy()
    {
        $payload = $this->getData();
        return view('pages.privacy', array_merge($payload, [
            'pageTitle' => 'Privacy Policy - MIJ Digital'
        ]));
    }

    public function terms()
    {
        $payload = $this->getData();
        return view('pages.terms', array_merge($payload, [
            'pageTitle' => 'Terms of Service - MIJ Digital'
        ]));
    }

    public function cookies()
    {
        $payload = $this->getData();
        return view('pages.cookies', array_merge($payload, [
            'pageTitle' => 'Cookie Policy - MIJ Digital'
        ]));
    }
}
