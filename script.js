function iniciar(){
	var boton= document.getElementById('caja_p');
	var seccion= document.getElementById('caja_1');
	boton.style.transition='opacity 2s ease';
	boton.style.opacity=0;
	seccion.style.transition='opacity 2s ease';
	seccion.style.opacity=1;
	seccion.style.transition='top 1s ease';
	seccion.style.top='30%';
}
function iniciar2(){
	var boton= document.getElementById('caja_p');
	var seccion= document.getElementById('caja_1f');
	var bloque2 = document.getElementById('f3');
	seccion.style.transition='opacity 2s ease';
	seccion.style.opacity=1;
	seccion.style.transition='top 1s ease';
	seccion.style.top='36%';
	bloque2.style.transition='opacity 2s ease';
	bloque2.style.opacity=1;
	bloque2.style.transition='top 1s ease';
	bloque2.style.top='20%';
	boton.style.transition='opacity 1s ease';
	boton.style.opacity=0;
}
function fin(){
	var boton= document.getElementById('caja_p');
	var seccion= document.getElementById('caja_1f');
	var bloque2= document.getElementById('f3');
	boton.style.transition='opacity 2s ease';
	boton.style.opacity=1;
	seccion.style.transition='opacity 2s ease';
	seccion.style.opacity=0;
	seccion.style.transition='top 1s ease';
	seccion.style.top='-40%';
	bloque2.style.transition='opacity 2s ease';
	bloque2.style.opacity=0;
	bloque2.style.transition='top 1s ease';
	bloque2.style.top='-60%';
}
function menu() {
	var flecha= document.getElementById('menu2');
	var menu= document.getElementById('menu');
	flecha.style.transition='top 0.5s ease';
	flecha.style.top='10%';
	menu.style.transition='top 0.5s ease';
	menu.style.top='0%';
}
function cmenu() {
	var flecha= document.getElementById('menu2');
	var menu= document.getElementById('menu');
	menu.style.transition='top 0.5s ease';
	menu.style.top='-10.5%';
	flecha.style.transition='top 0.5s ease';
	flecha.style.top='0%';
}
function cmenu2() {
	var flecha= document.getElementById('menu2');
	var menu= document.getElementById('menu');
	menu.style.transition='top 0.5s ease';
	menu.style.top='-10.5%';	
}
function isc(){
	var caja1 = document.getElementById('caja_1');
	caja1.style.transition='left 1s ease';
	caja1.style.left='0%';
}
function isc2(){
	var caja1 = document.getElementById('caja_1');
	caja1.style.transition='left 1s ease';
	caja1.style.left='-51%';
}
function isc3(){
	var caja1 = document.getElementById('caja_2');
	caja1.style.transition='left 1s ease';
	caja1.style.left='0%';
}
function isc4(){
	var caja1 = document.getElementById('caja_2');
	caja1.style.transition='left 1s ease';
	caja1.style.left='-51%';
}
function dp() {
	var caja = document.getElementById("perf");
	caja.style.transition='left 1s ease';
	caja.style.left='0%';
}
function dp2() {
	var caja = document.getElementById("perf");
	caja.style.transition='left 1s ease';
	caja.style.left='-30%';
}
function conp(){
	var caja = document.getElementById("conf");
	caja.style.transition='left 1s ease';
	caja.style.left='0%';
}
function conp2(){
	var caja = document.getElementById("conf");
	caja.style.transition='left 1s ease';
	caja.style.left='-30%';
}
function editar_n() {
	var nombre = document.getElementById('editar_nombre');
	var cerrar = document.getElementById('cerrar_n');
	var editar = document.getElementById('editar_n');
	nombre.style.display='block';
	cerrar.style.display='block';
	editar.style.display='none';
}
function editar_c() {
	var correo = document.getElementById('editar_correo');
	var cerrar = document.getElementById('cerrar_c');
	var editar = document.getElementById('editar_c');
	correo.style.display='block';
	cerrar.style.display='block';
	editar.style.display='none';
}
function cerrar_n() {
	var nombre = document.getElementById('editar_nombre');
	var cerrar = document.getElementById('cerrar_n');
	var editar = document.getElementById('editar_n');
	nombre.style.display='none';
	cerrar.style.display='none';
	editar.style.display='block';
}
function cerrar_c() {
	var correo = document.getElementById('editar_correo');
	var cerrar = document.getElementById('cerrar_c');
	var editar = document.getElementById('editar_c');
	correo.style.display='none';
	cerrar.style.display='none';
	editar.style.display='block';
}
function editar_tf() {
	var telf = document.getElementById('editar_telf');
	var	cerrar = document.getElementById('cerrar_tf');
	var editar = document.getElementById('editar_tf');
	telf.style.display='block';
	cerrar.style.display='block';
	editar.style.display='none';
}
function editar_tm() {
	var telm = document.getElementById('editar_telm');
	var	cerrar = document.getElementById('cerrar_tm');
	var editar = document.getElementById('editar_tm');
	telm.style.display='block';
	cerrar.style.display='block';
	editar.style.display='none';
}
function cerrar_tf() {
	var telf = document.getElementById('editar_telf');
	var	cerrar = document.getElementById('cerrar_tf');
	var editar = document.getElementById('editar_tf');
	telf.style.display='none';
	cerrar.style.display='none';
	editar.style.display='block';
}
function cerrar_tm() {
	var telm = document.getElementById('editar_telm');
	var	cerrar = document.getElementById('cerrar_tm');
	var editar = document.getElementById('editar_tm');
	telm.style.display='none';
	cerrar.style.display='none';
	editar.style.display='block';
}
function editar_grado() {
	var grado = document.getElementById('editar_grado');
	var	cerrar = document.getElementById('cerrar_grado');
	var editar = document.getElementById('editar_grd');
	grado.style.display='block';
	cerrar.style.display='block';
	editar.style.display='none';
}
function cerrar_grado() {
	var grado = document.getElementById('editar_grado');
	var	cerrar = document.getElementById('cerrar_grado');
	var editar = document.getElementById('editar_grd');
	grado.style.display='none';
	cerrar.style.display='none';
	editar.style.display='block';
}