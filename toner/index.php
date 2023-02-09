<?php
// Class autoloder
require_once "./includes/autoload.inc.php";

// Index page footer
require_once "./includes/header.inc.php";

// Performs subtraction or addition to toner balance depending on transaction type
require_once "./control/transaction.ctrl.php";

// Displays updated toner balance when new transaction is entered
require_once "./control/tonerStock.ctrl.php";

// Prevents resubmission of input form when page is reloaded
require_once "./view/resubmitPrevention.php";

// Header Nav
require_once "./view/headerNav.php";

// New Transaction Modal Form
require_once "./view/tonerModal.php";

// Current Stock Table
require_once "./view/tonerCurrentStock.view.php";

// Index page footer
require_once "./includes/footer.inc.php";
