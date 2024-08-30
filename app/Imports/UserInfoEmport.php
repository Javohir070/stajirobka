<?php

namespace App\Imports;

use App\Models\UserInfo;
use Maatwebsite\Excel\Concerns\ToModel;

class UserInfoEmport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UserInfo([
            'firs_name' => $row[0],
            'birthday' => $row[1],
            'gender' => $row[2],
            'jshshri' => $row[3],
            'academic_degree' => $row[4],
            'phone' => +998991234567,
            'certificate' => "yo'q",
        ]);
    }
}
