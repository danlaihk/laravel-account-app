<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class DayAccount extends Model{

    protected $table = "day_account";
    protected $fillable = [ 'amount', 'expense_type_id', 'description'];

    public function getFormatIdAttribute(){

        return isset($this->created_at)? "DA-".( \Carbon\Carbon::parse($this->created_at)->format('Ymd') )."-".$this->id :'';

    }

}
