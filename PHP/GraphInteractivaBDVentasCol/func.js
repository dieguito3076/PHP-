$(document).ready(function(){
				$.ajax({
					url:"http://localhost/data.php",
					method: "GET",
					success: function(data){
						console.log(data);
						var lecturas = [];
						for(var i in data){
							lecturas.push(parseInt(data[i].LITROS));
						}
						console.log(lecturas);
						var ctx = $("#mycanvas");
						var chart = new Chart(ctx, {
						    type: 'line',
						    data: {
						        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
						        "Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
						        datasets: [{
						            label: "Gasto de Agua ANUAL",
						            backgroundColor: '#639AFF',
						            borderColor: 'rgb(255, 99, 132)',
						            data: lecturas,
						        }]
						    },
						    options: {
						    	layout: {
									padding: {
										left: 50,
										right: 300,
										top: 200,
										bottom: 50
									}
								}
						    }
						});
					},
					error: function(data){
						console.log(data);
					}
				});
			});