<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SSS extends Model
{
    protected $tables = 'sss_contributions';

    protected $fillable = [
        'range_of_compensation_from','range_of_compensation_to','salary_credit','employer_share','employee_share','social_security_total','employer_ec_share','employer_share_total','employee_share_total','total_contribution'
    ];
}
