<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Portfolio;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\File;

class AdminDashboard extends Component
{
    use WithFileUploads;

    public $activeTab = 'dashboard';
    public $password = '';
    public $isAuthenticated = false;

    // Site Settings fields
    public $promo_text_eng = '';
    public $promo_text_bm = '';
    public $price_personal = '1500';
    public $price_personal_old = '2000';
    public $price_corporate = '3500';
    public $price_corporate_old = '5000';

    // Portfolio Form
    public $portfolio_items = [];
    public $new_name = '';
    public $new_role = '';
    public $new_link = '';
    public $new_image = null;

    public $flashMessage = '';
    public $flashType = 'success';

    public function mount()
    {
        $this->loadSettings();
        $this->loadPortfolio();
    }

    public function login()
    {
        $adminPassword = env('ADMIN_PASSWORD', 'mij123');
        if ($this->password === $adminPassword) {
            $this->isAuthenticated = true;
            $this->setFlash('Login successful!', 'success');
        } else {
            $this->setFlash('Invalid password!', 'error');
        }
    }

    public function loadSettings()
    {
        if (File::exists(base_path('data.json'))) {
            $data = json_decode(File::get(base_path('data.json')), true);
            if ($data) {
                $this->promo_text_eng = $data['promo_text_eng'] ?? '';
                $this->promo_text_bm = $data['promo_text_bm'] ?? '';
                $this->price_personal = $data['price_personal'] ?? '1500';
                $this->price_corporate = $data['price_corporate'] ?? '3500';
            }
        }
    }

    public function loadPortfolio()
    {
        if (File::exists(base_path('data.json'))) {
            $data = json_decode(File::get(base_path('data.json')), true);
            if ($data && isset($data['portfolio_items'])) {
                $this->portfolio_items = $data['portfolio_items'];
            }
        }
    }

    public function saveSettings()
    {
        $data = [];
        if (File::exists(base_path('data.json'))) {
            $data = json_decode(File::get(base_path('data.json')), true) ?: [];
        }

        $data['promo_text_eng'] = $this->promo_text_eng;
        $data['promo_text_bm'] = $this->promo_text_bm;
        $data['price_personal'] = $this->price_personal;
        $data['price_corporate'] = $this->price_corporate;
        $data['portfolio_items'] = $this->portfolio_items;

        File::put(base_path('data.json'), json_encode($data, JSON_PRETTY_PRINT));

        // Sync with database if migrated
        SiteSetting::set('promo_text_eng', $this->promo_text_eng);
        SiteSetting::set('promo_text_bm', $this->promo_text_bm);
        SiteSetting::set('price_personal', $this->price_personal);
        SiteSetting::set('price_corporate', $this->price_corporate);

        $this->setFlash('✅ Data Berhasil Disimpan!', 'success');
    }

    public function addPortfolioItem()
    {
        $imagePath = 'hero.jpg';

        if ($this->new_image) {
            $filename = 'porto_' . time() . '_' . rand(100, 999) . '.' . $this->new_image->getClientOriginalExtension();
            $this->new_image->storeAs('uploads', $filename, 'public');
            $imagePath = 'uploads/' . $filename;
        }

        $this->portfolio_items[] = [
            'name' => $this->new_name ?: 'New Project',
            'role' => $this->new_role ?: 'Web Development',
            'link' => $this->new_link ?: 'https://mijdigital.my',
            'images' => [$imagePath]
        ];

        $this->new_name = '';
        $this->new_role = '';
        $this->new_link = '';
        $this->new_image = null;

        $this->saveSettings();
        $this->setFlash('✅ New project added!', 'success');
    }

    public function removePortfolioItem($index)
    {
        if (isset($this->portfolio_items[$index])) {
            array_splice($this->portfolio_items, $index, 1);
            $this->saveSettings();
            $this->setFlash('🗑 Project removed!', 'success');
        }
    }

    private function setFlash($message, $type = 'success')
    {
        $this->flashMessage = $message;
        $this->flashType = $type;
    }

    public function render()
    {
        return view('livewire.admin-dashboard')->layout('layouts.app', ['pageTitle' => 'MIJ Admin Dashboard']);
    }
}
