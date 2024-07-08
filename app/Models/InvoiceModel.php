<?php

namespace App\Models;

use CodeIgniter\Model;

class InvoiceModel extends Model
{
    protected $table = 'invoices';
    protected $primaryKey = 'id';
    protected $allowedFields = ['custid', 'nama_barang', 'quantity', 'nama_customer', 'alamat_customer', 'tanggal_pesanan', 'total_harga', 'created_at', 'updated_at'];
}
