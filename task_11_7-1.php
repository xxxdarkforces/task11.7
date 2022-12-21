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
    $d1 = ($a1 <= $b1) || ($a1 > $b1);
    $d2 = ($a2 <= $b2) || ($a2 == $b2);
    $d3 = ($a3 == $b3) || ($a3 < $b3);
    $d4 = ($a4 > $b4) || ($a4 == $b4);

    echo '
    <table border="1">
        <thead>
            <tr>
                <th><strong>A</strong></th>
                <th><strong>B</strong></th>
                <th><strong>!A</strong></th>
                <th><strong>A || B</strong></th>
                <th><strong>A &amp;&amp; B</strong></th>
                <th><strong>A xor B</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>' . (int) $a1 . '</td>
                <td>' . (int) $b1 . '</td>
                <td>' . (int) $c1 . '</td>
                <td>' . (int) $d1 . '</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>' . (int) $a2 . '</td>
                <td>' . (int) $b2 . '</td>
                <td>' . (int) $c2 . '</td>
                <td>' . (int) $d2 . '</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>' . (int) $a3 . '</td>
                <td>' . (int) $b3 . '</td>
                <td>' . (int) $c3 . '</td>
                <td>' . (int) $d3 . '</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>' . (int) $a4 . '</td>
                <td>' . (int) $b4 . '</td>
                <td>' . (int) $c4 . '</td>
                <td>' . (int) $d4 . '</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
';
