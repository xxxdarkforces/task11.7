<?php
    $x = 1;
    $y = 2;
    $a1 = $x > $y;
    $a2 = $x == $y;
    $a3 = $x < $y;
    $a4 = $x <= $y;
    $b1 = $y < $x;
    $b2 = $y > $x;
    $b3 = $y == $x;
    $b4 = $y >= $x;
    $c1 = !$a1;
    $c2 = !$a2;
    $c3 = !$a3;
    $c4 = !$a4;
    $d1 = ($a1 <= $b1) || ($x > $y);
    $d2 = ($a2 <= $b2) || ($y == $x);
    $d3 = ($a3 == $b3) || ($x < $y);
    $d4 = ($a4 > $b4) || ($x == $y);
    $e1 = ($a1 == $b1) && ($x < $y);
    $e2 = ($a2 < $b2) && ($x > $y);
    $e3 = ($a3 < $b3) && ($x == $y);
    $e4 = ($a4 > $b4) && ($x > $y);
    $f1 = ($a1 == $b1) ^ ($x < $y);
    $f2 = ($a2 < $b2) ^ ($x < $y);
    $f3 = ($a3 > $b3) ^ ($x == $y);
    $f4 = ($a4 == $b4) ^ ($x > $y);

    echo '
        <style>
            .table {
                width: 500px;
                border: none;
                margin-bottom: 20px;
                border-collapse: separate;
                margin: 0 auto;
            }
            .table thead th {
                font-weight: bold;
                text-align: left;
                border: none;
                padding: 10px 15px;
                background: #EDEDED;
                font-size: 14px;
                border-top: 1px solid #ddd;
                text-align: center;
            }
            .table tr th:first-child, .table tr td:first-child {
                border-left: 1px solid #ddd;
            }
            .table tr th:last-child, .table tr td:last-child {
                border-right: 1px solid #ddd;
            }
            .table thead tr th:first-child {
                border-radius: 20px 0 0 0;
            }
            .table thead tr th:last-child {
                border-radius: 0 20px 0 0;
            }
            .table tbody td {
                text-align: center;
                border: none;
                padding: 10px 15px;
                font-size: 14px;
                vertical-align: top;
            }
            .table tbody tr:nth-child(even) {
                background: #F8F8F8;
            }
            .table tbody tr:last-child td{
                border-bottom: 1px solid #ddd;
            }
            .table tbody tr:last-child td:first-child {
                border-radius: 0 0 0 20px;
            }
            .table tbody tr:last-child td:last-child {
                border-radius: 0 0 20px 0;
            }
        </style>


        <table class="table">
            <caption><strong>Таблица истинности PHP</strong></caption>
            <thead>
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>!A</th>
                    <th>A || B</th>
                    <th>A &amp;&amp; B</th>
                    <th>A xor B</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>' . (int) $a1 . '</td>
                    <td>' . (int) $b1 . '</td>
                    <td>' . (int) $c1 . '</td>
                    <td>' . (int) $d1 . '</td>
                    <td>' . (int) $e1 . '</td>
                    <td>' . (int) $f1 . '</td>
                </tr>
                <tr>
                    <td>' . (int) $a2 . '</td>
                    <td>' . (int) $b2 . '</td>
                    <td>' . (int) $c2 . '</td>
                    <td>' . (int) $d2 . '</td>
                    <td>' . (int) $e2 . '</td>
                    <td>' . (int) $f2 . '</td>
                </tr>
                <tr>
                    <td>' . (int) $a3 . '</td>
                    <td>' . (int) $b3 . '</td>
                    <td>' . (int) $c3 . '</td>
                    <td>' . (int) $d3 . '</td>
                    <td>' . (int) $e3 . '</td>
                    <td>' . (int) $f3 . '</td>
                </tr>
                <tr>
                    <td>' . (int) $a4 . '</td>
                    <td>' . (int) $b4 . '</td>
                    <td>' . (int) $c4 . '</td>
                    <td>' . (int) $d4 . '</td>
                    <td>' . (int) $e4 . '</td>
                    <td>' . (int) $f4 . '</td>
                </tr>
            </tbody>
        </table>
    ';

    $x1 = true;
    $x2 = false;
    $x3 = 1;
    $x4 = 0;
    $x5 = -1;
    $x6 = "1";
    $x7 = null;
    $x8 = "php";

    $y1 = true;
    $y2 = false;
    $y3 = 1;
    $y4 = 0;
    $y5 = -1;
    $y6 = "1";
    $y7 = null;
    $y8 = "php";

    $x1_word = boolval($x1) ? 'true' : 'false';
    $x2_word = boolval($x2) ? 'true' : 'false';
    $x3_word = '1';
    $x4_word = '0';
    $x5_word = '-1';
    $x6_word = '"1"';
    $x7_word = 'null';
    $x8_word = '"php"';

    $y1_word = boolval($y1) ? 'true' : 'false';
    $y2_word = boolval($y2) ? 'true' : 'false';
    $y3_word = '1';
    $y4_word = '0';
    $y5_word = '-1';
    $y6_word = '"1"';
    $y7_word = 'null';
    $y8_word = '"php"';

    $x1_y1 = boolval($x1 == $y1) ? 'true' : 'false';
    $x2_y1 = boolval($x2 == $y1) ? 'true' : 'false';
    $x3_y1 = boolval($x3 == $y1) ? 'true' : 'false';
    $x4_y1 = boolval($x4 == $y1) ? 'true' : 'false';
    $x5_y1 = boolval($x5 == $y1) ? 'true' : 'false';
    $x6_y1 = boolval($x6 == $y1) ? 'true' : 'false';
    $x7_y1 = boolval($x7 == $y1) ? 'true' : 'false';
    $x8_y1 = boolval($x8 == $y1) ? 'true' : 'false';

    $x1_y2 = boolval($x1 == $y2) ? 'true' : 'false';
    $x2_y2 = boolval($x2 == $y2) ? 'true' : 'false';
    $x3_y2 = boolval($x3 == $y2) ? 'true' : 'false';
    $x4_y2 = boolval($x4 == $y2) ? 'true' : 'false';
    $x5_y2 = boolval($x5 == $y2) ? 'true' : 'false';
    $x6_y2 = boolval($x6 == $y2) ? 'true' : 'false';
    $x7_y2 = boolval($x7 == $y2) ? 'true' : 'false';
    $x8_y2 = boolval($x8 == $y2) ? 'true' : 'false';

    $x1_y3 = boolval($x1 == $y3) ? 'true' : 'false';
    $x2_y3 = boolval($x2 == $y3) ? 'true' : 'false';
    $x3_y3 = boolval($x3 == $y3) ? 'true' : 'false';
    $x4_y3 = boolval($x4 == $y3) ? 'true' : 'false';
    $x5_y3 = boolval($x5 == $y3) ? 'true' : 'false';
    $x6_y3 = boolval($x6 == $y3) ? 'true' : 'false';
    $x7_y3 = boolval($x7 == $y3) ? 'true' : 'false';
    $x8_y3 = boolval($x8 == $y3) ? 'true' : 'false';

    $x1_y4 = boolval($x1 == $y4) ? 'true' : 'false';
    $x2_y4 = boolval($x2 == $y4) ? 'true' : 'false';
    $x3_y4 = boolval($x3 == $y4) ? 'true' : 'false';
    $x4_y4 = boolval($x4 == $y4) ? 'true' : 'false';
    $x5_y4 = boolval($x5 == $y4) ? 'true' : 'false';
    $x6_y4 = boolval($x6 == $y4) ? 'true' : 'false';
    $x7_y4 = boolval($x7 == $y4) ? 'true' : 'false';
    $x8_y4 = boolval($x8 == $y4) ? 'true' : 'false';

    $x1_y5 = boolval($x1 == $y5) ? 'true' : 'false';
    $x2_y5 = boolval($x2 == $y5) ? 'true' : 'false';
    $x3_y5 = boolval($x3 == $y5) ? 'true' : 'false';
    $x4_y5 = boolval($x4 == $y5) ? 'true' : 'false';
    $x5_y5 = boolval($x5 == $y5) ? 'true' : 'false';
    $x6_y5 = boolval($x6 == $y5) ? 'true' : 'false';
    $x7_y5 = boolval($x7 == $y5) ? 'true' : 'false';
    $x8_y5 = boolval($x8 == $y5) ? 'true' : 'false';

    $x1_y6 = boolval($x1 == $y6) ? 'true' : 'false';
    $x2_y6 = boolval($x2 == $y6) ? 'true' : 'false';
    $x3_y6 = boolval($x3 == $y6) ? 'true' : 'false';
    $x4_y6 = boolval($x4 == $y6) ? 'true' : 'false';
    $x5_y6 = boolval($x5 == $y6) ? 'true' : 'false';
    $x6_y6 = boolval($x6 == $y6) ? 'true' : 'false';
    $x7_y6 = boolval($x7 == $y6) ? 'true' : 'false';
    $x8_y6 = boolval($x8 == $y6) ? 'true' : 'false';

    $x1_y7 = boolval($x1 == $y7) ? 'true' : 'false';
    $x2_y7 = boolval($x2 == $y7) ? 'true' : 'false';
    $x3_y7 = boolval($x3 == $y7) ? 'true' : 'false';
    $x4_y7 = boolval($x4 == $y7) ? 'true' : 'false';
    $x5_y7 = boolval($x5 == $y7) ? 'true' : 'false';
    $x6_y7 = boolval($x6 == $y7) ? 'true' : 'false';
    $x7_y7 = boolval($x7 == $y7) ? 'true' : 'false';
    $x8_y7 = boolval($x8 == $y7) ? 'true' : 'false';

    $x1_y8 = boolval($x1 == $y8) ? 'true' : 'false';
    $x2_y8 = boolval($x2 == $y8) ? 'true' : 'false';
    $x3_y8 = boolval($x3 == $y8) ? 'true' : 'false';
    $x4_y8 = boolval($x4 == $y8) ? 'true' : 'false';
    $x5_y8 = boolval($x5 == $y8) ? 'true' : 'false';
    $x6_y8 = boolval($x6 == $y8) ? 'true' : 'false';
    $x7_y8 = boolval($x7 == $y8) ? 'true' : 'false';
    $x8_y8 = boolval($x8 == $y8) ? 'true' : 'false';


    $hard_x1_y1 = boolval($x1 === $y1) ? 'true' : 'false';
    $hard_x2_y1 = boolval($x2 === $y1) ? 'true' : 'false';
    $hard_x3_y1 = boolval($x3 === $y1) ? 'true' : 'false';
    $hard_x4_y1 = boolval($x4 === $y1) ? 'true' : 'false';
    $hard_x5_y1 = boolval($x5 === $y1) ? 'true' : 'false';
    $hard_x6_y1 = boolval($x6 === $y1) ? 'true' : 'false';
    $hard_x7_y1 = boolval($x7 === $y1) ? 'true' : 'false';
    $hard_x8_y1 = boolval($x8 === $y1) ? 'true' : 'false';

    $hard_x1_y2 = boolval($x1 === $y2) ? 'true' : 'false';
    $hard_x2_y2 = boolval($x2 === $y2) ? 'true' : 'false';
    $hard_x3_y2 = boolval($x3 === $y2) ? 'true' : 'false';
    $hard_x4_y2 = boolval($x4 === $y2) ? 'true' : 'false';
    $hard_x5_y2 = boolval($x5 === $y2) ? 'true' : 'false';
    $hard_x6_y2 = boolval($x6 === $y2) ? 'true' : 'false';
    $hard_x7_y2 = boolval($x7 === $y2) ? 'true' : 'false';
    $hard_x8_y2 = boolval($x8 === $y2) ? 'true' : 'false';

    $hard_x1_y3 = boolval($x1 === $y3) ? 'true' : 'false';
    $hard_x2_y3 = boolval($x2 === $y3) ? 'true' : 'false';
    $hard_x3_y3 = boolval($x3 === $y3) ? 'true' : 'false';
    $hard_x4_y3 = boolval($x4 === $y3) ? 'true' : 'false';
    $hard_x5_y3 = boolval($x5 === $y3) ? 'true' : 'false';
    $hard_x6_y3 = boolval($x6 === $y3) ? 'true' : 'false';
    $hard_x7_y3 = boolval($x7 === $y3) ? 'true' : 'false';
    $hard_x8_y3 = boolval($x8 === $y3) ? 'true' : 'false';

    $hard_x1_y4 = boolval($x1 === $y4) ? 'true' : 'false';
    $hard_x2_y4 = boolval($x2 === $y4) ? 'true' : 'false';
    $hard_x3_y4 = boolval($x3 === $y4) ? 'true' : 'false';
    $hard_x4_y4 = boolval($x4 === $y4) ? 'true' : 'false';
    $hard_x5_y4 = boolval($x5 === $y4) ? 'true' : 'false';
    $hard_x6_y4 = boolval($x6 === $y4) ? 'true' : 'false';
    $hard_x7_y4 = boolval($x7 === $y4) ? 'true' : 'false';
    $hard_x8_y4 = boolval($x8 === $y4) ? 'true' : 'false';

    $hard_x1_y5 = boolval($x1 === $y5) ? 'true' : 'false';
    $hard_x2_y5 = boolval($x2 === $y5) ? 'true' : 'false';
    $hard_x3_y5 = boolval($x3 === $y5) ? 'true' : 'false';
    $hard_x4_y5 = boolval($x4 === $y5) ? 'true' : 'false';
    $hard_x5_y5 = boolval($x5 === $y5) ? 'true' : 'false';
    $hard_x6_y5 = boolval($x6 === $y5) ? 'true' : 'false';
    $hard_x7_y5 = boolval($x7 === $y5) ? 'true' : 'false';
    $hard_x8_y5 = boolval($x8 === $y5) ? 'true' : 'false';

    $hard_x1_y6 = boolval($x1 === $y6) ? 'true' : 'false';
    $hard_x2_y6 = boolval($x2 === $y6) ? 'true' : 'false';
    $hard_x3_y6 = boolval($x3 === $y6) ? 'true' : 'false';
    $hard_x4_y6 = boolval($x4 === $y6) ? 'true' : 'false';
    $hard_x5_y6 = boolval($x5 === $y6) ? 'true' : 'false';
    $hard_x6_y6 = boolval($x6 === $y6) ? 'true' : 'false';
    $hard_x7_y6 = boolval($x7 === $y6) ? 'true' : 'false';
    $hard_x8_y6 = boolval($x8 === $y6) ? 'true' : 'false';

    $hard_x1_y7 = boolval($x1 === $y7) ? 'true' : 'false';
    $hard_x2_y7 = boolval($x2 === $y7) ? 'true' : 'false';
    $hard_x3_y7 = boolval($x3 === $y7) ? 'true' : 'false';
    $hard_x4_y7 = boolval($x4 === $y7) ? 'true' : 'false';
    $hard_x5_y7 = boolval($x5 === $y7) ? 'true' : 'false';
    $hard_x6_y7 = boolval($x6 === $y7) ? 'true' : 'false';
    $hard_x7_y7 = boolval($x7 === $y7) ? 'true' : 'false';
    $hard_x8_y7 = boolval($x8 === $y7) ? 'true' : 'false';

    $hard_x1_y8 = boolval($x1 === $y8) ? 'true' : 'false';
    $hard_x2_y8 = boolval($x2 === $y8) ? 'true' : 'false';
    $hard_x3_y8 = boolval($x3 === $y8) ? 'true' : 'false';
    $hard_x4_y8 = boolval($x4 === $y8) ? 'true' : 'false';
    $hard_x5_y8 = boolval($x5 === $y8) ? 'true' : 'false';
    $hard_x6_y8 = boolval($x6 === $y8) ? 'true' : 'false';
    $hard_x7_y8 = boolval($x7 === $y8) ? 'true' : 'false';
    $hard_x8_y8 = boolval($x8 === $y8) ? 'true' : 'false';

?>
        <hr>
        <table class="table">
            <caption><strong>Гибкое сравнение в PHP</caption>
            <thead>
                <tr>
                    <th></th>
                    <th><?php echo "$x1_word"; ?></th>
                    <th><?php echo "$x2_word"; ?></th>
                    <th><?php echo "$x3_word"; ?></th>
                    <th><?php echo "$x4_word"; ?></th>
                    <th><?php echo "$x5_word"; ?></th>
                    <th><?php echo "$x6_word"; ?></th>
                    <th><?php echo "$x7_word"; ?></th>
                    <th><?php echo "$x8_word"; ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong><?php echo "$y1_word"; ?></strong></td>
                    <td><?php echo "$x1_y1"; ?></td>
                    <td><?php echo "$x2_y1"; ?></td>
                    <td><?php echo "$x3_y1"; ?></td>
                    <td><?php echo "$x4_y1"; ?></td>
                    <td><?php echo "$x5_y1"; ?></td>
                    <td><?php echo "$x6_y1"; ?></td>
                    <td><?php echo "$x7_y1"; ?></td>
                    <td><?php echo "$x8_y1"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y2_word"; ?></strong></td>
                    <td><?php echo "$x1_y2"; ?></td>
                    <td><?php echo "$x2_y2"; ?></td>
                    <td><?php echo "$x3_y2"; ?></td>
                    <td><?php echo "$x4_y2"; ?></td>
                    <td><?php echo "$x5_y2"; ?></td>
                    <td><?php echo "$x6_y2"; ?></td>
                    <td><?php echo "$x7_y2"; ?></td>
                    <td><?php echo "$x8_y2"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y3_word"; ?></strong></td>
                    <td><?php echo "$x1_y3"; ?></td>
                    <td><?php echo "$x2_y3"; ?></td>
                    <td><?php echo "$x3_y3"; ?></td>
                    <td><?php echo "$x4_y3"; ?></td>
                    <td><?php echo "$x5_y3"; ?></td>
                    <td><?php echo "$x6_y3"; ?></td>
                    <td><?php echo "$x7_y3"; ?></td>
                    <td><?php echo "$x8_y3"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y4_word"; ?></strong></td>
                    <td><?php echo "$x1_y4"; ?></td>
                    <td><?php echo "$x2_y4"; ?></td>
                    <td><?php echo "$x3_y4"; ?></td>
                    <td><?php echo "$x4_y4"; ?></td>
                    <td><?php echo "$x5_y4"; ?></td>
                    <td><?php echo "$x6_y4"; ?></td>
                    <td><?php echo "$x7_y4"; ?></td>
                    <td><?php echo "$x8_y4"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y5_word"; ?></strong></td>
                    <td><?php echo "$x1_y5"; ?></td>
                    <td><?php echo "$x2_y5"; ?></td>
                    <td><?php echo "$x3_y5"; ?></td>
                    <td><?php echo "$x4_y5"; ?></td>
                    <td><?php echo "$x5_y5"; ?></td>
                    <td><?php echo "$x6_y5"; ?></td>
                    <td><?php echo "$x7_y5"; ?></td>
                    <td><?php echo "$x8_y5"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y6_word"; ?></strong></td>
                    <td><?php echo "$x1_y6"; ?></td>
                    <td><?php echo "$x2_y6"; ?></td>
                    <td><?php echo "$x3_y6"; ?></td>
                    <td><?php echo "$x4_y6"; ?></td>
                    <td><?php echo "$x5_y6"; ?></td>
                    <td><?php echo "$x6_y6"; ?></td>
                    <td><?php echo "$x7_y6"; ?></td>
                    <td><?php echo "$x8_y6"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y7_word"; ?></strong></td>
                    <td><?php echo "$x1_y7"; ?></td>
                    <td><?php echo "$x2_y7"; ?></td>
                    <td><?php echo "$x3_y7"; ?></td>
                    <td><?php echo "$x4_y7"; ?></td>
                    <td><?php echo "$x5_y7"; ?></td>
                    <td><?php echo "$x6_y7"; ?></td>
                    <td><?php echo "$x7_y7"; ?></td>
                    <td><?php echo "$x8_y7"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y8_word"; ?></strong></td>
                    <td><?php echo "$x1_y8"; ?></td>
                    <td><?php echo "$x2_y8"; ?></td>
                    <td><?php echo "$x3_y8"; ?></td>
                    <td><?php echo "$x4_y8"; ?></td>
                    <td><?php echo "$x5_y8"; ?></td>
                    <td><?php echo "$x6_y8"; ?></td>
                    <td><?php echo "$x7_y8"; ?></td>
                    <td><?php echo "$x8_y8"; ?></td>
                </tr>
            </tbody>
        </table>
        <hr>
        <table class="table">
            <caption><strong>Жёсткое сравнение в PHP</caption>
            <thead>
                <tr>
                    <th></th>
                    <th><?php echo "$x1_word"; ?></th>
                    <th><?php echo "$x2_word"; ?></th>
                    <th><?php echo "$x3_word"; ?></th>
                    <th><?php echo "$x4_word"; ?></th>
                    <th><?php echo "$x5_word"; ?></th>
                    <th><?php echo "$x6_word"; ?></th>
                    <th><?php echo "$x7_word"; ?></th>
                    <th><?php echo "$x8_word"; ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong><?php echo "$y1_word"; ?></strong></td>
                    <td><?php echo "$hard_x1_y1"; ?></td>
                    <td><?php echo "$hard_x2_y1"; ?></td>
                    <td><?php echo "$hard_x3_y1"; ?></td>
                    <td><?php echo "$hard_x4_y1"; ?></td>
                    <td><?php echo "$hard_x5_y1"; ?></td>
                    <td><?php echo "$hard_x6_y1"; ?></td>
                    <td><?php echo "$hard_x7_y1"; ?></td>
                    <td><?php echo "$hard_x8_y1"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y2_word"; ?></strong></td>
                    <td><?php echo "$hard_x1_y2"; ?></td>
                    <td><?php echo "$hard_x2_y2"; ?></td>
                    <td><?php echo "$hard_x3_y2"; ?></td>
                    <td><?php echo "$hard_x4_y2"; ?></td>
                    <td><?php echo "$hard_x5_y2"; ?></td>
                    <td><?php echo "$hard_x6_y2"; ?></td>
                    <td><?php echo "$hard_x7_y2"; ?></td>
                    <td><?php echo "$hard_x8_y2"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y3_word"; ?></strong></td>
                    <td><?php echo "$hard_x1_y3"; ?></td>
                    <td><?php echo "$hard_x2_y3"; ?></td>
                    <td><?php echo "$hard_x3_y3"; ?></td>
                    <td><?php echo "$hard_x4_y3"; ?></td>
                    <td><?php echo "$hard_x5_y3"; ?></td>
                    <td><?php echo "$hard_x6_y3"; ?></td>
                    <td><?php echo "$hard_x7_y3"; ?></td>
                    <td><?php echo "$hard_x8_y3"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y4_word"; ?></strong></td>
                    <td><?php echo "$hard_x1_y4"; ?></td>
                    <td><?php echo "$hard_x2_y4"; ?></td>
                    <td><?php echo "$hard_x3_y4"; ?></td>
                    <td><?php echo "$hard_x4_y4"; ?></td>
                    <td><?php echo "$hard_x5_y4"; ?></td>
                    <td><?php echo "$hard_x6_y4"; ?></td>
                    <td><?php echo "$hard_x7_y4"; ?></td>
                    <td><?php echo "$hard_x8_y4"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y5_word"; ?></strong></td>
                    <td><?php echo "$hard_x1_y5"; ?></td>
                    <td><?php echo "$hard_x2_y5"; ?></td>
                    <td><?php echo "$hard_x3_y5"; ?></td>
                    <td><?php echo "$hard_x4_y5"; ?></td>
                    <td><?php echo "$hard_x5_y5"; ?></td>
                    <td><?php echo "$hard_x6_y5"; ?></td>
                    <td><?php echo "$hard_x7_y5"; ?></td>
                    <td><?php echo "$hard_x8_y5"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y6_word"; ?></strong></td>
                    <td><?php echo "$hard_x1_y6"; ?></td>
                    <td><?php echo "$hard_x2_y6"; ?></td>
                    <td><?php echo "$hard_x3_y6"; ?></td>
                    <td><?php echo "$hard_x4_y6"; ?></td>
                    <td><?php echo "$hard_x5_y6"; ?></td>
                    <td><?php echo "$hard_x6_y6"; ?></td>
                    <td><?php echo "$hard_x7_y6"; ?></td>
                    <td><?php echo "$hard_x8_y6"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y7_word"; ?></strong></td>
                    <td><?php echo "$hard_x1_y7"; ?></td>
                    <td><?php echo "$hard_x2_y7"; ?></td>
                    <td><?php echo "$hard_x3_y7"; ?></td>
                    <td><?php echo "$hard_x4_y7"; ?></td>
                    <td><?php echo "$hard_x5_y7"; ?></td>
                    <td><?php echo "$hard_x6_y7"; ?></td>
                    <td><?php echo "$hard_x7_y7"; ?></td>
                    <td><?php echo "$hard_x8_y7"; ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo "$y8_word"; ?></strong></td>
                    <td><?php echo "$hard_x1_y8"; ?></td>
                    <td><?php echo "$hard_x2_y8"; ?></td>
                    <td><?php echo "$hard_x3_y8"; ?></td>
                    <td><?php echo "$hard_x4_y8"; ?></td>
                    <td><?php echo "$hard_x5_y8"; ?></td>
                    <td><?php echo "$hard_x6_y8"; ?></td>
                    <td><?php echo "$hard_x7_y8"; ?></td>
                    <td><?php echo "$hard_x8_y8"; ?></td>
                </tr>
            </tbody>
        </table>

        <p>Разница между операторами сравнения двойное равно == и тройное равно === в PHP в том, что оператор сравнения двойное равенство сравнивает значения двух операндов. Напротив, оператор сравнения тройного равенства сравнивает значение и тип операндов.</p>