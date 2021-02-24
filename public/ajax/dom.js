$('document').ready(function() {
    var chart1 = document.getElementById("productchart");
    var noms = [];
    var qte = [];
    $.ajax({
        url: '/suivistock/ajax/getallproduits',
        type: 'GET',
        data: { action: 'all' },
        success: function(data) {
           console.log(data);
           var produits = data.split('|');
           for (let i=0; i<produits.length; i++)
           {
               var fini = produits[i].split(':');
               noms.push(fini[0]);
               qte.push(parseInt(fini[1]));
           }
            myChart1 = new Chart(chart1, {
                type: 'line',
                data: {
                    labels: noms,
                    datasets: [{
                        backgroundColor: "rgba(48, 164, 255, 0.2)",
                        borderColor: "rgba(48, 164, 255, 0.8)",
                        data: qte,
                        label: 'qte',
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    title: { display: false, text: 'Chart' },
                    legend: { position: 'top', display: false, },
                    tooltips: { mode: 'index', intersect: false, },
                    hover: { mode: 'nearest', intersect: true },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'NOMS'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'QUANTITES'
                            }
                        }]
                    }
                }
            });
        }
    });

});

