<h1> saif zuigt</h1>
<?php
function createTable($results)
{
$tableheader = false;
$html = "";
$html .= '<table>';

    while ($row = $results->Fetch(PDO::FETCH_ASSOC)) {
    if ($tableheader == false) {
    $html .= '<tr>';
        foreach ($row as $key => $value) {
        $html .= '<th>  '. $key .'</th>';
        }
        $html .= '<th colspan="3" style="text-align: left;">';
            $html .= "</tr>";
    $tableheader = true;
    }
    $html .= '<tr>';

        foreach ($row as $value) {
        $html .= '<td> ' . $value . ' </td>';
        }

        $html .= '</tr>';
    }

    $html .= '</table>';

return $html;
}
?>
<?php echo createTable($this->ReservationLogic->bioscopen());?>

