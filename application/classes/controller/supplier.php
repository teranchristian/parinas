<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Supplier extends Controller_Demo {
    public $secure_actions = array('US' => array('index','getSupplierList','changePwd'));
         
    public function action_index() {
        $this->template->scripts = array('media/dtable/dtable.js', 'media/dtable/dt-bootstrap.js', 
                                         'media/js/validate.js','media/js/jquery-ui.js',
                                         'media/js/action/supAct.js',);
        $this->template->styles = array('media/css/jquery.css' => 'screen, projection',);
        $this->template->content = View::factory('supplier/index');
     }
     

    public function action_getSupplierList() {
        if ($this->request->is_ajax())  {
            $data = array("aaData" => array());            
            $product = Model::factory('supplier')->getSupplierList();       
            
            foreach ($product as $item) {
                $arr = array();
                array_push($arr, $item['Code']);
                array_push($arr, $item['Description']);
                array_push($arr, $item['Email']);
                array_push($arr, $item['Status']);
                array_push($arr, "<center><a  class='icon iconEdit' id='del' rel='" . $item['Description'] . "' value='" . hash::encode($item['Id'], HASH_GENERAL_KEY) . "'></a></center>");                
                array_push($data['aaData'], $arr);
            }
            echo json_encode($data);
        }else {
            $this->request->redirect('product');
        }
    }
    public function action_changePwd() {
        if ($this->request->is_ajax())  {
            if (isset($_POST)) {
                $DATA = array();
                $DATA['ID']=Hash::decode($_POST['par1'], HASH_GENERAL_KEY);
                $DATA['KEY']=SimpleAuth::instance()->randomKey();
                $DATA["PWD"] = Hash::create('sha1', base64_decode($_POST['par2']),$DATA['KEY']);
                //$this->model->updatePwd($DATA);
                Model::factory('supplier')->updatePwd($DATA); 
                $response = array('success'=>1);
                echo json_encode($response);
            }
        } else {
            $this->request->redirect('product');
        }
    }

}
?>
