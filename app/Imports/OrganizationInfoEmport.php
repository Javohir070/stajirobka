<?php

namespace App\Imports;

use App\Models\OrganizationInfo;
use Maatwebsite\Excel\Concerns\ToModel;

class OrganizationInfoEmport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new OrganizationInfo([
            'yuq_tashkilot' => $row[0],
            'organization_type' => $row[1],
            'tashkilot' => $row[2],
            'position' => $row[3],
            'STIR' => $row[4],
            'region' => $row[5],
            'user_info_id' => $row[6],
            'order_number' => 1,
            
        ]);
    }
}
