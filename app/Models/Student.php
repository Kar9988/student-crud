<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * @package App\Models
 */
class Student extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'students';

    /**
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'age',
    ];
}
