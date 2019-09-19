<div class="table-responsive-lg">
    <table class="table">
        <thead class="thead-light">
        <tr class="table-dark">
            <th scope="col">Фамилия</th>
            <th scope="col">Имя</th>
            <th scope="col">Отчество</th>
            <th scope="col">Телефон</th>
            <th scope="col">Email</th>
            <th scope="col">Текст обращения</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $apeal_types = [
                "0" => 'Жалоба',
                "1" => 'Предложение',
                "2" => 'Заявление'
            ];
            foreach ($apeal_types as $key_type=>$value_type)
            {
                echo '<tr class="table-secondary"><td colspan="12">'.$value_type.'</td></tr>';

                foreach ($data as $row) {
                    if($key_type == $row['apeal-type'])
                    {
                        echo '<tr>';
                        echo '<td>'.$row['surname'].'</td>';
                        echo '<td>'.$row['name'].'</td>';
                        echo '<td>'.$row['last-name'].'</td>';
                        echo '<td>'.$row['phone'].'</td>';
                        echo '<td>'.$row['email'].'</td>';
                        echo '<td>'.$row['text-apeal'].'</td>';
                        echo '</tr>';
                    }
                }
            }
        ?>
        </tbody>
    </table>
</div>