<?php
// pega um conteudo parcial (partial) que está em todas as páginas, como o cabeçalho
$render('header');
?>

<h2>Adicionar Usuário</h2>

<form method="POST" action="<?=$base;?>/novo">

     <label>
         Nome: <br/>
         <input type="text" name="name" />
     </label><br/><br/>

     <label>
         E-mail: <br/>
         <input type="email" name="email" />
     </label><br/><br/>

     <input type="submit" value="Adicionar"/>

</form>

<?php
// pega um conteudo parcial (partial) que está em todas as páginas, como o rodapé
$render('footer');
?>