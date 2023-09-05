<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    use HasFactory;

    protected $fillable = [
        'to',
        'subject',
        'title',
        'body',
        'attachments',
        'sent',
        'priority'
    ];
}
