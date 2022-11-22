<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mp3 extends Model
{
    use HasFactory;

    protected $fillable = ['source_disk', 'source_path', 'dest_path', 'dest_disk', 'duration'];

    protected $casts = [
        'duration' => 'decimal:4'
    ];

    public static function newDefault(array $attributes): self
    {
        return (new self)->fill(array_merge([
            'source_disk' => 's3', //default for now
            'dest_disk'   => 'local'
        ], $attributes));
    }
}
