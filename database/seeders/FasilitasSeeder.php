<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel fasilitas
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('table_fasilitas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Ambil semua ruangan_id yang tersedia
        $ruanganIds = DB::table('table_ruangan')->pluck('id_ruangan')->toArray();

        // Data dummy fasilitas
        $dataFasilitas = [
            [
                'nama_fasilitas' => 'Proyektor Aula Sipil',
                'kode_fasilitas' => 'FSL001',
                'tanggal_pengadaan' => '2020-02-15',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'Mesin CNC',
                'kode_fasilitas' => 'FSL002',
                'tanggal_pengadaan' => '2019-07-10',
                'status' => 'rusak',
            ],
            [
                'nama_fasilitas' => 'Komputer Lab',
                'kode_fasilitas' => 'FSL003',
                'tanggal_pengadaan' => '2021-01-20',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'Papan Tulis Digital',
                'kode_fasilitas' => 'FSL004',
                'tanggal_pengadaan' => '2022-03-12',
                'status' => 'dalam perbaikan',
            ],
            [
                'nama_fasilitas' => 'Printer 3D',
                'kode_fasilitas' => 'FSL005',
                'tanggal_pengadaan' => '2023-06-05',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'Kamera CCTV',
                'kode_fasilitas' => 'FSL006',
                'tanggal_pengadaan' => '2020-08-08',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'AC Ruang Dosen',
                'kode_fasilitas' => 'FSL007',
                'tanggal_pengadaan' => '2021-09-15',
                'status' => 'rusak',
            ],
            [
                'nama_fasilitas' => 'Meja Laboratorium',
                'kode_fasilitas' => 'FSL008',
                'tanggal_pengadaan' => '2018-11-10',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'Scanner Dokumen',
                'kode_fasilitas' => 'FSL009',
                'tanggal_pengadaan' => '2022-12-01',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'Whiteboard',
                'kode_fasilitas' => 'FSL010',
                'tanggal_pengadaan' => '2019-04-25',
                'status' => 'dalam perbaikan',
            ],
            [
                'nama_fasilitas' => 'Mic Wireless',
                'kode_fasilitas' => 'FSL011',
                'tanggal_pengadaan' => '2020-10-20',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'Speaker Ruang Kelas',
                'kode_fasilitas' => 'FSL012',
                'tanggal_pengadaan' => '2021-05-18',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'TV LED',
                'kode_fasilitas' => 'FSL013',
                'tanggal_pengadaan' => '2022-07-01',
                'status' => 'rusak',
            ],
            [
                'nama_fasilitas' => 'UPS Server',
                'kode_fasilitas' => 'FSL014',
                'tanggal_pengadaan' => '2023-01-10',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'Kursi Ergonomis',
                'kode_fasilitas' => 'FSL015',
                'tanggal_pengadaan' => '2020-06-17',
                'status' => 'dalam perbaikan',
            ],
            [
                'nama_fasilitas' => 'Laptop Peminjaman',
                'kode_fasilitas' => 'FSL016',
                'tanggal_pengadaan' => '2022-08-24',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'Switch Jaringan',
                'kode_fasilitas' => 'FSL017',
                'tanggal_pengadaan' => '2021-02-28',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'Kipas Angin',
                'kode_fasilitas' => 'FSL018',
                'tanggal_pengadaan' => '2020-05-19',
                'status' => 'baik',
            ],
            [
                'nama_fasilitas' => 'Genset',
                'kode_fasilitas' => 'FSL019',
                'tanggal_pengadaan' => '2019-12-30',
                'status' => 'dalam perbaikan',
            ],
            [
                'nama_fasilitas' => 'Modul Praktikum',
                'kode_fasilitas' => 'FSL020',
                'tanggal_pengadaan' => '2023-03-05',
                'status' => 'baik',
            ],
        ];

        // Tambahkan id_ruangan secara acak ke setiap entri
        $dataFinal = array_map(function ($item) use ($ruanganIds) {
            $item['ruangan_id'] = fake()->randomElement($ruanganIds); // Laravel >=9
            return $item;
        }, $dataFasilitas);

        // Insert ke database
        DB::table('table_fasilitas')->insert($dataFinal);
    }
}
