<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $arrayThead = ['aluno'=>['ID', 'Nome', 'Data de Nasc', 'Logradouro', 'Número', 'Bairro', 'Cidade', 'Estado', 'Data Inclusão', 'CEP']];
        $table = $_GET['table'];
        $connection = \Yii::$app->db;
        $sql = "SELECT * from $table"; 
        $cmd = $connection->createCommand($sql);
        $rows = $cmd->queryAll();
        // print_r($rows[0][$arrayThead[$table][0]]);
    ?>
<table>
    <thead>
        <tr> 
            <?php foreach($arrayThead[$table] as $row):
                echo "<th>$row</th>";   
            endforeach;?>                                    
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($rows as $key=>$value){
            $td = "";
            $keysValue = array_keys($value); 
            foreach($keysValue as $keyVal){
                $td .= "<td>".$rows[$key][$keyVal]."</td>";
            }
            echo "<tr>".$td."</tr>";
        }
        ?>
    </tbody>
</table>
</body>
</html>