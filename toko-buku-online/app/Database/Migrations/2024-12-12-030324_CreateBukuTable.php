<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBukuTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'judul' => [
                    'type'      => 'VARCHAR',
                    'constraint'=> 250
                ],
                'pengarang' => [
                    'type'      => 'VARCHAR',
                    'constraint'=> 250
                ],
                'penerbit' => [
                    'type'      => 'VARCHAR',
                    'constraint'=> 250
                ],
                'tahun' => [
                    'type'      => 'VARCHAR',
                    'constraint'=> 5
                ],
                'thumnail_url' => [
                    'type'      => 'VARCHAR',
                    'constraint'=> 250
                ]
            ]
            
        );
        $this->forge->addKey('id', true);
        $this->forge->createTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
