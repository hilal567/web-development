<?php
$link = mysqli_connect("localhost", "myuser", "12345", "myuser");

$sql = "SELECT id as count FROM user 
            GROUP BY YEAR(datetimer) ORDER BY datetimer";
$user = mysqli_query($link,$sql);
	$user = mysqli_fetch_all($user,MYSQLI_ASSOC);
	$user = json_encode(array_column($user, 'count'),JSON_NUMERIC_CHECK);
/*$sql2 = "SELECT count(id) FROM user where gender like 'M%'";
$gender = mysqli_query($link,$sql2);
  $gender = mysqli_fetch_all($gender,MYSQLI_ASSOC);
  $gender = json_encode(array_column($gender, 'count'),JSON_NUMERIC_CHECK);
*/


?>
<!DOCTYPE html>
<html>
<head>
	<title>Analysis</title>
</head>
<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<br>
<div id="container2" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
<div id="container3" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<script type="text/javascript">
	
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'User Analysis'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [2016,2017,2018],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: ''
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [{
    name: 'Users',
    data: <?php echo $user;?>

  }]

  
});
		
Highcharts.chart('container2', {

  title: {
    text: 'Number of Trips starting from 2016'
  },

  yAxis: {
    title: {
      text: 'Number of Trips '
    }
  },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: true
      },
      pointStart: 2015
    }
  },

  series: [{
    name: 'Trips',
    data: []
  }],

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
Highcharts.chart('container3', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: ''
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: false
      },
      showInLegend: true
    }
  },
  series: [{
    name: '',
    colorByPoint: true,
    data: [{
      name: '',
      y: <?php echo $gender;?>,
      sliced: true,
      selected: true
    }, {
      name: '',
      y: 0
    }, {
      name: '',
      y: 0
    }, {
      name: '',
      y: 0
    }, {
      name: '',
      y: 0
    }, {
      name: 'Other',
      y: 0
    }]
  }]
});
</script>
	<style type="text/css">
    #container2{
 

</style>

</body>
</html>