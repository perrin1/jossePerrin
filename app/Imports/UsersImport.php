<?php

namespace App\Imports;

use App\Models\Medecin;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {

            Medecin::create([
                "nom" => $row[0],
                "prenom" => $row[1],
                "rue" => $row[2],
                "numero" => $row[3],
                "codepostal" => $row[4],
                "localite" => $row[5],
                "telephone" => $row[6],
                "gsm" => $row[7],
                "nomcabinetmedical" => $row[8],
                "sitweb" => $row[9],
                "email" => $row[10],
            ]);


        }
    }
}

