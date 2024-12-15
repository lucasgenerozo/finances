<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'amount',
        'type',
        'observation',
    ];

    public function isEntrance(): bool
    {
        return $this->type == 'i';
    }

    public function formattedAmount(): string
    {
        $converted_amount = doubleval($this->amount);
        return 'R$ ' . number_format($converted_amount, 2, ',', '.');
    }
}
