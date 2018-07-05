<?php
require 'DBConnect';
$sql= "SELECT count(*) FROM user GROUP BY YEAR(date) ORDER BY date";
$result = mysqli_query($link,$sql);
while ($row = mysql_fetch_array($result)) {
   $data[] = $row['value'];
}


/*$result2= mysqli_query($mysqli,$sql2);
while ($row2 = mysql_fetch_array($result)2) {
   $data2[] = $row2['value'];
}

$result3 = mysqli_query($mysqli,$sql3);
while ($row3 = mysql_fetch_array($result3)) {
   $data3[] = $row3['value'];
}*/
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

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<div id="container3" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<script type="text/javascript">
	
		Highcharts.chart('container', {
			  chart: {
			    type: 'column'
			    renderTo: 'container'
			  },
			  title: {
			    text: 
			  },
			  subtitle: {
			    text: 
			  },
			  xAxis: {
			    categories: [  ],
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
			    name: '',
			    data: [<?php echo join($data, ',') ?>]

			  }]
		});
		Highcharts.chart('container2', {

    title: {
        text: 
    },

    subtitle: {
        text: 
    },

    yAxis: {
        title: {
            text: 
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
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },

    series: [{
        name: '',
        data: [<?php echo join($data, ',') ?>]
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
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Chrome',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Internet Explorer',
            y: 11.84
        }, {
            name: 'Firefox',
            y: 10.85
        }, {
            name: 'Edge',
            y: 4.67
        }, {
            name: 'Safari',
            y: 4.18
        }, {
            name: 'Sogou Explorer',
            y: 1.64
        }, {
            name: 'Opera',
            y: 1.6
        }, {
            name: 'QQ',
            y: 1.2
        }, {
            name: 'Other',
            y: 2.61
        }]
    }]
});
</script>
	<?php //echo join($data, ',') ?>
	<?php //echo join($data, ',') ?>

</body>
</html>