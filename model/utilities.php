<?php

/**
 * Class Utilities
 *
 * used to speed up development
 */

class Utilities
{

    /**
     * Creates table and adds pagination buttons
     *
     * @param $result
     * @param null $amountPages
     * @return string
     */
    public function createTable($result, $amountPages = NULL)
    {

        $tableheader = false;
        $html = "";

        $html .= '<div class="row">';
        $html .= '<div class="col-xs-12 col-md-12">';
        $html .= '<table class="table">';

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            if ($tableheader == false) {
                $html .= '<tr>';
                $html .= '<th><input class="bulk-checkbox" type="checkbox" /></th>';

                foreach ($row as $key => $value) {
                    $html .= '<th>  ' . $key . '</th>';
                }
                $html .= '<th colspan="3" style="text-align: left;">Actions';
                $html .= "</tr>";
                $tableheader = true;
            }

            $html .= '<tr>';
            $html .= '<td><input class="item-checkbox" type="checkbox" /></td> ';

            $row['product_price'] = $this->priceFormating($row['product_price']);

            foreach ($row as $value) {
                $html .= '<td> ' . $value . ' </td>';
            }

            $html .= '<td><button class="btn btn-primary" onclick="singleProduct(' . $row['product_id'] . ')">read</button></td> ';
            $html .= '<td><button class="btn btn-primary">update</button></td> ';
            $html .= '<td><button class="btn btn-danger">delete</button></td> ';
            $html .= '</tr>';
        }

        $html .= '</table></div></div>';

        for($index = 0; $amountPages > $index; $index++) {
            $html .= '<a href="?op=reads&page='.$index.'">'.($index+1).'</a>';
        }


        return $html;
    }

    /**
     * Formats price values
     *
     * @param $price
     * @return mixed|string
     */
    public function priceFormating($price) {
        $price = '€ ' . $price;
        $price = str_replace('.', ',', $price);

        return $price;
    }

}
