<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Rak;
use App\Models\Anggota;
use App\Models\Petugas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Anggota::create([
            "kode_anggota" => "123456789",
            "nama_anggota" => "Fadiyah Irbati",
            "jk_anggota" => "P",
            "jurusan_anggota" => "RPL",
            "no_telp_anggota" => "081212098897",
            "alamat_anggota" => "Asem Manis"
        ]);

        Anggota::create([
            "kode_anggota" => "123456788",
            "nama_anggota" => "Fadiyah Gaol",
            "jk_anggota" => "L",
            "jurusan_anggota" => "AKL",
            "no_telp_anggota" => "087812069897",
            "alamat_anggota" => "Pete Keselek"
        ]);
        
        Petugas::create([
            "nama_petugas" => "Fadiyarll",
            "jabatan_petugas" => "CEO Perpus",
            "no_telp_petugas" => "081312069899",
            "alamat_petugas" => "Ada Disini"
        ]);
        
        Petugas::create([
            "nama_petugas" => "Ifryshlad",
            "jabatan_petugas" => "Operator",
            "no_telp_petugas" => "081312069877",
            "alamat_petugas" => "Ada Dimari"
        ]);

        Buku::create([
            "kode_buku" => "12345",
            "judul_buku" => "Cara Menginstall Office",
            "penulis_buku" => "Fadiyah Irbati",
            "penerbit_buku" => "Genbook",
            "tahun_penerbit" => "2022",
            "stok" => 30
        ]);

        Buku::create([
            "kode_buku" => "12346",
            "judul_buku" => "Cara Mengenali Diri Sendiri",
            "penulis_buku" => "Fadiyah Irbati",
            "penerbit_buku" => "Genbook",
            "tahun_penerbit" => "2023",
            "stok" => 40
        ]);
        
        Rak::create([
            "nama_rak" => "IT",
            "lokasi_rak" => "lt-3",
            "buku_id" => 1
        ]);

        Rak::create([
            "nama_rak" => "Self Love",
            "lokasi_rak" => "lt-2",
            "buku_id" => 2
        ]);

        Peminjaman::create([
            "tanggal_pinjam" =>  "2023-10-05",
            "tanggal_kembali" => "2023-10-05",
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 1,
        ]);

        Peminjaman::create([
            "tanggal_pinjam" =>  "2023-10-02",
            "tanggal_kembali" => "2023-10-02",
            "buku_id" => 2,
            "anggota_id" => 2,
            "petugas_id" => 2,
        ]);

        Pengembalian::create([
            "tanggal_pengembalian" => "2023-10-05",
            "denda" => 20000,
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 1
        ]);
        
        Pengembalian::create([
            "tanggal_pengembalian" => "2023-10-02",
            "denda" => 20000,
            "buku_id" => 2,
            "anggota_id" => 2,
            "petugas_id" => 2
        ]);


    }
}
