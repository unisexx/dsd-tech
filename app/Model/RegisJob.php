<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class RegisJob extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'regis_job';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'idn';


    
    public function dept()
    {
        return $this->hasOne('App\Model\RegisJobDept', 'site', 'site');
    }
}
