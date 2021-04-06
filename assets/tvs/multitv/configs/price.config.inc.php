<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'car' => array(
        'caption' => 'Машина',
        'type' => 'text'
    ),
    'volume' => array(
        'caption' => 'Обьем',
        'type' => 'text'
    ),
    'weight' => array(
        'caption' => 'Вес',
        'type' => 'text'
    ),
    'price' => array(
        'caption' => 'Цена',
        'type' => 'text',
    )
);
$settings['templates'] = array(
    'outerTpl' => '<div class="price__content">
                <table>
                    <thead>
                    <tr>
                        <td>Машина</td>
                        <td>Обьем</td>
                        <td>Вес</td>
                        <td>Цена</td>
                    </tr>
                    </thead>
                    <tbody>
                        [+wrapper+]
                    </tbody>
                </table>',


    'rowTpl' => '<tr>
                    <td>[+car+]</td>
                    <td>[+volume+]</td>
                    <td>[+weight+]</td>
                    <td>[+price+]</td>
                </tr>'
);
