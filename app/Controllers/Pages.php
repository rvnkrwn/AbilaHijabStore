<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'name'  => $this->name,
            'menus' => $this->menus->findAll(),
            'user'  => $this->users->where(['userid' => session()->get('userid')])->first()
        ];
        return view('index',$data);
    }
    public function product()
    {
        $data = [
            'name'  => $this->name,
            'menus' => $this->menus->findAll(),
            'user'  => $this->users->where(['userid' => session()->get('userid')])->first()
        ];
        return view('product',$data);
    }
    public function flashSale()
    {
        $data = [
            'name'  => $this->name,
            'menus' => $this->menus->findAll(),
            'user'  => $this->users->where(['userid' => session()->get('userid')])->first()
        ];
        return view('flashSale',$data);
    }
    public function detail($slug)
    {
        $data = [
            'name'  => $this->name,
            'menus' => $this->menus->findAll(),
            'user'  => $this->users->where(['userid' => session()->get('userid')])->first()
        ];
        return view('detail',$data);
    }
    public function about()
    {
        $data = [
            'name'  => $this->name,
            'menus' => $this->menus->findAll(),
            'user'  => $this->users->where(['userid' => session()->get('userid')])->first()
        ];
        return view('about',$data);
    }
    public function login()
    {
        if (session()->get('userid')){
            return redirect()->to(base_url());
        }
        $data = [
            'name'  => $this->name,
            'menus' => $this->menus->findAll(),
            'user'  => $this->users->where(['userid' => session()->get('userid')])->first()
        ];
        return view('login',$data);
    }
    public function register()
    {
        if (session()->get('userid')){
            return redirect()->to(base_url());
        }
        $data = [
            'name' => $this->name,
            'menus' => $this->menus->findAll(),
            'user'  => $this->users->where(['userid' => session()->get('userid')])->first()
        ];
        return view('register',$data);
    }
    public function logout()
    {
        session()->start();
        session()->destroy();
        return redirect()->to(site_url(''));
    }
}
