<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        //create column in table
        $this->forge->addField([
                'id' => ['type' => 'INT','usigned'=>true, 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
                'uuid' => ['type'=> 'VARCHAR', 'constraint' => 100],
                'name' => ['type' => 'VARCHAR','constraint' => 255],
                'email' => ['type' => 'VARCHAR','constraint' => 255],
                'password' => ['type' => 'VARCHAR','constraint' => 255],
                'created_at datetime default current_timestamp',
                'updated_at datetime default current_timestamp',
            ]);

        $this->forge->addKey('id',true);

        // create table
        $this->forge->createTable('users', true);

    }

    public function down()
    {
        //create delete table
        $this->forge->dropTable('users');
    }
}
