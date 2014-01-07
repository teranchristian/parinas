            
<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Exchange extends Controller_Template_webPage {

    public function action_index() {
        $from = 'USD';
        $to = 'PEN';
        $url = 'http://finance.yahoo.com/d/quotes.csv?f=l1d1t1&s='.$from.$to.'=X';
        $handle = fopen($url, 'r');
 
        if ($handle) {
            $result = fgetcsv($handle);
            fclose($handle);
        }
 
        //echo $result[0].' '.$result[1].' '.$result[2];
        echo json_encode($result);
    }

}

