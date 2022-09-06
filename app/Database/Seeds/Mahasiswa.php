<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\i18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [[

            'npm' => '2057051019',
            'nama'    => 'Sultan',
            'alamat'    => 'Kedaton',
            'created_at'    => Time::now()
        ],
        [
            'npm' => '2017051076',
            'nama'    => 'Fakhri',
            'alamat'    => 'Kedaton',
            'created_at'    => Time::now()
        ],
        ];
        
        foreach($data_mahasiswa as $data){
            // Using Query Builder
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
