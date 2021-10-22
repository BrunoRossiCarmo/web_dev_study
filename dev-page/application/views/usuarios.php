<figure class='text-end' style= 'margin-right: 30px;'>
    <blockquote class='blockquote'>
        <p>"O Mal troveja no Oeste em busca daquilo que outrora fora roubado."</p>
    </blockquote>
    <figcaption class = 'blackquote-footer'>
        Astarus Bradalbur. <cite title='Source Title'>Rei de Azerath</cite>
    </figcaption>
</figure>

<div class=' container-fluid' style = 'margin-top: 30px'>
    <div class="shadow-lg p-3 mb-5 bg-body rounded">

        <h1 class='display-6'>Lista de Jogadores</h1>
        <?php
            echo '<table class="table">';
                echo '<tr>';
                    echo '<th>Nome</th>';
                    echo '<th>Login</th>';
                    echo '<th>Papel</th>';
                    echo '<th>Status</th>';
                    echo '<th>Ações</th>';
                echo '</tr>';
                foreach($users as $user){
                    echo '<tr>';
                        echo '<td>'.$user->NOME.'</td>';
                        echo '<td>'.$user->LOGIN.'</td>';
                        echo '<td>'.$user->PAPEL.'</td>';
                        if($user->$ATIVO == 1){
                            echo '<td>Ativo</td>';
                        }
                        else{
                            echo '<td>Inativo</td>';
                        }
                        echo '<td>';
                            echo '<i class = "fa fa-eye text-primary" style = "margin-right: 5px></i>';
                            echo '<i class = "fa fa-edit text-primary" style = "margin-right: 5px></i>';
                            echo '<i class = "fa fa-trash text-danger" style = "margin-right: 5px></i>';
                        echo '</td>';
                    echo '</tr>';
                }
            echo '</table>';
        ?>

    </div>
</div>    

