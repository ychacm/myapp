<?php

class homeController extends Controller {
                var $view;

        public function __construct() {
                parent::__construct();
        }

        public function index() {
                $this->view = new appView();
                $this->view->assign("name","杨长河");
                

                $modTest=$this->model('home');
                $databases=$modTest->testResult();
                while($row=mysql_fetch_array($databases))
                {
                        $arrData[]=$row;
                }

                //echo json_encode($arrData);

                $this->view->assign("arr",$arrData);
                $this->view->display("index.tpl");
        }
}

