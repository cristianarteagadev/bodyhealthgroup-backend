<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tenant_id',
        'property_id',
        'rental_agreement',
        'contract_period',
        'currency',
        'lease_price',
        'lease_deposit_price',
        'lease_deposit_installments',
        'community_expenses_price',
        'ipc_reset',
        'payday',
        'billing_notice',
    ];

    protected $dateFormat = 'Y-m-d h:i:s';

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function region() {
        return $this->belongsTo(Region::class);
    }

    public function links() {
        return $this->hasMany(PostLinks::class);
    }

    public function tags() {
        return $this->hasMany(PostTags::class);
    }
}
