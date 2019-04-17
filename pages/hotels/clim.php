<?php
$app = App::getInstance()->getTable('Hotel')->getHotelsWithClim();
$app1 = App::getInstance()->getTable('Hotel')->getHotelsWithoutClim();

?>
<style>
    .col-md-4: {
        border: 1px solid;
    }
</style>
<div class="row">
    <div class="col-md-4">
        <h3>La moyenne avec climatisation</h3>
        <p>La moyenne des notes avec internet est <span id="with"><?=$app[0]->moyenne;?></span>%</p>
        <canvas id="doughnutChart1">

        </canvas>
    </div>
    <div class="col-md-4">
        <h3>Comparaison</h3>
        <canvas id="doughnutChart3">

        </canvas>

    </div>
    <div class="col-md-4">
        <h3>La moyenne sans climatisation</h3>
        <p>La moyenne des notes sans internet est <span id="without"><?=$app1[0]->moyenne;?></span>%</p>
        <canvas id="doughnutChart2">

        </canvas>

    </div>
</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.2/Chart.min.js"></script>

<script>
    var ctxD = document.getElementById("doughnutChart1").getContext('2d');
    var ctxD1 = document.getElementById("doughnutChart2").getContext('2d');
    var ctxD2 = document.getElementById("doughnutChart3").getContext('2d');
    var d1 = document.getElementById("with").innerText;
    var d2 = document.getElementById("without").innerText;

    console.log(d1);
    var myLineChart = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: ["Avec climatisation", "reste"],
            datasets: [{

                data: [d1, 100],
                backgroundColor: ["#46BFBD", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#616774"]
            }]
        },
        options: {
            responsive: true
        }
    });

    var myLineChart1 = new Chart(ctxD1, {
        type: 'doughnut',
        data: {
            labels: ["Sans climatisation", "reste"],
            datasets: [{

                data: [d2, 100],
                backgroundColor: ["#46BFBD", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#616774"]
            }]
        },
        options: {
            responsive: true
        }
    });

    var myLineChart3 = new Chart(ctxD2, {
        type: 'doughnut',
        data: {
            labels: ["Avec climatisation", "Sans climatisation"],
            datasets: [{

                data: [d1, d2],
                backgroundColor: ["#46BFBD", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#616774"]
            }]
        },
        options: {
            responsive: true
        }
    });
</script>