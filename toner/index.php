<?php
include "./includes/autoload.inc.php";
require_once "./includes/header.inc.php";
require_once "./control/transaction.ctrl.php";
require_once "./control/tonerStock.ctrl.php";
?>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // User input submitted to create data
        if(isset($_POST['submit'])) {
            $date = $_POST['date'];
            $cartridge_type = $_POST['cartridge_type'];
            $black_qty = $_POST['black_qty'];
            $cyan_qty = $_POST['cyan_qty'];
            $magenta_qty = $_POST['magenta_qty'];
            $yellow_qty = $_POST['yellow_qty'];
            $employeeId = $_POST['employeeId'];
            $transactionType = $_POST['transactionType'];

            $transaction = new Transaction(
                $date, 
                $cartridge_type, 
                $black_qty,
                $cyan_qty, 
                $magenta_qty,
                $yellow_qty,
                $employeeId,
                $transactionType
            );

        $transaction->setTransaction();
        }
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }
?>

<!-- Header Nav -->
<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Toner Monitoring</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <!-- Modal Button -->
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#tonerInbound">New Transaction</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-warning" href="#">Asset Monitoring</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-warning" href="#">Helpdesk</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<!-- New Transaction Modal Form -->
<div class="modal fade fs-5" id="tonerInbound" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Transaction</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <form class="mt-3" action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">

                    <div class="mb-2 d-flex justify-content-between">
                        <div>
                            <label class="me-5" for="inbound">Inbound:</label>
                            <input type="radio" id="inbound" name="transactionType" value="1">
                        </div>
                        <div>
                            <label class="me-5" for="outbound">Outbound:</label>
                            <input type="radio" id="outbound" name="transactionType" value="2">
                        </div>
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="date">Date:</label>
                        <input class="w-50" type="date" id="date" name="date">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="cartridge">Cartridge Type: </label>
                        <select class="w-50" name="cartridge_type" id="cartridge_type">
                            <option value="1">CF500A Series</option>
                            <option value="2">CANON 337</option>
                            <option value="3">CF400A Series</option>
                            <option value="4">CE285A</option>
                            <option value="5">CF217A</option>
                        </select>
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="black">Black: </label>
                        <input class="w-50" type="number" id="black" name="black_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="cyan">Cyan: </label>
                        <input class="w-50" type="number" id="Cyan" name="cyan_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="magenta">Magenta: </label>
                        <input class="w-50" type="number" id="magenta" name="magenta_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="yellow">Yellow: </label>
                        <input class="w-50" type="number" id="yellow" name="yellow_qty">
                    </div>

                    <div class="mb-2 d-flex justify-content-between">
                        <label for="employeeId">C/O: </label>
                        <input class="w-50" type="number" id="employeeId" name="employeeId">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Current Stock Table -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<?php require_once "./includes/footer.inc.php"; ?>