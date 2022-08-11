<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenusSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "value" => "Beranda",
                "link" => "/"
            ],
            [
                "value" => "Produk",
                "link" => "/products"
            ],
            [
                "value" => "Tentang Kami",
                "link" => "/about",
            ],
        ];
        $this->db->table("menus")->insertBatch($data);
    }
}
