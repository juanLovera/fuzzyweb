tt = setTimeout(function() {cambiarCaja(0)},4000);
caja = 1;
function cambiarCaja(n)
{
	clearTimeout(tt);
	$("#caja_titulo"+caja).hide();
	$("#caja_texto"+caja).hide();
	document.getElementById("selector"+caja).src = "img/box_selector.png";
	if (n == 0)
	{
		if (caja == 3)
			caja = 1;
		else
			caja++;
	}
	else
		caja = n;
	document.getElementById("selector"+caja).src = "img/box_selector_c.png";
	$("#caja_titulo"+caja).fadeIn("slow");
	$("#caja_texto"+caja).fadeIn("slow");
	tt = setTimeout(function() {cambiarCaja(0)},4000);
}