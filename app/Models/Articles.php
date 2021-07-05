<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $table = 'articles';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'article_id';
}
