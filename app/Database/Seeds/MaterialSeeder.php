<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class MaterialSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID'); // Gunakan Faker dengan bahasa Indonesia

        // Daftar material berdasarkan kategori yang diinginkan
        $materials = [
            // General Tools
            'Cangkir (Pliers)',
            'Obeng (Screwdriver)',
            'Obeng (Wrench)',
            'Palu (Hammer)',
            'Paku (Tape Measure)',
            'Level (Level)',
            'Pensil (Pencil)',
            'Penghapus (Eraser)',
            'Kacamata Safety (Safety Glasses)',
            'Sumber Cahaya Kerja (Work Light)',

            // Cutting Tools
            'Gergaji (Saw)',
            'Pisau (Knife)',
            'Gunting (Scissors)',
            'Gulung Kunci (Bolt Cutter)',
            'Pemotong Kabel (Wire Cutters)',

            // Fastening Tools
            'Bor (Drill)',
            'Obeng Socket (Socket Wrench)',
            'Obeng Allen (Allen Wrench)',
            'Obeng Ratchet (Ratchet Wrench)',

            // Measuring Tools
            'Penggaris (Ruler)',
            'Ukuran Caliper (Calipers)',
            'Mikrometer (Micrometer)',
            'Termometer (Thermometer)',

            // Testing Tools
            'Multimeter (Multimeter)',
            'Oscilloscope (Oscilloscope)',
            'Perajang Kabel (Wire Tester)',

            // Hand Tools
            'Set Obeng (Wrench Set)',
            'Set Obeng Socket (Socket Set)',
            'Alat Dorong (Prying Tool)',
            'Alat Ukur Tekanan Ban (Tire Pressure Gauge)',

            // Power Tools
            'Mesin Bor Presisi (Drill Press)',
            'Mesin Penggiling (Grinder)',
            'Mesin Amplas (Sander)',
            'Gergaji Iris (Circular Saw)',

            // Specialized Tools
            // Automotive Tools
            'Kompresor Udara (Air Compressor)',
            'Kit Pelumasan Rem (Brake Bleeding Kit)',
            'Alat Bersih Injektor Bahan Bakar (Fuel Injector Cleaner)',
            // Electrical Tools
            'Pengupas Kabel (Wire Stripper)',
            'Alat Dorong Kaki Kabel (Wire Nut Driver)',
        ];

        // Loop untuk menyuntikkan data ke dalam database
        for ($i = 0; $i < 20; $i++) {
            $data = [
                'nama_barang' => $materials[$faker->numberBetween(0, count($materials) - 1)], // Memilih secara acak dari daftar material
                'stok_barang' => $faker->numberBetween(1, 100),
            ];

            $this->db->table('materials')->insert($data);
        }
    }
}
