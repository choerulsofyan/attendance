<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            array('name' => 'Dosen', 'description' => 'Dosen pengajar LPKIA'), 
            array('name' => 'Staff', 'description' => 'Staff karyawan LPKIA'), 
            array('name' => 'B.A.A', 'description' => ''), 
        ];

        foreach ($positions as $position) {
            Position::create($position);
        }
    }
}
