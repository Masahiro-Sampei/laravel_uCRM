<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

class Customer extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'kana',
        'tel',
        'email',
        'postcode',
        'address',
        'birthday',
        'gender',
        'memo'
    ];

    /**
     * スコープメソッド: 顧客検索のクエリを構築する
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *        
     * @param string|null $input
     *        検索条件として使用する入力値（kana または tel に一致する文字列）
     * @return \Illuminate\Database\Eloquent\Builder|null
     *         クエリを修正した結果を返す。$input が空、または条件に一致する顧客が存在しない場合は null。
     */
    public function scopeSearchCustomers($query, $input = null)
    {
        // 入力値が空でない場合にのみ処理を実行。存在しなかったら全件表示
        if (!empty($input)) {
            // 入力値に基づいて 'kana' または 'tel' に一致する顧客が存在するか確認
            if (
                Customer::where('kana', 'like', $input . '%')
                    ->orWhere('tel', 'like', $input . '%')->exists()
            ) {
                // 'kana' または 'tel' に一致する条件でクエリを修正
                return $query->where('kana', 'like', $input . '%')
                    ->orWhere('tel', 'like', $input . '%');
            }
        }
    }


    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
