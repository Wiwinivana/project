<?php

use app\models\Peminjaman;
?>
<script>

FusionCharts.ready(function(){
      var revenueChart = new FusionCharts({
        "type": "Column3d",
        "renderAt": "grafik-peminjaman",
        "width": "100%",
        "height": "300",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption" : "Grafik Peminjaman Buku",
              "xAxisName": "Peminjam",
              "yAxisName": "Jumlah",
              "theme": "fint"
           },
          "data":        
              [ <?php print Peminjaman::getGrafikPerBuku(); ?> ]
        }
    });
    revenueChart.render();
})
	
</script>
<div id="grafik-peminjaman"> FusionChart XI will load here! </div>