<?php

/**
 * Class Utilities
 *
 * used to speed up development
 */

class Utilities {

    /**
     * Creates table
     *
     * @param $result
     * @return string
     */
    public function createTable($result) {

        $tableheader = false;
        $html = "";

        $html .= '<table class="table">';

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            if ($tableheader == false) {
                $html .= '<tr>';
                foreach ($row as $key => $value) {
                    $html .= '<th>  ' . $key . '</th>';
                }
                $html .= '<th colspan="3" style="text-align: left;">Actions';
                $html .= "</tr>";
                $tableheader = true;
            }
            $html .= '<tr>';

            $row['product_price'] = '€ ' . $row['product_price'];
            $row['product_price'] = str_replace('.', ',', $row['product_price']);
            foreach ($row as $value) {
                $html .= '<td> ' . $value . ' </td>';
            }
            $html .= '<td><button class="btn btn-primary">read</button></td> ';
            $html .= '<td><button class="btn btn-primary">update</button></td> ';
            $html .= '<td><button class="btn btn-danger">delete</button></td> ';
            $html .= '</tr>';
        }

        $html .= '</table>';

        return $html;

    }

}
