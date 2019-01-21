<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

<canvas id="myChart" width="800" height="200"></canvas>

<script>
var ctx = document.getElementById("myChart").getContext('2d');

var data_nama = [];
var data_jumlah = [];

$.post("<?= base_url('index.php/Chart/getData') ?>",
    function (data){
        var json = JSON.parse(data);
        $.each(json, function (test, item) {
            data_nama.push(item.tahun);
            data_jumlah.push(item.jumlah)
        });

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: data_nama,
            datasets: [{
                label: 'Jumlah Mahasiswa',
                data: data_jumlah,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
});

</script>
</body>
</html>