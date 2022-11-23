<?php
include 'partials/header.php'

?>





<section class="dashboard">
    <div class="container dashboard_container">
      <button id="show_sidebar-btn" class="sidebar_toggle"></button>
      <button id="hide_sidebar-btn" class="sidebar_toggle"></button>
        <aside>
            <ul>
                <li>
                    <a href="add-post.php"><i class="uil uil-pen"></i>
                        <h5>Adicionar Postagem</h5>
                    </a>
                </li>
                <li>
                    <a href="index.php"><i class="uil uil-postcard"></i>
                        <h5>Gerenciar Postagem</h5>
                    </a>
                </li>
                <?php if(isset($_SESSION['user_is_admin'])): ?>

                <li>
                    <a href="add-user.php"><i class="uil uil-user-plus"></i>
                        <h5>Adicionar Usuário</h5>
                    </a>
                </li>
                <li>
                    <a href="manange-users.php" class="active"><i class="uil uil-users-alt"></i>
                        <h5>Gerenciar Usuário</h5>
                    </a>
                </li>
                <li>
                    <a href="add-category.php"><i class="uil uil-edit"></i>
                        <h5>Adicionar Categoria</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-category.php"><i class="uil uil-list-ul"></i>
                        <h5>Gerenciar Categorias</h5>
                    </a>
                </li>
                <?php endif ?>
            </ul>
        </aside>
        <main>
            <h2>Gerenciar Usuários</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Usuário</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ernest Achiever</td>
                        <td>Achiever</td>
                        <td><a href="edit-user.php" class="btn sm">Editar</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Deletar</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Daniel Vinyo</td>
                        <td>daniel</td>
                        <td><a href="edit-user.php" class="btn sm">Editar</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Deletar</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Jane Doe</td>
                        <td>jane</td>
                        <td><a href="edit-user.php" class="btn sm">Editar</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Deletar</a></td>
                        <td>Yes</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>

<?php
include '../partials/footer.php'

?>