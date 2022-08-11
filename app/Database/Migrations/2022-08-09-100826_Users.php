<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'userid' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'address1' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'address2' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'city' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'postal' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'province' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'country' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'create_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'update_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('userid');
        $this->forge->addUniqueKey('email');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
