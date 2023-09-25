<?php

namespace App\Helpers;

class CRMS
{

    // public static function uniqueNumberConvertor1111($id, $digit)
    // {
    //     return str_pad($id, $digit, "0", STR_PAD_LEFT);
    // }

    public static function uniqueNumberConvertor($code, $year, $latest_id, $emp_type_id, $desg_id, $ws_id)
    {
        return $code . $year . $latest_id . $desg_id . $ws_id . str_pad($emp_type_id, 3, "0", STR_PAD_LEFT);
    }

}
