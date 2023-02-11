<?php

namespace Database\Seeders;

use App\Models\Storage;
use Illuminate\Database\Seeder;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::create([
            'name' => 'Fuar İzmir Toplama Merkezi',
            'slug' => 'fuar-izmir-toplama-merkezi',
            'opening_time' => '09:00',
            'closing_time' => '00:00',
            'description' => 'Akşam 9 dan Sonra Malzeme Kabulü Yapmamaktayız',
            'address' => 'Zafer SB Mah. Şht. Süleyman Ergin Cad. No:2 Gaziemir',
            'country' => 'Türkiye',
            'city' => 'İzmir'
        ]);
    }
}
