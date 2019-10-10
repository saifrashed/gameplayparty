<?php $x = $x; ?>
<?php include './view/header.php' ?>

<div class="row start-xs">
    <div class="col-xs-12 col-md-2 admin-sidebar">
        <ul>
            <li><a href="./?op=admin&selectedPage=reserveringen">Reserveringen</a></li>
            <li><a href="./?op=admin&selectedPage=statistics">Financiën</a></li>
        </ul>
    </div>
    <div class="col-xs-12 col-md-10 admin-display">
        <div class="admin-header">
            <h1>Welkom terug <?php echo $_SESSION['voornaam'] . ' ' . $_SESSION['achternaam'] ?></h1>
            <a class="btn btn-danger" href="./?op=logout">Uitloggen</a>
        </div>

        <?php function createTable($bestel)
        {
            $tableheader = false;
            $html = "";
            $html .= '<table>';

            while ($row = $bestel->Fetch(PDO::FETCH_ASSOC)) {
                if ($tableheader == false) {
                    $html .= '<tr>';
                    foreach ($row as $key => $value) {
                        $html .= '<th>  ' . $key . '</th>';

                    }
                    $html .= '<th>  Totaal</th>';
                    $html .= '<th colspan="3" style="text-align: left;">';
                    $html .= "</tr>";
                    $tableheader = true;
                }
                $html .= '<tr>';

                foreach ($row as $value) {
                    $html .= '<td> ' . $value . ' </td>';

                }
                $html .= ' <td>€ ' . $row['prijs'] * $row['aantal'] . '</td>';

                $html .= '</tr>';
            }

            $html .= '</table>';

            return $html;
        } ?>

        <?php if ($x == 1) {
            echo $bestel;
        } ?>
    </div>
</div>

<?php include './view/footer.php' ?>
