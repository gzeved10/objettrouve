<?php
include 'partials/header.php'

?>

    <section class="form_section">
        <div class="form_section-container">
            <h2>Editar Usuário</h2>
            <form action="" enctype="multipart/form-data">
                <input type="text"  placeholder="Nome">
                <input type="text"  placeholder="Sobrenome">
                <select>
                    <option value="0">Author</option>
                    <option value="1">Adiministrador</option>
                </select>
                 <button type="submit" class="btn">Cadastrar</button>
                </form>
            </div>
        </section>
    <!--------------------fim de featured------------------------->
  
    <?php
include '../partials/footer.php'

?>