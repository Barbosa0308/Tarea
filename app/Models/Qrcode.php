<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Relations\BelongsTo;
 use Illuminate\Database\Eloquent\Relations\HasMany;
/**
 * @OA\Schema(
 *      schema="Qrcode",
 *      required={"user_id","company_name","product_name","callback_url","amount"},
 *      @OA\Property(
 *          property="website",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="company_name",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="product_name",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="product_url",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="product_url_image_Path",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="callback_url",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="qrcode_path",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="amount",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="number",
 *          format="number"
 *      ),
 *      @OA\Property(
 *          property="created_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="updated_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="deleted_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */class Qrcode extends Model
{
     use SoftDeletes;    public $table = 'qrcodes';

    public $fillable = [
        'user_id',
        'website',
        'company_name',
        'product_name',
        'product_url',
        'product_url_image_Path',
        'callback_url',
        'qrcode_path',
        'amount'
    ];

    protected $casts = [
        'website' => 'string',
        'company_name' => 'string',
        'product_name' => 'string',
        'product_url' => 'string',
        'product_url_image_Path' => 'string',
        'callback_url' => 'string',
        'qrcode_path' => 'string',
        'amount' => 'float'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'website' => 'nullable|string|max:255',
        'company_name' => 'required|string|max:255',
        'product_name' => 'required|string|max:255',
        'product_url' => 'nullable|string|max:255',
        'product_url_image_Path' => 'nullable||mimes: jpeg,jpg,png,bmp,gif,svg||max:2048',
        'callback_url' => 'required|string|max:255',
        'qrcode_path' => 'nullable|string|max:255',
        'amount' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];
       /**
     * Get the user that owns the one transacción.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

       /**
     * Get the qrcodes a un usuario
     */
    public function trasaction1(): HasMany
    {
        return $this->hasMany(Trasaction::class);
    }

    
}
