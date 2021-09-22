<?php
// pega um conteudo parcial (partial) que está em todas as páginas, como o cabeçalho
$render('header');
?>

<a href="<?=$base;?>/novo">criar novo usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
                   <img src="<?=$base;?>/assets/images/document.png" alt="" width="25" height="30"/>
                </a>

                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')" >
                   <img src="<?=$base;?>/assets/images/trash.png" alt="" width="25" height="30"/>
                </a>
            </td>
        </tr>

    <?php endforeach; ?>

</table>

<?php
// pega um conteudo parcial (partial) que está em todas as páginas, como o rodapé
$render('footer');
?>