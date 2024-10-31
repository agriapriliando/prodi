<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodis')->insert([
            // default isian
            [
                'id' => 1,
                'nama_prodi' => 'Manajemen Pendidikan Kristen',
                'jenjang' => 'S1',
                'upps' => 'Fakultas Keguruan dan Ilmu Pendidikan Kristen',
                'slug' => 's1mpk',
            ]
        ]);
    }
}
