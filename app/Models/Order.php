<?php

namespace App\Models;

use App\Models\User;
use App\Models\Shipping;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Spatie\ModelStates\HasStates;
use App\StateMachine\Order\OrderState;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory, Notifiable, SoftDeletes, HasUlids, HasStates;

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'state' => OrderState::class,
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function shipping()
    {
        return $this->hasOne(Shipping::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Événement pour générer automatiquement la référence
        static::creating(function ($order) {
            $order->reference = self::generateUniqueReference();
        });
    }

    // Méthode pour générer une référence unique
    protected static function generateUniqueReference()
    {
        do {
            $reference = strtoupper(Str::random(10)); // Génère une référence aléatoire de 10 caractères
        } while (self::where('reference', $reference)->exists());

        return $reference;
    }

    public function price() : Attribute
    {
        return new Attribute(
            get : function () {
                return $this->items->sum(fn ($item) => $item->product->price * $item->quantity);
            }
        );
    }
}