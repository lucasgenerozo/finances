<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'amount',
        'type',
        'observation',
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function tagsDescriptions()
    {
        return $this->belongsToMany(Tag::class)->pluck('description');
    }

    public function tagsIds()
    {
        return $this->belongsToMany(Tag::class)->pluck('tag_id');
    }

    public function isEntrance(): bool
    {
        return $this->type == 'i';
    }

    public function formattedFloatAmount(): string
    {
        $converted_amount = doubleval($this->amount);
        return number_format($converted_amount, 2, ',', '.');
    }

    public function formattedMoneyAmount(): string
    {
        $converted_amount = doubleval($this->amount);
        return 'R$ ' . number_format($converted_amount, 2, '.');
    }
}
