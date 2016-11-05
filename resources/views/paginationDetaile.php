<!DOCTYPE html>
<html>
<head>
    <title>Paginationjs example</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="pagination.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        ul, li {
            list-style: none;
        }

        #wrapperx {
            width: 900px;
            margin: 20px auto;
        }

        .data-containerx {
            margin-top: 5px;
        }

        .data-containerx ul {
            padding: 0;
            margin: 0;
        }

        .data-containerx li {
            margin-bottom: 5px;
            padding: 5px 10px;
            background: #eee;
            color: #666;
        }
    </style>
</head>
<body>
<?php
require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');

$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['pagetype']="my";
$param['userid']=3;
$param['page']=0;
$param['count']=30;
try {
 print_r($xx['data'][1]['taskid']);
 ?></br><?php
 print_r($xx['data'][2]['taskid']);
 //print_r($myExample->getTasks($param));
// $xx=$myExample->getTasks($param);
// print_r($param['count']);
// print_r($xx['count']);
}catch(Exception $e)
{
 echo $e->getMessage();
}

?>
<div id="wrapperx">
    <section>
        <div class="data-containerx"></div>
        <div id="pagination-demo1"></div>
    </section>
</div>

<script src="pjs.js" type="text/javascript"></script>
<script src="pagination.js" type="text/javascript"></script>
<script>
    $(function () {
        function createDemo(name) {
            var container = $('#pagination-' + name);
            var sources = function () {
                var result = [];

                for (var i = 1; i < 196; i++) {
                    result.push(i);
                }

                return result;
            }();

            var options = {
                dataSource: sources,
                callback: function (response, pagination) {
                    window.console && console.log(response, pagination);

                    var dataHtml = '<ul>';

                    $.each(response, function (index, item) {
                        dataHtml += '<li>' + item + '</li>';
                    });

                    dataHtml += '</ul>';

                    container.prev().html(dataHtml);
                }
            };

            //$.pagination(container, options);

            container.addHook('beforeInit', function () {
                window.console && console.log('beforeInit...');
            });
            container.pagination(options);

            container.addHook('beforePageOnClick', function () {
                window.console && console.log('beforePageOnClick...');
                //return false
            });

            return container;
        }

        createDemo('demo1');
    });
</script>
</body>
</html>