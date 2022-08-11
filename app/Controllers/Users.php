<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class Users extends BaseController
{
    /**
     * @throws \Exception
     */
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }


    public function register()
    {
        if (session()->get('userid')){
            return redirect()->to(base_url());
        }
        $userid     =   rand();
        $name       =   $this->request->getVar('name');
        $email      =   $this->request->getVar('email');
        $password   =   $this->request->getVar('password');
        $password   =   password_hash($password,PASSWORD_DEFAULT);
        $data = [
            'userid'    =>  $userid,
            'name'      =>  $name,
            'email'     =>  $email,
            'password'  =>  $password,
            'address1'  =>  "",
            'address2'  =>  "",
            'city'      =>  "",
            'postal'    =>  "",
            'province'  =>  "",
            'country'   =>  "",
            'phone'     =>  "",
            'role'      =>  "member",
            'create_at' =>  Time::now('Asia/Jakarta'),
            'update_at' =>  Time::now('Asia/Jakarta'),
        ];
        $save = $this->users->insert($data);
        if ($save)
        {
            return redirect()->to("login")->with("status","<small class='block text-xs text-green-500 mx-auto text-center my-2'>Successfully registered please login</small>")->with("email",$email);
        } else {
            return redirect()->to("register")->with("status","<small class='block text-xs text-red-500 mx-auto text-center my-2'>Failed to register please try again</small>")->with("name",$name);
        }
    }

    public function login()
    {
        if (session()->get('userid')){
            return redirect()->to(base_url());
        }
        $email      =   $this->request->getVar('email');
        $password   =   $this->request->getVar('password');
        if ($data = $this->users->where(['email' => $email])->first())
        {
            if (password_verify($password,$data['password'])){
                $sesi = [
                    'userid'    => $data['userid'],
                ];
                $this->session->set($sesi);
                return redirect()->to('/');
            } else {
                return redirect()->to("login")->with("status","<small class='block text-xs text-yellow-500 mx-auto text-center my-2'>The password you entered is wrong</small>")->with('email',$email);
            }
        } else {
            return redirect()->to("login")->with("status","<small class='block text-xs text-red-500 mx-auto text-center my-2'>This email is not registered</small>");
        }
    }
}
