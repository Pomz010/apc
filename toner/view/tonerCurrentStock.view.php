<div class="container my-3">
    <table class="table table-hover caption-top">
            <caption class="h1">Toner Current Stock</caption>
        <thead class="table-success">
        <tr>
            <th>Printer Model</th>
            <th>Printer Type</th>
            <th>Cartridge Type</th>
            <th>Black</th>
            <th>Cyan</th>
            <th>Magenta</th>
            <th>Yellow</th>
        </tr>
        </thead>
        <tbody>
        <?php

            $displayToner = new tonerStockCtrl();
            $rows = $displayToner->getStock();

            foreach($rows  as $row) {
                $table = <<<_TR
                    <tr>
                        <td>{$row['model']}</td>
                        <td>{$row['printer_type']}</td>
                        <td>{$row['cartridge_type']}</td>
                        <td>{$row['SUM(black)']}</td>
                        <td>{$row['SUM(cyan)']}</td>
                        <td>{$row['SUM(magenta)']}</td>
                        <td>{$row['SUM(yellow)']}</td>
                    </tr>
                _TR;
                echo $table;
            }
        ;?>
        </tbody>
    </table>
</div>