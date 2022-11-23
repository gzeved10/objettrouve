<?php
include 'partials/header.php'

?>

    <section class="form_section">
        <div class="form_section-container">
          <h2>Editar Postagem</h2>
            <form action="" enctype="multipart/form-data"> 
                <input type="text"  placeholder="Title">
                <select>
                    <option value="1">Roupas</option>
                    <option value="1">Material Escolar</option>
                    <option value="1">Eletrônicos</option>
                    <option value="1">Acessórios</option>
                    <option value="1">Documentos</option>
                    <option value="1">Calçados</option>
                </select>
                <textarea rows="10" placeholder="Legenda"></textarea>
                <div class="form_control inline">
                    <input type="checkbox" id="is_featured" checked>
                    <label for="is_featured">Destacar</label>
                </div>
                <div class="form_control">
                    <label type="thumbnail">Mudar Imagem</label>
                    <input type="file" id="thumbnail">
                </div>
                 <button type="submit" class="btn">Atualizar Post</button>
                </form>
            </div>
        </section>
    <!--------------------fim de featured------------------------->
  
    <?php
include '../partials/footer.php'

?>