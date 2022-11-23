<?php
include 'partials/header.php'

?>

    <section class="form_section">
        <div class="form_section-container">
          <h2>Adicionar Categoria</h2>
            <div class="alert_message error">
            <p>Algo está errado!</p>
            </div>
                <form action="">
                    <input type="text"  placeholder="Title">
                    <textarea rows="4"  placeholder="Descrição"></textarea>
                    <div class="form_control">
                        <label for="avatar">Avatar do Usuário</label>
                        <input type="file" id="avatar">
                    </div>
                     <button type="submit" class="btn">Adicionar Categoria</button>
                    </form>
                </div>
            </section>

            <?php
include '../partials/footer.php'

?>