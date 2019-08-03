var jsonResp= []
var jsonTemp= []
var jsonPulso= []

horas = 1;
var ajax = new XMLHttpRequest();
ajax.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
  var recibo = this.response;
  var json1 = recibo.split('&');
  jsonTemp = JSON.parse(json1[0]);
  jsonPulso = JSON.parse(json1[1]);
  jsonResp = JSON.parse(json1[2]);
  for(var i = 0; i<jsonTemp.length; i++){
      jsonTemp[i] = parseFloat(jsonTemp[i]);
  }
  for(var i = 0; i<jsonPulso.length; i++){
      jsonPulso[i] = parseFloat(jsonPulso[i]);
  }
  for(var i = 0; i<jsonResp.length; i++){
      jsonResp[i] = parseFloat(jsonResp[i]);
  }
  Highcharts.chart('pulso', {

        title: {
          text: 'Graficación del monitoreo de tu pulso'
        },

        subtitle: {
          text: 'Medición en los 5 minutos de conexión'
        },

        yAxis: {
          title: {
              text: 'Número de pulsaciones'
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
              pointStart: 1
          }
        },

        series: [{
          name: 'Pulso que el sistema registró de tu cuerpo',
          data: jsonPulso
        }, {
          name: 'Pulso de una persona entre 5-10 años',
          data: [40,44.02,44.4,44.7,44.8,44.89,45,46,50,50,50,50,50,51,51,50,50,50,50,50]
        }, {
          name: 'Pulso de una persona entre 10-18 años',
          data: [64,64.02,64.4,64.7,64.8,64.89,65,66,70,70,70,70,70,71,71,70,70,70,70,70]
        }, {
          name: 'Pulso de una persona entre 18-40 años',
          data: [84,84.02,84.4,84.7,84.8,84,83,82,84,84,84,84,85,85,85.6,89,89.9,90,91,92]
        }, {
          name: 'Pulso de una persona entre 40-75 años',
          data: [30,30.02,30.4,34.7,34.8,33.89,32,33,33,34,34.5,35,34,35.6,37,37,36,36.5,37,37.5]
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
  // Now create the chart
  Highcharts.chart('temperatura', {

                chart: {
                    type: 'area',
                    zoomType: 'x',
                    panning: true,
                    panKey: 'shift',
                    scrollablePlotArea: {
                        minWidth: 600
                    }
                },

                title: {
                    text: 'Graficación de tu temperatura corporal'
                },

                subtitle: {
                    text: 'Registro de tu temperatura en cinco minutos'
                },

                annotations: [{
                    labelOptions: {
                        backgroundColor: 'rgba(255,255,255,0.5)',
                        verticalAlign: 'top',
                        y: 15
                    },
                    labelOptions: {
                        shape: 'connector',
                        align: 'right',
                        justify: false,
                        crop: true,
                        style: {
                            fontSize: '0.8em',
                            textOutline: '1px white'
                        }
                    },
                }],

                xAxis: {
                    labels: {
                        format: '{value} seg'
                    },
                    minRange: 5,
                    title: {
                        text: 'Temperatura'
                    }
                },

                yAxis: {
                    startOnTick: true,
                    endOnTick: false,
                    maxPadding: 0.35,
                    title: {
                        text: null
                    },
                    labels: {
                        format: '{value} grados'
                    }
                },

                tooltip: {
                    headerFormat: 'Temperatura: {point.x:.1f} grados<br>',
                    pointFormat: '{point.y} grados/min',
                    shared: true
                },

                legend: {
                    enabled: false
                },

                series: [{
                    data: jsonTemp,
                    lineColor: Highcharts.getOptions().colors[1],
                    color: Highcharts.getOptions().colors[2],
                    fillOpacity: 0.5,
                    name: 'Elevation',
                    marker: {
                        enabled: false
                    },
                    threshold: null
                }]

  });
  Highcharts.chart('respiraciones', {
                chart: {
                    type: 'spline',
                    scrollablePlotArea: {
                        minWidth: 600,
                        scrollPositionX: 1
                    }
                },
                title: {
                    text: 'Medición de las respiraciones por minuto'
                },
                subtitle: {
                    text: 'Graficación de las respiraciones por minuto de tus lecturas'
                },
                xAxis: {
                    type: 'datetime',
                    labels: {
                        overflow: 'justify'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Respiraciones/minuto'
                    },
                    minorGridLineWidth: 0,
                    gridLineWidth: 0,
                    alternateGridColor: null,
                    plotBands: [{ // Light air
                        from: 0.3,
                        to: 1.5,
                        color: 'rgba(68, 170, 213, 0.1)',
                        label: {
                            text: 'Resp/min Rango1',
                            style: {
                                color: '#606060'
                            }
                        }
                    }, { // Light breeze
                        from: 1.5,
                        to: 3.3,
                        color: 'rgba(0, 0, 0, 0)',
                        label: {
                            text: 'Resp/min Rango2',
                            style: {
                                color: '#606060'
                            }
                        }
                    }, { // Gentle breeze
                        from: 3.3,
                        to: 5.5,
                        color: 'rgba(68, 170, 213, 0.1)',
                        label: {
                            text: 'Resp/min Rango3',
                            style: {
                                color: '#606060'
                            }
                        }
                    }, { // Moderate breeze
                        from: 5.5,
                        to: 8,
                        color: 'rgba(0, 0, 0, 0)',
                        label: {
                            text: 'Resp/min Rango4',
                            style: {
                                color: '#606060'
                            }
                        }
                    }, { // Fresh breeze
                        from: 8,
                        to: 11,
                        color: 'rgba(68, 170, 213, 0.1)',
                        label: {
                            text: 'Resp/min Rango5',
                            style: {
                                color: '#606060'
                            }
                        }
                    }, { // Strong breeze
                        from: 11,
                        to: 14,
                        color: 'rgba(0, 0, 0, 0)',
                        label: {
                            text: 'Resp/min Rango6',
                            style: {
                                color: '#606060'
                            }
                        }
                    }, { // High wind
                        from: 14,
                        to: 15,
                        color: 'rgba(68, 170, 213, 0.1)',
                        label: {
                            text: 'Resp/min Rango7',
                            style: {
                                color: '#606060'
                            }
                        }
                    }]
                },
                tooltip: {
                    valueSuffix: ' Resp/min'
                },
                plotOptions: {
                    spline: {
                        lineWidth: 4,
                        states: {
                            hover: {
                                lineWidth: 5
                            }
                        },
                        marker: {
                            enabled: false
                        },
                        pointInterval: 10000, // one hour
                        pointStart: 1
                    }
                },
                series: [{
                    name: 'Tu respiración',
                    data: jsonResp

                }, {
                    name: 'Respiración ideal', //Para ello, al haber ingresado la edad, será importante que con base a la edad se le asigne una matriz que tenga las respiraciones en ese rango de edad
                    data: [8.1, 7.1, 7.5, 7.6, 7.5, 8.1, 8.3, 8.2, 8.6, 8.8, 8.9, 8.955, 8.85, 9.2, 9.25, 9.15, 9.3, 9, 9.2, 9.5]
                }],
                navigation: {
                    menuItemStyle: {
                        fontSize: '10px'
                    }
                }
  });
}
}
ajax.open("GET", "reciboDeDatosGraficacion.php?horasD="+horas, true);
ajax.send();

function solicitarEdad(){
  var edad = prompt("Ingresa tu edad");
}
function cambiarPagina(url, nombreVentana){
  window.open(url, nombreVentana);
}
function mostrarPagina(){
  alert("A continuación se mostrarán los resultados.")
  $('#seccionDiagnostico').css("display", "block");
}

var ajax1 = new XMLHttpRequest();
ajax1.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
  var recibo1 = this.response;
  var json2 = recibo1.split('&');
  var foto = JSON.parse(json2[0]);
  var fotoCamara = JSON.parse(json2[1]);
  var enfermedad = JSON.parse(json2[2]);
  var descripcion = JSON.parse(json2[3]);

  var FotoMedicamento1 = JSON.parse(json2[4]);
  var descrMed1 = JSON.parse(json2[5]);

  var FotoMedicamento2 = JSON.parse(json2[6]);
  var descrMed2 = JSON.parse(json2[7]);

  var FotoMedicamento3 = JSON.parse(json2[8]);
  var descrMed3 = JSON.parse(json2[9]);

  var FotoMedicamento4 = JSON.parse(json2[10]);
  var descrMed4 = JSON.parse(json2[11]);

  //Setting the DataBase images
  var imgD = document.getElementById("imgDiagnos");
  imgD.setAttribute("src", foto);
  var img = document.getElementById("imgPropia");
  img.setAttribute("src", fotoCamara);
  var img1 = document.getElementById("img1");
  img1.setAttribute("src", FotoMedicamento1);
  var img2 = document.getElementById("img2");
  img2.setAttribute("src", FotoMedicamento2);
  var img3 = document.getElementById("img3");
  img3.setAttribute("src", FotoMedicamento3);
  var img4 = document.getElementById("img4");
  img4.setAttribute("src", FotoMedicamento4);

  //Setting DataBase text
  document.getElementById("anuncio").innerHTML = "Frase A, se ha identificado"+enfermedad;
  document.getElementById("descripcion").innerHTML = descripcion;
  document.getElementById("medDes1").innerHTML = descrMed1;
  document.getElementById("medDes2").innerHTML = descrMed2;
  document.getElementById("medDes3").innerHTML = descrMed3;
  document.getElementById("medDes4").innerHTML = descrMed4;
}
}
ajax1.open("GET", "ExtrayendoDatos.php?horasD="+horas, true);
ajax1.send();
