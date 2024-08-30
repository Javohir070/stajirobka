<?php

namespace App\Imports;

use App\Models\InternshipInfo;
use Maatwebsite\Excel\Concerns\ToModel;

class InternshipInfoEmport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new InternshipInfo([
            'user_info_id' => $row[0],
            'order_number' => 1,
            'selection_type' => $row[1],
            'selection_year' => $row[10],
            'year_funded' => $row[1],
            'year_of_dispatch' => $row[1],
            'xorijiy_mamlakat' => $row[3],
            'stajirovka_yon' => $row[5],
            'receiving_organization' => $row[4],
            'practice_topic' => $row[5],
            'start_date' => $row[6],
            'end_date' => $row[7],
            'age' => $row[8],
        ]);
    }
}
