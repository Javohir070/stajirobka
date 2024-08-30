<?php

namespace App\Imports;

use App\Models\InternshipFile;
use Maatwebsite\Excel\Concerns\ToModel;

class InternshipFileEmport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new InternshipFile([
            //
        ]);
    }
}
