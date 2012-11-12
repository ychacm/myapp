<?php
/**
 * 
 * @copyright   Copyright(c) 2011
 * @author      yuansir <yuansir@live.cn/yuansir-web.com>
 * @version     1.0
 */
class homeModel extends Model{
        function testResult(){
            $list=$this->db->query("select * from ysj");
            return $list;
        }
}


