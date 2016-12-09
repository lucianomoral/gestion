<!DOCTYPE>
<html>
<head>

    <title>Estadisticas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="">
    
    <script src="canvasjs/canvasjs.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script>
    
    window.onload = function () {
	var top = new CanvasJS.Chart("top8",
	{
		title:{
			text: "Top 8 productos"
		},
        
        animationEnabled: true,
        
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
        
		data: [{        
			indexLabelFontSize: 20,
			indexLabelFontFamily: "Monospace",       
			indexLabelFontColor: "darkgrey", 
			indexLabelLineColor: "darkgrey",        
			indexLabelPlacement: "outside",
			type: "pie",       
			showInLegend: true,
			toolTipContent: "{literal}$ {y} - <strong>#percent%</strong>{/literal}",
			dataPoints: [
                
            {foreach item = top from = $topProductos}
                
                { y: {$top.Total}, legendText:"{$top.Nombre}", indexLabel: "{$top.Nombre}" },
                
            {/foreach}                
            ]
		}]
	});
	top.render();
    
    var ventasPorCliente = new CanvasJS.Chart("ventasPorCliente",
	{
		title:{
			text: "Ventas por cliente"
		},
        
        animationEnabled: true,
        
        axisX:{
				interval: 1,
				gridThickness: 0,
				labelFontSize: 15,
				labelFontStyle: "normal",
				labelFontWeight: "normal",
				labelFontFamily: "Lucida Sans Unicode"
        },
               
        axisY:{
          
               interval: 10000
               
        },
               
		data: [{
			type: "bar",       
			//showInLegend: true,
			toolTipContent: "{literal}$ {y}{/literal}",
			dataPoints: [
                
            {foreach item = VPC from = $ventasPorCliente}
                
               {literal}{{/literal} y: {$VPC.Total}, label: "{$VPC.Nombre}" {literal}}{/literal},
                
            {/foreach}       
            ]
		}]
	});
	ventasPorCliente.render();
    
    var ventasPorMes = new CanvasJS.Chart("ventasPorMes",
	{
		title:{
			text: "Ventas por mes"
		},
        
        animationEnabled: true,
               
		data: [{
			type: "column",
			//toolTipContent: "{literal}$ {y}{/literal}",
			dataPoints: [
                
            {foreach item = VPM from = $ventasPorMes}
                
               {literal}{{/literal} y: {$VPM.VENTA}, label: "{$VPM.FECHA}" {literal}}{/literal},
                
            {/foreach}
            ]
		}]
	});
	ventasPorMes.render();
}
    
    </script>


</head>
<body>

<div id="ventasPorMes" style="height: 300px; width: 100%;"></div>
<div id="ventasPorCliente" style="height: 300px; width: 100%;"></div><br><br>
<div id="top8" style="height: 300px; width: 100%;"></div><br><br>

</body>
</html>