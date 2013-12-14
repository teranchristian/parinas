<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Supplier extends Model {

    public function getSupplierList() {
        return DB::select()->from('Supplier')
                        ->where('Code', '!=', Session::instance()->get('userID'))
                        ->and_where('Code', '!=', '')
                        ->and_where('Status', '=', 'ACTIVE')
                        ->order_by('Description', 'asc')
                        ->execute();
    }

    public function updatePwd($DATA) {    
         DB::update('Supplier')
                ->set(array(
                    'UserKey' => $DATA['KEY'], 'Pwd' => $DATA['PWD']
                ))
                ->where('Id', '=', ':value')
                ->param(':value', $DATA['ID'])
                ->execute();
    }

}