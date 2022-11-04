<html>
<head>
    <title><?= $header ?></title>
    <style>
        table, td{
            border: solid 1px black;
            border-collapse: collapse;
            line-height: 2;
            font-size: 20px;
        }
        table{
            width: 1000px;
            margin: auto;
        }
        #sidebar{
            width: 400px;
        }
        td{
            padding: 20px;
        }
        #header{
            font-size: 28px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td id="header" colspan="2"><?= $headerText ?></td>
    </tr>
    <tr>
