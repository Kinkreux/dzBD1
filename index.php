<?php
/*создаем подключение к базе данных;
супер-несекурно,
в интернете советуют делать отдельный ini-файл и запрещать к нему доступ,
но это пока не входит в задание.
Это будет уместно использовать, например, в дипломе. */
$dataBaseConnection = new PDO('mysql:dbname=global;host=localhost;charset=UTF8','mpustovit', 'neto1714');

//пишем sql-запрос
$allbooks = 'select * from books';

?>

<html>
    <header>
        <title>Мое домашнее задание по лекции 4.1 «Реляционные базы данных и SQL»</title>
        <style>
            h1, h2 {
                font-size: 18px;
            }

            body {
                max-width: 550px;
                margin-left: 15%;
            }

            td {
                padding: 10px;
            }
        </style>
    </header>
    <body>
        <h1 style="">Мое домашнее задание по лекции 4.1 «Реляционные базы данных и SQL»</h1>
            <h2>Мои книги</h2>
            <table>
                <thead>
                    <th>Название</th>
                    <th>Автор</th>
                    <th>Год издания</th>
                    <th>ISBN</th>
                    <th>Жанр</th>
                </thead>
                <tbody>
                <?php
                //читаем и выводим таблицу с книгами построчно
                 foreach ($dataBaseConnection->query($allbooks) as $row) : ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['author'] ?></td>
                        <td><?php echo $row['year'] ?></td>
                        <td><?php echo $row['isbn'] ?></td>
                        <td><?php echo $row['genre'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <h2>Код (PDO)</h2>
                <ul>
                <a href="https://github.com/Kinkreux/dzBD1" target="_blank">Открыть в новом окне репозиторий на Github</a>
    </body>
</html>
