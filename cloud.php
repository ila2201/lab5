<?php
header("Content-type: text/html; Charset=UTF-8;");

// Создание объекта и загрузка в него документа
$sxml = simplexml_load_file("cloud.xml");
?>
<html>
<head>
    <title>Услуги облачного сервиса</title>
</head>
<body>
    <h1>Услуги облачного сервиса</h1>
    <table border="1" width="100%">
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
        </tr>
        <?php
        // Вывод всех услуг в цикле
        foreach ($sxml->service as $service) {
            echo "<tr>";
            echo "<td>" . $service->name . "</td>";
            echo "<td>" . $service->description . "</td>";
            echo "<td>" . $service->price . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
