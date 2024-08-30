<?php

namespace App\Imports;

use App\Models\Science;
use Maatwebsite\Excel\Concerns\ToModel;

class ScienceEmport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Science([
            'name' => $row[0],
        ]);
    }
}
