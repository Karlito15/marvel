<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSitemapTable extends Migration
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
            'status' => [
                'type'           => 'SMALLINT',
                'default'        => 200,
                'null'           => false,
                'unique'         => false,
                'unsigned'       => true,
            ],
            'address' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'default'        => null,
                'null'           => false,
                'unique'         => true,
            ],
            'domain' => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
                'default'        => null,
                'null'           => true,
                'unique'         => false,
            ],
            'verified_at' => [
                'type'           => 'datetime',
                'null'           => true,
                'default'        => null,
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
        $this->forge->addPrimaryKey('id');
        // $this->forge->addKey('name');
        $this->forge->addUniqueKey('address');
        $this->forge->createTable('bookmark_sitemaps');
    }

    public function down()
    {
        $this->forge->dropTable('bookmark_sitemaps');
    }
}
