function cargarPortafolio(){
	var num=10;
	var ruta='assets/img/slide/foto$.jpg';

	var list=new Array();

	for (i=0;i<num;i++){
	list[i]-new Image();
	list[i].src=ruta.replace("$",i);
	}

}