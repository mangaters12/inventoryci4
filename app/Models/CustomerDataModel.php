<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerDataModel extends Model
{
    protected $table = 'customer_data'; // Nama view di database

    protected $primaryKey = 'id'; // Primary key dari view

    // Kolom yang ada di view
    protected $allowedFields = ['id', 'custid', 'nama_customer', 'alamat_customer', 'tanggal_pesanan'];
}
