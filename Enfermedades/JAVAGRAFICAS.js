elementos1 = [["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"], ["Enf1", "Enf2", "Enf3", "Enf4", "Enf5"],
			 [2478,5267,734,784,433],[60,0, 60, 60]]
titulo1 = "Prevalencia de las enfemedades"

tipo4 = "doughnut"
tipo2 = "pie"
tipo1 = "polarArea"
colores = ["#2D607F", "#A7DDFF","#5BC0FF","#546F7F","#4899CC"]
colores1 = ["#732D7F", "#F2A7FF","#E65BFF","#74357F","#B848CC"]
colores2 = ["#297F49", "#9EFFC2","#51FF92","#51FF92","#51FF92"]
colores3 = ["#7F2929", "#FF3030","#FF5251","#7F3030","#CC4141"]
colores4 = ["#7F731B", "#FFE526","#FFE736","#7F7422","#CCB92B"]

grafico(elementos1[1], titulo1, elementos1[2], colores, elementos1[3], tipo4, "dona1");
grafico(elementos1[1], titulo1, elementos1[2], colores1, elementos1[3], tipo2, "dona2");
grafico(elementos1[1], titulo1, elementos1[2], colores2, elementos1[3], tipo1, "dona3");
grafico(elementos1[1], titulo1, elementos1[2], colores3, elementos1[3], tipo4, "dona4");
grafico(elementos1[1], titulo1, elementos1[2], colores4, elementos1[3], tipo1, "dona5");
function grafico(etiquetas, titulo, datos, backColor, position, tipo, id)
{
	new Chart(document.getElementById(id).getContext('2d'), {
				type: tipo,
				data: {
					labels: etiquetas,
					datasets: [{label: titulo,backgroundColor: backColor,data: datos}]
				},
				options: {
					title: {
						display: true,
						text: titulo
					},
					layout: {
							padding: {
								left: position[0],
								right: position[1],
								top: position[2],
								bottom: position[3]
									}
							}
				}
			});
}
