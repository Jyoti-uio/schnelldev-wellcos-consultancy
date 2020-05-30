<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Doccure</title>
    <!-- Favicons -->
    <link type="image/x-icon" href="assets\img\favicon.png" rel="icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets\plugins\fontawesome\css\fontawesome.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome\css\all.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets\css\style.css">
</head>
<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <?php include 'common-pages/header.php' ?>
            <div class="content presc-content">
                <div class="container">
                    <div class="pres-section">
                            <h2>Prescription Detail</h2>
                            <table class="pres-table">
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Start Date- End Date</th>
                                    <th>Drug Name</th>
                                    <th>Unit</th>
                                    <th>Rate</th>
                                    <th>Duration</th>
                                    <th>Instructions</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>28-5-2020 - 28-6-2020</td>
                                    <td>Ecospirin Gold</td>
                                    <td>1</td>
                                    <td>50</td>
                                    <td>1 month</td>
                                    <td>After Dinner</td>
                                    <td>150</td>
                                </tr>
                            </table>
                    </div>
                    <div class="follow-txt">
                        Follow Up Date: <span class="foloow-date">5th August 2020</span>
                    </div>
                </div>
            </div>
        <?php include 'common-pages/footer.php' ?>
        <!-- /Footer -->

    </div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets\js\jquery.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets\js\popper.min.js"></script>
<script src="assets\js\bootstrap.min.js"></script>

<!-- Slick JS -->
<script src="assets\js\slick.js"></script>

<!-- Custom JS -->
<script src="assets\js\script.js"></script>

</body>

</html>