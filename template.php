<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="./estilo.css">
</head>

<body>
    <form>
        <fieldset class="row gy-2 gx-3 align-items-center">
            <legend>Gerenciador de Tarefas</legend>
            <form class="row g-3">
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Tarefas</label>
                    <input type="text" class="form-control" name="nome">
                </div>


                <div class="col-md-2">
                    <label for="inputCity" class="form-label">Prazo</label>
                    <input type="text" class="form-control" name="prazo">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Prioridade</label>
                    <label>
                        <br>
                        <input type="radio" name="prioridade" value="Baixa" checked>
                        Baixa

                        <input type="radio" name="prioridade" value="Média" checked>
                        Média

                        <input type="radio" name="prioridade" value="Alta" checked>
                        Alta
                    </label>


                </div>

                <div class="col-md-10">
                    <label class="form-label">Descrição</label>
                    <textarea class="form-control" name="descricao"></textarea>
                </div>
                <div class="row-md-1" style="margin-left: -25px;">
                    <div class="form-check">
                        <label class="form-check-label" for="gridCheck">
                            Tarefa Concluída
                            <input class="form-check-input" type="checkbox" name="concluida">
                        </label>
                    </div>
                </div>
                <div class="col-8">
                    <button type="submit" class="btn btn-primary" value="Cadastrar">Cadastrar</button>
                </div>
            </form>
        </fieldset>
    </form>

    <div class="col-8">
        <hr>
    </div>

    <table>
        <tr>
            <th>Tarefas:</th>

            <td> <?php echo $tarefa['nome']; ?> </td>

            <th>Descrição:</th>
            <td> <?php echo $tarefa['descricao']; ?> </td>

            <th>Prazo:</th>
            <td> <?php echo $tarefa['prazo']; ?> </td>

            <th>Prioridade:</th>
            <td> <?php echo $tarefa['prioridade']; ?> </td>

            <th>Concluída:</th>
            <td> <?php echo $tarefa['concluida']; ?> </td>

        </tr>

    </table>

</body>

</html>