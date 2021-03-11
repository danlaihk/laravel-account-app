<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;

use App\Models\Account\DayAccount;
use DB;
use App\Helper\Debug\Sql;
class DayAccounts extends Controller{
    protected $menu;



    public function index(){
        // $records = DayAccount::all()->paginate(15);
        $records = DayAccount::paginate(25);

        // Paginator::setCurrentPage(1);
        // Paginator::setBaseUrl('day-account');
        // Paginator::setPageName('page');
        // $users = User::paginate(15);

        return view('day_account.index',compact('records'));

    }
}
