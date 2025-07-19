<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUrlTable extends Migration
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
            'scheme' => [
                'type'           => 'VARCHAR',
                'constraint'     => 8,
                'default'        => 'https',
                'null'           => true,
                'unique'         => false,
            ],
            'host' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'default'        => null,
                'null'           => false,
                'unique'         => false,
            ],
            'path' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'default'        => null,
                'null'           => true,
                'unique'         => false,
            ],
            'query' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'default'        => null,
                'null'           => true,
                'unique'         => false,
            ],
            'fragment' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'default'        => null,
                'null'           => true,
                'unique'         => false,
            ],
            'tld' => [
                'type'           => 'VARCHAR',
                'constraint'     => 8,
                'default'        => 'com',
                'null'           => true,
                'unique'         => false,
            ],
            'suffix' => [
                'type'           => 'VARCHAR',
                'constraint'     => 8,
                'default'        => 'com',
                'null'           => true,
                'unique'         => false,
            ],
            'domain' => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
                'default'        => null,
                'null'           => true,
                'unique'         => false,
            ],
            'subdomain' => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
                'default'        => null,
                'null'           => true,
                'unique'         => false,
            ],
            'registerable' => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
                'default'        => null,
                'null'           => true,
                'unique'         => false,
            ],
            'title_default' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true,
                'default'        => null,
            ],
            'title_custom' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true,
                'default'        => null,
            ],
            'saved_at' => [
                'type'           => 'datetime',
                'null'           => true,
                'default'        => null,
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
        $this->forge->createTable('bookmark_urls');
    }

    public function down()
    {
        $this->forge->dropTable('bookmark_urls');
    }
}
