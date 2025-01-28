<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pictures extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
    ];

    public function getFillable(): array
    {
        return $this->fillable;
    }
    public function setFillable(array $fillable): void
    {
        $this->fillable = $fillable;
    }
}
