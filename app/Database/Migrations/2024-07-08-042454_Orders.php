<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrders extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'custid' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'nama_customer' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'alamat_customer' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'tanggal_pesanan' => [
                'type' => 'DATE',
            ],
            'total_harga' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('custid', 'customers', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
