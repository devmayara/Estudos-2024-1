<?php $this->layout("test::base", ["title" => "Editando o usuário {$user->first_name}"]); ?>

<?php $this->start("nav"); ?>
    <a href="./" class="btn">Voltar</a>
<?php $this->stop(); ?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="<?= $user->first_name; ?>" placeholder="Nome">
    <input type="text" name="name" value="<?= $user->last_name; ?>" placeholder="Nome">
    <input type="text" name="name" value="<?= $user->email; ?>" placeholder="Nome">

    <button type="submit" class="btn">Atualizar usuário</button>
</form>
