<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Endereco extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id'=>['type'=>'int', 'auto_increment'=>true, 'null'=>false],

            'cid_ende'=>['type'=>'varchar', 'constraint'=>80, 'null'=>false],

            'rua_ende'=>['type'=>'varchar', 'constraint'=>80, 'null'=>false],

            'num_ende'=>['type'=>'int', 'null'=>false],

            'bairro_ende'=>['type'=>'varchar','constraint'=>60,'null'=>false],

            'complemen_ende'=>['type'=>'varchar','constraint'=>20,'null'=>true]
            ]);

            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('endereco');
    }

    public function down()
    {
        $this->forge->dropTable('endereco');
    }
}
