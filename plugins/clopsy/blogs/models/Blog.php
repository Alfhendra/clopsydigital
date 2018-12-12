<?php namespace Clopsy\Blogs\Models;

use Model;

/**
 * Model
 */
class Blog extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'clopsy_blogs_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
