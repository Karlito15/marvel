<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTagTable extends Migration
{
    protected $DBGroup = 'default';

    //--------------------------------------------------------------------

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true,
                'null'           => false,
                'unique'         => true,
                'unsigned'       => true,
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
                'null'           => false,
                'unique'         => true,
            ],
            'slug' => [
                'type'           => 'VARCHAR',
                'constraint'     => 96,
                'null'           => false,
                'unique'         => true,
            ],
            'created_at' => [
                'type'           => 'datetime',
            ],
            'updated_at' => [
                'type'           => 'datetime',
            ],
            'deleted_at' => [
                'type'           => 'datetime',
                'null'           => true,
                'default'        => null,
            ],
        ]);
        // Keys help optimize database performance; we'll add some for fields we are likely to search or filter by
        // $this->forge->addKey('name');
        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('name');
        $this->forge->createTable('bookmark_tags');
    }

    public function down()
    {
        $this->forge->dropTable('bookmark_tags');
    }
}
