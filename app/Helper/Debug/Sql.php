<?php

namespace App\Helper\Debug;

class Sql{
    public static function instance(){
        return new Sql();
    }

    // DB::enableQueryLog(); //
    // $records = DayAccount::all();
    // $checkSql = [];
    // foreach(DB::getQueryLog() as $q){
    //     $statement = Sql::instance()->convertToSqlStatement($q);
    //     $checkSql[] = $statement?? '-';
    // }
    // dd($checkSql);

    public function convertToSqlStatement($q)
    {
        // \Illuminate\Database\Query\Builder or array
        $isArray = is_array($q);
        $isBuilder = ($q instanceof \Illuminate\Database\Query\Builder);

        if($isArray || $isBuilder){
        $bindings = $this->formatQueryBindings($isArray? $q['bindings']: $$q->getBindings()) ;
        $sql = ($isArray? $q['query']: $q->sql());

        return preg_replace_array(
            '/\?/',
            $bindings,
            $sql.';'
        );



        }else{
            return false;
        }

    }

    public function formatQueryBindings(array $bindingArr): array
    {
        //add '' to string bindings;
        $result = [];

        foreach($bindingArr as $binding){
            $result[] = is_string($binding)? "'$binding'": $binding;
        }

        return $result;
    }

    public function microtime_float()  //check around timestamp in microseconds
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }



}
