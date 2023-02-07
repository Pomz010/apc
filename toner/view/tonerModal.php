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
                        <select name="employeeId" id="employeeId">
                        <?php
                            require_once "./control/employeeSelection.ctrl.php";
                            $showList = new EmployeeList();
                            $stmt = $showList->showList();
                            
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo `<option value="{$row['id']}">{$row['name']}</option>`;
                            }
                        ?>
                        </select>
                        <!-- <input class="w-50" type="number" id="employeeId" name="employeeId"> -->
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