<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property int|null $age
 * @property string|null $description
 * @property int $is_married
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker whereIsMarried($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Worker whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Worker extends Model
{
    use HasFactory;
    protected $table = 'workers';
    protected $guarded = [];

    public function profile(){
        return $this->hasOne(Profile::class, 'worker_id', 'id');
    }

    public function position(){
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }


}
