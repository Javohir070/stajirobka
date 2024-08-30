<?php

namespace App\Imports;

use App\Models\Higherorganization;
use Maatwebsite\Excel\Concerns\ToModel;

class HigherorganizationEmport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Higherorganization([
            'name' => $row[0],
        ]);
    }
}
