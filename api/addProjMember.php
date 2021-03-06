<?php

include_once(dirname(__FILE__)."/../global.php");

class addProjMember extends Api {
    function main (){
        $this->getParams();
        $proj_id = $this->params['proj_id'];
        $uid = $this->params['uid'];
        $this->result = $this->model->addProjMember($uid, $proj_id);
        if (is_int($this->result)) {
            $this->errmsg = $this->result;
            $this->result = '';
        }
        $this->output();
    }
}

$addProjMember = new addProjMember();
$addProjMember->main();
