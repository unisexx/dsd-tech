<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class RegisJobScore extends Model
{
    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'regis_job_score';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'idnn';



    protected $fillable = ['score','commentt','idn'];
}
