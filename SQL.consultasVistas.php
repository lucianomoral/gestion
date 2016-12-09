<?php

$vVentasPorMesPorArticulo = 
"SELECT

	A.IdArticulo AS Codigo, 

	A.Nombre AS Nombre,

	ROUND(SUM(F.precio * F.cantidad), 2) AS Total,

	CASE MONTH(T.fechaCrea)

		WHEN '1' THEN 'ENERO'
		WHEN '2' THEN 'FEBRERO'
		WHEN '3' THEN 'MARZO'
		WHEN '4' THEN 'ABRIL'
		WHEN '5' THEN 'MAYO'
		WHEN '6' THEN 'JUNIO'
		WHEN '7' THEN 'JULIO'
		WHEN '8' THEN 'AGOSTO'
		WHEN '9' THEN 'SEPTIEMBRE'
		WHEN '10' THEN 'OCTUBRE'
		WHEN '11' THEN 'NOVIEMBRE'
		WHEN '12' THEN 'DICIEMBRE'

	END AS Fecha

FROM

	articulos A 
		INNER JOIN facturalineastemp F 
			ON A.IdArticulo = F.idArticulo 
		INNER JOIN facturatemp T 
			ON F.idFactura = T.idFactura 

WHERE T.cerrada = '1'

GROUP BY Nombre, Fecha, Codigo 

ORDER BY Total DESC";

$vVentasTotalesPorArticulo = 

"SELECT

	A.IdArticulo AS Codigo, 

	A.Nombre AS Nombre,

	ROUND(SUM(F.precio * F.cantidad), 2) AS Total

FROM

	articulos A 
		INNER JOIN facturalineastemp F 
			ON A.IdArticulo = F.idArticulo 
		INNER JOIN facturatemp T 
			ON F.idFactura = T.idFactura 

WHERE T.cerrada = '1'

GROUP BY Nombre, Codigo 

ORDER BY Total DESC

LIMIT 8";

$vVentasPorCliente =

"SELECT 
	C.Nombre AS 'Nombre', 
	ROUND(SUM(F.cantidad * F.precio), 2) AS 'Total'

FROM 
	clientes C 
	        INNER JOIN facturatemp T
        		ON T.idCliente = C.IdCliente 
	    	INNER JOIN facturalineastemp F 
        		ON F.idFactura = T.idFactura 
            
WHERE 
	T.cerrada = '1' 
    
GROUP BY
	C.Nombre

ORDER BY
	2";

$vVentasPorMes = 

"SELECT	

	CASE MONTH(T.fechaCrea)

		WHEN '1' THEN 'ENERO'
		WHEN '2' THEN 'FEBRERO'
		WHEN '3' THEN 'MARZO'
		WHEN '4' THEN 'ABRIL'
		WHEN '5' THEN 'MAYO'
		WHEN '6' THEN 'JUNIO'
		WHEN '7' THEN 'JULIO'
		WHEN '8' THEN 'AGOSTO'
		WHEN '9' THEN 'SEPTIEMBRE'
		WHEN '10' THEN 'OCTUBRE'
		WHEN '11' THEN 'NOVIEMBRE'
		WHEN '12' THEN 'DICIEMBRE'

	END AS 'FECHA', 
    SUM(ROUND((F.cantidad * F.precio), 2)) AS 'VENTA'

FROM 
	facturalineastemp F 
		INNER JOIN facturatemp T 
			ON F.idFactura = T.idFactura
WHERE 
	T.cerrada = '1'

GROUP BY 
	1

ORDER BY 
	MONTH(T.fechaCrea)";

?>