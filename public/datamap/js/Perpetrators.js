var ctx = document.getElementById("polarChart").getContext('2d');
					var myChart = new Chart(ctx, {
						type: 'polarArea',
						data: {
							labels: ["Government Officials", "Taliban", "Unknown Groups", "Media Officials", "Protesters", "local", "ISIS"],
							datasets: [{
								backgroundColor: [
									"#7C0D0D",
									"#4D1616",
									"#242020",
									"#929292",
									 "#86460D",
									 "#D21212",
									 "#B67676"
								],
								data: [57, 36, 64, 50, 29, 73, 43]
							}]
						},
            options: {
                scale: {
                    ticks: {
                        display: true,
                        min: 0,
                        max: 100,
                        maxTicksLimit: 5
                    }
                },
                legend: {
                  display: false
                }
            }
					});