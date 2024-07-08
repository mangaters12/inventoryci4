<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID'); // Menggunakan Faker dengan bahasa Indonesia

        // Daftar nama PT dan Toko yang terlihat asli
        $namaPT = [
            'PT. Sukses Makmur',
            'PT. Jaya Abadi',
            'PT. Sejahtera Bersama',
            'PT. Sentosa Raya',
            'PT. Maju Mundur',
            'PT. Gemilang Jaya',
            'PT. Harapan Baru',
            'PT. Cahaya Abadi',
            'PT. Berkah Utama',
            'PT. Nusantara Jaya',
            'PT. Lintas Utama',
            'PT. Tunas Bangsa',
            'PT. Bumi Persada',
            'PT. Karya Bersama',
            'PT. Prima Sejahtera',
            'PT. Mitra Jaya',
            'PT. Indo Makmur',
            'PT. Agung Perkasa',
            'PT. Cahaya Gemilang',
            'PT. Citra Abadi',
            // Nama toko di LTC Glodok
            'Toko Sinar Jaya',
            'Toko Maju Bersama',
            'Toko Sentosa',
            'Toko Cahaya Teknik',
            'Toko Elektronik Jaya',
            'Toko Mesin Abadi',
            'Toko Komputer Utama',
            'Toko Sukses Elektrik',
            'Toko Alat Listrik',
            'Toko Mekanik Sejahtera',
            'Toko Karya Agung',
            'Toko Teknik Bersama',
            'Toko Pusat Elektrik',
            'Toko Alat Teknik',
            'Toko Jaya Utama',
            'Toko Sinar Gemilang',
            'Toko Makmur Sentosa',
            'Toko Cahaya Mandiri',
            'Toko Maju Jaya',
            'Toko Elektronik Sentosa',
        ];

        // Ambil data materials dari database
        $materialsModel = new \App\Models\MaterialModel();
        $materials = $materialsModel->findAll();

        for ($i = 0; $i < 50; $i++) {
            // Memilih material secara acak
            $material = $materials[array_rand($materials)];

            // Data pesanan
            $data = [
                'custid' => $faker->numberBetween(1000, 9999), // ID Customer acak
                'nama_barang' => $material['nama_barang'], // Nama barang dari tabel materials
                'quantity' => $faker->numberBetween(1, 100), // Jumlah acak
                'nama_customer' => $namaPT[array_rand($namaPT)], // Nama PT atau Toko acak
                'alamat_customer' => $faker->address, // Alamat acak
                'tanggal_pesanan' => $faker->dateTimeThisYear->format('Y-m-d'), // Tanggal acak tahun ini
                'total_harga' => $faker->numberBetween(100000, 10000000), // Total harga acak
            ];

            // Masukkan data ke tabel orders
            $this->db->table('orders')->insert($data);
        }
    }
}
