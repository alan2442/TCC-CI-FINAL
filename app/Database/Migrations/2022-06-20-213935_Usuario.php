<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'int', 'auto_increment'=>true, 'null'=>false],
            'email_usu'=>['type'=>'varchar', 'constraint'=>60, 'null'=>false],
            'nome_usu'=>['type'=>'varchar', 'constraint'=>60, 'null'=>false],
            'senha_usu'=>['type'=>'varchar', 'constraint'=>20, 'null'=>false],
            'cpf_usu'=>['type'=>'char', 'constraint'=>11, 'null'=>false],
            'ende_usu'=>['type'=>'int', 'null'=>false]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('ende_usu', 'endereco', 'id');
        $this->forge->createTable('usuario');
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}
