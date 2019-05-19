<?php
//require ROOT_DIR . 'templates/search/main.php';
require ROOT_DIR.'templates/modal.php';
?>
<!-- Button trigger modal -->
<button type="button" class="ml-3 mb-3 btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Добавить нового студента
</button>


<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Имя</th>
        <th scope="col">Возраст</th>
        <th scope="col">Язык</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($result as $student):?>
    <tr>
        <th scope="row"><?=$student['id']?></th>
        <td><?=$student['name']?></td>
        <td><?=$student['age']?></td>
        <td><?=$student['lang']?></td>
    </tr>
<?php endforeach ?>
    </tbody>
</table>
