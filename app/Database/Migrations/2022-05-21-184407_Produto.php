<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'int', 'auto_increment'=>true, 'null'=>false],
            'nome_prod'=>['type'=>'varchar', 'constraint'=>220, 'null'=>false],
            'preco_prod'=>['type'=>'double', 'null'=>false],
            'quant_prod'=>['type'=>'int', 'null'=>false],
            'desc_prod'=>['type'=>'text','null'=>true]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('produto');
    }

    public function down()
    {
        $this->forge->dropTable('produto');
    }
}
