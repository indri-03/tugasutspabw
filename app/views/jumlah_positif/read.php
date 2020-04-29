<?php require_once("../../../auth.php"); ?>

<?php include("atas.php") ?>
<div class="container-fluid chart">




<canvas id="piechart" class="text-center" width="100" height="100"></canvas>

</div>
    <?php include("bawah.php") ?>

    <script type="text/javascript">
        var ctx = document.getElementById("piechart").getContext("2d");
        var data = {
            labels: [ 'Positif'],
            datasets: [{
                label: "Jumlah Terkonfirmasi",
                data: [ <?php echo $p_positif ?>
                ],
                backgroundColor: [
                    '#29B0D0',
                    '#2A516E',
                    '#F07124'
                ]
            }]
        };

        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: {
                responsive: true
            }
        });
    </script>