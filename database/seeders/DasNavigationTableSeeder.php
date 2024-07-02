<?php

/*
 * File ini bagian dari:
 *
 * OpenDK
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2017 - 2024 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package    OpenDK
 * @author     Tim Pengembang OpenDesa
 * @copyright  Hak Cipta 2017 - 2024 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license    http://www.gnu.org/licenses/gpl.html    GPL V3
 * @link       https://github.com/OpenSID/opendk
 */

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DasNavigationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('das_navigation')->delete();

        DB::table('das_navigation')->insert([
            [
                'id' => 1,
                'parent_id' => '0',
                'name' => 'Beranda',
                'slug' => 'beranda',
                'nav_type' => 'system',
                'url' => '/',
                'order' => 1,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'parent_id' => '0',
                'name' => 'Berita Desa',
                'slug' => 'berita-desa',
                'nav_type' => 'system',
                'url' => '/berita-desa',
                'order' => 2,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'parent_id' => '0',
                'name' => 'Profil',
                'slug' => 'profil',
                'nav_type' => 'system',
                'url' => '/#',
                'order' => 3,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'parent_id' => '0',
                'name' => 'Desa',
                'slug' => 'desa',
                'nav_type' => 'system',
                'url' => '/#',
                'order' => 4,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'parent_id' => '0',
                'name' => 'Potensi',
                'slug' => 'potensi',
                'nav_type' => 'system',
                'url' => '/#',
                'order' => 5,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'parent_id' => '0',
                'name' => 'Statistik',
                'slug' => 'statistik',
                'nav_type' => 'system',
                'url' => '/#',
                'order' => 6,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'parent_id' => '0',
                'name' => 'Unduhan',
                'slug' => 'unduhan',
                'nav_type' => 'system',
                'url' => '/#',
                'order' => 7,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'parent_id' => 3,
                'name' => 'Sejarah',
                'slug' => 'profil-sejarah',
                'nav_type' => 'system',
                'url' => '/profil/sejarah',
                'order' => 1,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'parent_id' => 3,
                'name' => 'Letak Geografis',
                'slug' => 'profil-letak-geografis',
                'nav_type' => 'system',
                'url' => '/profil/letak-geografis',
                'order' => 2,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'parent_id' => 3,
                'name' => 'Struktur Pemerintahan',
                'slug' => 'profil-struktur-pemerintahan',
                'nav_type' => 'system',
                'url' => '/profil/struktur-pemerintahan',
                'order' => 3,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'parent_id' => 3,
                'name' => 'Visi & Misi',
                'slug' => 'profil-visi-misi',
                'nav_type' => 'system',
                'url' => '/profil/visi-misi',
                'order' => 4,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'parent_id' => 6,
                'name' => 'Penduduk',
                'slug' => 'statistik-penduduk',
                'nav_type' => 'system',
                'url' => '/statistik/kependudukan',
                'order' => 1,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'parent_id' => 6,
                'name' => 'Pendidikan',
                'slug' => 'statistik-pendidikan',
                'nav_type' => 'system',
                'url' => '/statistik/pendidikan',
                'order' => 2,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'parent_id' => 6,
                'name' => 'Kesehatan',
                'slug' => 'statistik-kesehatan',
                'nav_type' => 'system',
                'url' => '/statistik/kesehatan',
                'order' => 3,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'parent_id' => 6,
                'name' => 'Program dan Bantuan',
                'slug' => 'statistik-program-bantuan',
                'nav_type' => 'system',
                'url' => '/statistik/program-dan-bantuan',
                'order' => 4,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'parent_id' => 6,
                'name' => 'Anggaran dan Realisasi',
                'slug' => 'statistik-anggaran-realisasi',
                'nav_type' => 'system',
                'url' => '/statistik/anggaran-dan-realisasi',
                'order' => 5,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 17,
                'parent_id' => 6,
                'name' => 'Anggaran Desa',
                'slug' => 'statistik-anggaran-desa',
                'nav_type' => 'system',
                'url' => '/statistik/anggaran-desa',
                'order' => 6,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 18,
                'parent_id' => 7,
                'name' => 'Prosedur',
                'slug' => 'unduhan-prosedur',
                'nav_type' => 'system',
                'url' => '/unduhan/prosedur',
                'order' => 1,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 19,
                'parent_id' => 7,
                'name' => 'Regulasi',
                'slug' => 'unduhan-regulasi',
                'nav_type' => 'system',
                'url' => '/unduhan/regulasi',
                'order' => 2,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 20,
                'parent_id' => 7,
                'name' => 'Dokumen',
                'slug' => 'unduhan-form-dokumen',
                'nav_type' => 'system',
                'url' => '/unduhan/form-dokumen',
                'order' => 3,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 21,
                'parent_id' => '0',
                'name' => 'FAQ',
                'slug' => 'faq',
                'nav_type' => 'system',
                'url' => '/faq',
                'order' => 8,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
