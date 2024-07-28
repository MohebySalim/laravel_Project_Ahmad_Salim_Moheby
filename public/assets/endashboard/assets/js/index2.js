$(function() {
    "use strict";

	// chart 1

	$('#chart1').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
            type: 'bar',
            height: '25',
            barWidth: '2',
            resize: true,
            barSpacing: '2',
            barColor: '#008cff'
        });

	// chart 2

		$('#chart2').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
            type: 'bar',
            height: '25',
            barWidth: '2',
            resize: true,
            barSpacing: '2',
            barColor: '#fd3550'
        });

	// chart 3

		$('#chart3').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
            type: 'bar',
            height: '25',
            barWidth: '2',
            resize: true,
            barSpacing: '2',
            barColor: '#15ca20'
        });

	// chart 4

		$('#chart4').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
            type: 'bar',
            height: '25',
            barWidth: '2',
            resize: true,
            barSpacing: '2',
            barColor: '#ff9700'
        });

	// chart 5

		$('#chart5').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
            type: 'bar',
            height: '25',
            barWidth: '2',
            resize: true,
            barSpacing: '2',
            barColor: '#0dceec'
        });

	// chart 6

		$('#chart6').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8,7,10,9,5,8,7,9,5,4], {
            type: 'bar',
            height: '25',
            barWidth: '2',
            resize: true,
            barSpacing: '2',
            barColor: '#223035'
        });


	// chart 7
	var ctx = document.getElementById('chart7').getContext('2d');



  var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
		          gradientStroke1.addColorStop(0, 'rgba(255, 255, 0, 0.5)');
		          gradientStroke1.addColorStop(1, 'rgba(233, 30, 99, 0.0)');

		      var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
		          gradientStroke2.addColorStop(0, '#ffff00');
		          gradientStroke2.addColorStop(1, '#e91e63');


		      var gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
		          gradientStroke3.addColorStop(0, 'rgba(0, 114, 255, 0.5)');
		          gradientStroke3.addColorStop(1, 'rgba(0, 200, 255, 0.0)');

		      var gradientStroke4 = ctx.createLinearGradient(0, 0, 0, 300);
		          gradientStroke4.addColorStop(0, '#0072ff');
		          gradientStroke4.addColorStop(1, '#00c8ff');


	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
      datasets: [{
        label: 'Visits',
        data: [6, 200, 140, 12, 17, 8, 10],
        backgroundColor: gradientStroke1,
        borderColor: gradientStroke2,
        pointRadius :"0",
        pointHoverRadius:"0",
        borderWidth: 3
      }, {
        label: 'Sales',
        data: [5, 30, 16, 23, 8, 14, 11],
        backgroundColor: gradientStroke3,
        borderColor: gradientStroke4,
        pointRadius :"0",
        pointHoverRadius:"0",
        borderWidth: 3
      }]
		},
		options: {
			maintainAspectRatio: false,
			legend: {
				display: true,
				labels: {
					fontColor: '#585757',
					boxWidth: 40
				}
			},
			tooltips: {
				enabled: false
			},
			scales: {
				xAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: '#585757'
					},
					gridLines: {
						display: true,
						color: "rgba(0, 0, 0, 0.07)"
					},
				}],
				yAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: '#585757'
					},
					gridLines: {
						display: true,
						color: "rgba(0, 0, 0, 0.07)"
					},
				}]
			}
		}
	});


  // chart 2

  // var ctx = document.getElementById('chart-order-status').getContext('2d');

  // var gradientStroke = ctx.createLinearGradient(0, 0, 0, 300);
  //     gradientStroke.addColorStop(0, '#ee0979');
  //     gradientStroke.addColorStop(1, '#ff6a00');

  // var myChart = new Chart(ctx, {
  //   type: 'bar',
  //   data: {
  //     labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
  //     datasets: [{
  //       label: 'Sales',
  //       data: [9, 7, 14, 10, 12, 8],
  //       backgroundColor: gradientStroke,
  //       hoverBackgroundColor: gradientStroke,
  //       borderColor: "#fff",
  //       pointRadius :6,
  //       pointHoverRadius :6,
  //       pointHoverBackgroundColor: "#fff",
  //       borderWidth: 2

  //     }]
  //   },
  // options: {
  //   maintainAspectRatio: false,
  //   legend: {
  //     display: false,
  //     labels: {
  //     fontColor: '#585757',
  //     boxWidth:40
  //     }
  //   },
  //    "animation": {
  //     "duration": 1,
  //     "onComplete": function() {
  //       var chartInstance = this.chart,
  //         ctx = chartInstance.ctx;

  //       ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
  //       ctx.textAlign = 'center';
  //       ctx.textBaseline = 'bottom';

  //       this.data.datasets.forEach(function(dataset, i) {
  //         var meta = chartInstance.controller.getDatasetMeta(i);
  //         meta.data.forEach(function(bar, index) {
  //           var data = dataset.data[index];
  //           ctx.fillText(data, bar._model.x, bar._model.y - 5);
  //         });
  //       });
  //     }
  //   },
  //   tooltips: {
  //     displayColors:false
  //   },
  //   scales: {
  //     xAxes: [{
  //       barPercentage: .4,
  //     ticks: {
  //       beginAtZero:true,
  //       fontColor: '#585757'
  //     },
  //     gridLines: {
  //       display: true ,
  //       color: "rgba(0, 0, 0, 0.08)"
  //     },
  //     }],
  //      yAxes: [{
  //     ticks: {
  //       beginAtZero:true,
  //       fontColor: '#585757'
  //     },
  //     gridLines: {
  //       display: false ,
  //       color: "rgba(0, 0, 0, 0.08)"
  //     },
  //     }]
  //    }

  //  }
  // });
//
// //chart horizantal
// var ctx = document.getElementById("chart-order-horizontalBar");
// debugger;
// var data = {
//   labels: ["2 Jan", "9 Jan", "16 Jan", "23 Jan", "30 Jan", "6 Feb", "13 Feb"],
//   datasets: [{
//     data: [150, 87, 56, 50, 88, 60, 45],
//     backgroundColor: "#4082c4"
//   }]
// }
// var myChart = new Chart(ctx, {
//   type: 'horizontalBar',
//   data: data,
//   options: {
//     "hover": {
//       "animationDuration": 0
//     },
//     "animation": {
//       "duration": 1,
//       "onComplete": function() {
//         var chartInstance = this.chart,
//           ctx = chartInstance.ctx;
//
//         ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
//         ctx.textAlign = 'center';
//         ctx.textBaseline = 'bottom';
//
//         this.data.datasets.forEach(function(dataset, i) {
//           var meta = chartInstance.controller.getDatasetMeta(i);
//           meta.data.forEach(function(bar, index) {
//             var data = dataset.data[index];
//             ctx.fillText(data, bar._model.x, bar._model.y - 5);
//           });
//         });
//       }
//     },
//     legend: {
//       "display": false
//     },
//     tooltips: {
//       "enabled": false
//     },
//     scales: {
//       yAxes: [{
//         display: false,
//         gridLines: {
//           display: false
//         },
//         ticks: {
//           max: Math.max(...data.datasets[0].data) + 10,
//           display: false,
//           beginAtZero: true
//         }
//       }],
//       xAxes: [{
//         gridLines: {
//           display: true
//         },
//         ticks: {
//           beginAtZero: true
//         }
//       }]
//     }
//   }
// });

// worl map

jQuery('#dashboard-map').vectorMap(
{
    map: 'world_mill_en',
    backgroundColor: 'transparent',
    borderColor: '#818181',
    borderOpacity: 0.25,
    borderWidth: 1,
    zoomOnScroll: false,
    color: '#009efb',
    regionStyle : {
        initial : {
          fill : '#ff9700'
        }
      },
    markerStyle: {
      initial: {
                    r: 9,
                    'fill': '#fff',
                    'fill-opacity':1,
                    'stroke': '#000',
                    'stroke-width' : 5,
                    'stroke-opacity': 0.4
                },
                },
    enableZoom: true,
    hoverColor: '#009efb',
    markers : [{
        latLng : [21.00, 78.00],
        name : 'Lorem Ipsum Dollar'

      }],
    hoverOpacity: null,
    normalizeFunction: 'linear',
    scaleColors: ['#b6d6ff', '#005ace'],
    selectedColor: '#c9dfaf',
    selectedRegions: [],
    showTooltip: true,
});


// chart 8

  $("#chart8").sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8], {
            type: 'line',
            width: '100%',
            height: '40',
            lineWidth: '2',
            lineColor: '#0dceec',
            fillColor: 'rgba(13, 206, 236, 0.2)',
            spotColor: '#0dceec',
    });


// chart 9

  $("#chart9").sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8], {
            type: 'line',
            width: '100%',
            height: '40',
            lineWidth: '2',
            lineColor: '#ff9700',
            fillColor: 'rgba(255, 151, 0, 0.2)',
            spotColor: '#ff9700',
    });

// chart 10

  $("#chart10").sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8,6,4,5,8,7,10,9,5,8,7,9,5,4,8], {
            type: 'line',
            width: '100%',
            height: '40',
            lineWidth: '2',
            lineColor: '#15ca20',
            fillColor: 'rgba(21, 202, 32, 0.2)',
            spotColor: '#15ca20',
    });

 // chart 11

var dougnut = document.getElementById('dougnut1').getContext('2d');
console.log(dougnut,'-------')
  var gradientStroke1 = dougnut.createLinearGradient(0, 0, 0, 300);
              gradientStroke1.addColorStop(0, 'rgba(255, 255, 0, 0.5)');
              gradientStroke1.addColorStop(1, 'rgba(233, 30, 99, 0.0)');

          var gradientStroke2 = dougnut.createLinearGradient(0, 0, 0, 300);
              gradientStroke2.addColorStop(0, '#ffff00');
              gradientStroke2.addColorStop(1, '#e91e63');


          var gradientStroke3 = dougnut.createLinearGradient(0, 0, 0, 300);
              gradientStroke3.addColorStop(0, 'rgba(0, 114, 255, 0.5)');
              gradientStroke3.addColorStop(1, 'rgba(0, 200, 255, 0.0)');

          var gradientStroke4 = dougnut.createLinearGradient(0, 0, 0, 300);
              gradientStroke4.addColorStop(0, '#0072ff');
              gradientStroke4.addColorStop(1, '#00c8ff');


  var myChart1 = new Chart(dougnut, {
    type: 'line',
    data: {
      labels: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
      datasets: [{
        label: 'Visits',
        data: [6, 200, 140, 12, 17, 8, 10],
        backgroundColor: gradientStroke1,
        borderColor: gradientStroke2,
        pointRadius :"0",
        pointHoverRadius:"0",
        borderWidth: 3
      }, {
        label: 'Sales',
        data: [5, 30, 16, 23, 8, 14, 11],
        backgroundColor: gradientStroke3,
        borderColor: gradientStroke4,
        pointRadius :"0",
        pointHoverRadius:"0",
        borderWidth: 3
      }]
    },
    options: {
      maintainAspectRatio: false,
      legend: {
        display: true,
        labels: {
          fontColor: '#585757',
          boxWidth: 40
        }
      },
      tooltips: {
        enabled: false
      },
      scales: {
        xAxes: [{
          ticks: {
            beginAtZero: true,
            fontColor: '#585757'
          },
          gridLines: {
            display: true,
            color: "rgba(0, 0, 0, 0.07)"
          },
        }],
        yAxes: [{
          ticks: {
            beginAtZero: true,
            fontColor: '#585757'
          },
          gridLines: {
            display: true,
            color: "rgba(0, 0, 0, 0.07)"
          },
        }]
      }
    }
  });

	Morris.Donut({
		element: 'chart11',
		data: [{
			label: "Samsung",
			value: 15,

		}, {
			label: "Nokia",
			value: 30
		}, {
			label: "Apple",
			value: 20
		}],
		resize: true,
		colors:['#008cff', '#15ca20', '#fd3550']
	});



});

