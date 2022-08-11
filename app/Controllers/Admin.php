<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        if ($userid = session()->get('userid')){
            $data = $this->users->where(['userid' => $userid])->first();
            if($data['role'] == "member")
            {
                return redirect()->to(site_url('/'));
            }
        } else {
            return redirect()->to(site_url('/admin/login'));
        }
    }
    public function login()
    {
        if ($userid = session()->get('userid')){
            $data = $this->users->where(['userid' => $userid])->first();
            if($data['role'] == "admin")
            {
                return redirect()->to(site_url('/admin'));
            }
        } else {
            echo "login";
        }
    }
}
