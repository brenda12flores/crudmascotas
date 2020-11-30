<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TMascotas extends Migration
{
	
        public function up()
        {
                $this->forge->addField([
                        'id_mascota'            => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nombre'    		     => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '200',
                        ],
                        'tipo' 		  		     => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',

                        ],
                        'nombrep'               =>[
                        		'type'          =>'VARCHAR',
                        		'constraint'    =>'250', 
                        ],

                ]);
                $this->forge->addKey('id_mascota', true);
                $this->forge->createTable('t_mascotas');
        }

        public function down()
        {
                $this->forge->dropTable('t_mascotas');
        }
}
