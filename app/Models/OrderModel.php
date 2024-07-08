<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders'; // Nama tabel di database

    protected $primaryKey = 'id'; // Primary key dari tabel

    protected $allowedFields = ['custid', 'nama_barang', 'quantity', 'nama_customer', 'alamat_customer', 'tanggal_pesanan', 'total_harga']; // Kolom yang diizinkan untuk diisi

    protected $useTimestamps = true; // Mengaktifkan penggunaan fields created_at dan updated_at

    protected $createdField = 'created_at'; // Nama field untuk timestamp created_at

    protected $updatedField = 'updated_at'; // Nama field untuk timestamp updated_at
}
