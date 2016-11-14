<?php
require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');

$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['pagetype']="mygroup";
$param['userid']=3;
$param['page']=0;
$param['count']=30;
$yy=$myExample->getTasks($param);
if(!$yy['count'])
{
$yy=Array(
    'errcode' => '',
    'errmsg' => '',
    'data' => Array
        (
            '0' => Array
                (
                    'taskid' => '  ',
                    'title' => '',
                    'description' => '',
                    'type' => '',
                    'priority' => '',
                    'closedate' => '',
                    'submitdate' => '',
                    'status' => ''
                ),

            '1' => Array
                (
                    'taskid' => '   ',
                    'title' =>'',
                    'description' => '',
                    'type' => '',
                    'priority' => '',
                    'closedate' => '',
                    'submitdate' => '',
                    'status' => ''
                ),

            '2' => Array
                (
                    'taskid' => '    ',
                    'title' =>'',
                    'description' => '',
                    'type' => '',
                    'priority' => '',
                    'closedate' => '',
                    'submitdate' => '',
                    'status' => ''
                )

            

        )

   , 'count' => '0'
);

}
?>