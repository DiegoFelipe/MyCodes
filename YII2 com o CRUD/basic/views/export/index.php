<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
</head>
<body>
    <?php
        use yii\db\Query;
        $arrayThead = [
                'aluno'=>['ID', 'Nome', 'Data de Nasc', 'Logradouro', 'Número', 'Bairro', 'Cidade', 'Estado', 'Data Inclusão', 'CEP'],
                'professor'=>['ID','Nome','Data de Nasc','Data de Criação','Curso'],
                'notas'=>['ID','Nota 1','Nota 2','Nota 3','Nota 4','data_criacao','Curso','Aluno','Professor'],
                'curso'=>['ID','nome','Data de Criação'],
            ];
        $table = $_GET['table'];
        $connection = \Yii::$app->db;
        if($table == "professor") {
           $query = new Query;
           $query->select(['professor.id_professor', 'professor.nome as pnome', 'professor.data_nascimento', 'professor.data_criacao', 'curso.nome'])  
                  ->from('professor')
                  ->join('INNER JOIN', 
			'curso',
			'curso.id_curso = professor.id_professor'
			); 
            $command = $query->createCommand();
            $rows = $command->queryAll();
            
        } elseif ($table == "notas") {
            $query = new Query;
            $query->select(['notas.id_notas', 'notas.nota_1', 'notas.nota_2', 'notas.nota_3', 'notas.nota_4','notas.data_criacao','curso.nome as cnome','aluno.nome as anome','professor.nome as pnome'])
                  ->from('notas')
                  ->join('INNER JOIN', 
			'curso',
			'curso.id_curso = notas.fk_id_curso'
			)
                    ->join('INNER JOIN', 
			'professor',
			'professor.id_professor = notas.fk_id_professor'
			)
                    ->join('INNER JOIN', 
			'aluno',
			'aluno.id_aluno = notas.fk_id_aluno'
			); 
            $command = $query->createCommand();
            $rows = $command->queryAll();
        } else {
            $sql = "SELECT * from $table"; 
            $cmd = $connection->createCommand($sql);
            $rows = $cmd->queryAll();
        }
       
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