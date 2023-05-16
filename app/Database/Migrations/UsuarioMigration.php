<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuarioMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'apellido' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'pass' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'perfil_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'fecha_alta' => [
                'type'       => 'DATE',
            ],
            'fecha_modificacion' => [
                'type'       => 'DATE',
                'default' => null,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('usuario');
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}
