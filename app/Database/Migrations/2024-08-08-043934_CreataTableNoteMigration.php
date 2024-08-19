<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreataTableNoteMigration extends Migration
{
    public function up()
    {
        $this->forge->addField('id');

        $varchar255 = [
            'type' => 'VARCHAR',
            'constraint' => '255',
        ];

        $fields = [
            'title' => $varchar255,
            'content' => $varchar255,
            'created_at' => ['type' => 'TIMESTAMP'],
            'updated_at' => ['type' => 'TIMESTAMP'],
        ];

        $this->forge->addField($fields);
        $this->forge->createTable('notes');
    }

    public function down()
    {
        $this->forge->dropTable('notes', true);
    }
}
