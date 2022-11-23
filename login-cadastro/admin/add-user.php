<?php
include 'partials/header.php'

?>

    <section class="form_section">
        <div class="form_section-container">
            <h2>Adicionar Usuário</h2>
            <div class="alert_message error">
            <p>Algo está errado!</p>
            </div>
            <form action="<?= ROOT_URL ?>admin/add-user-logic.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="firstname" placeholder="Nome">
                <input type="text" name="lastname" placeholder="Sobrenome">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="createpassword" placeholder="Criar Senha">
                <input type="password" name="donfirmpassword" placeholder="Confirmar Senha">
                <select>
                    <option value="0">Author</option>
                    <option value="1">Adiministrador</option>
                </select>
                <div class="form_control">
                    <label for="avatar">Avatar do Usuário</label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                 <button type="submit" name="submit" class="btn">Cadastrar</button>
                </form>
            </div>
        </section>
    <!--------------------fim de featured------------------------->
  
    <?php
include '../partials/footer.php'

?>