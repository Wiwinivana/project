<?php

use app\models\Member;
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
              [ <?php print Member::getPeminjaman(); ?> ]
        }
    });
    revenueChart.render();
})
	

</script>