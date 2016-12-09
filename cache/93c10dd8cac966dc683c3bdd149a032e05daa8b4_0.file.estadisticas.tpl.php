<?php /* Smarty version 3.1.24, created on 2016-07-10 21:44:52
         compiled from "C:/wamp/www/Kiosco/templates/estadisticas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:318405782a5b4b21c85_73033420%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93c10dd8cac966dc683c3bdd149a032e05daa8b4' => 
    array (
      0 => 'C:/wamp/www/Kiosco/templates/estadisticas.tpl',
      1 => 1468179774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318405782a5b4b21c85_73033420',
  'variables' => 
  array (
    'topProductos' => 0,
    'top' => 0,
    'ventasPorCliente' => 0,
    'VPC' => 0,
    'ventasPorMes' => 0,
    'VPM' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5782a5b4c8f702_44562136',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5782a5b4c8f702_44562136')) {
function content_5782a5b4c8f702_44562136 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '318405782a5b4b21c85_73033420';
?>
<!DOCTYPE>
<html>
<head>

    <title>Estadisticas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="">
    
    <?php echo '<script'; ?>
 src="canvasjs/canvasjs.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
    
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
			toolTipContent: "$ {y} - <strong>#percent%</strong>",
			dataPoints: [
                
            <?php
$_from = $_smarty_tpl->tpl_vars['topProductos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['top'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['top']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['top']->value) {
$_smarty_tpl->tpl_vars['top']->_loop = true;
$foreach_top_Sav = $_smarty_tpl->tpl_vars['top'];
?>
                
                { y: <?php echo $_smarty_tpl->tpl_vars['top']->value['Total'];?>
, legendText:"<?php echo $_smarty_tpl->tpl_vars['top']->value['Nombre'];?>
", indexLabel: "<?php echo $_smarty_tpl->tpl_vars['top']->value['Nombre'];?>
" },
                
            <?php
$_smarty_tpl->tpl_vars['top'] = $foreach_top_Sav;
}
?>                
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
			toolTipContent: "$ {y}",
			dataPoints: [
                
            <?php
$_from = $_smarty_tpl->tpl_vars['ventasPorCliente']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['VPC'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['VPC']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['VPC']->value) {
$_smarty_tpl->tpl_vars['VPC']->_loop = true;
$foreach_VPC_Sav = $_smarty_tpl->tpl_vars['VPC'];
?>
                
               { y: <?php echo $_smarty_tpl->tpl_vars['VPC']->value['Total'];?>
, label: "<?php echo $_smarty_tpl->tpl_vars['VPC']->value['Nombre'];?>
" },
                
            <?php
$_smarty_tpl->tpl_vars['VPC'] = $foreach_VPC_Sav;
}
?>       
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
			//toolTipContent: "$ {y}",
			dataPoints: [
                
            <?php
$_from = $_smarty_tpl->tpl_vars['ventasPorMes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['VPM'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['VPM']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['VPM']->value) {
$_smarty_tpl->tpl_vars['VPM']->_loop = true;
$foreach_VPM_Sav = $_smarty_tpl->tpl_vars['VPM'];
?>
                
               { y: <?php echo $_smarty_tpl->tpl_vars['VPM']->value['VENTA'];?>
, label: "<?php echo $_smarty_tpl->tpl_vars['VPM']->value['FECHA'];?>
" },
                
            <?php
$_smarty_tpl->tpl_vars['VPM'] = $foreach_VPM_Sav;
}
?>
            ]
		}]
	});
	ventasPorMes.render();
}
    
    <?php echo '</script'; ?>
>


</head>
<body>

<div id="ventasPorMes" style="height: 300px; width: 100%;"></div>
<div id="ventasPorCliente" style="height: 300px; width: 100%;"></div><br><br>
<div id="top8" style="height: 300px; width: 100%;"></div><br><br>

</body>
</html><?php }
}
?>