<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'SerialNumber',
        'ElectronicBoardID',
        'BatteryID',
        'DateAdded',
        'CurrentPhase',
        'DatePreCasted',
        'DateCasted',
        'DatePostCasted',
        'DateAssembled',
        'DateStored',
        'DateSold',
        'DateCommissioned',
        'DateFailed'
        ];

    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
