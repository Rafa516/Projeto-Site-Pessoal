 function Data() 
			{
    
			    var data = new Date();
			    var dias = new Array("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");
			    var meses  = new Array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho","Julho", "Agosto", "Outubro", "Novembro", "Dezembro");

			    document.write(dias[data.getDay()] + ", " + data.getDate() + " de " + meses[data.getMonth()] +  " de "  + data.getFullYear()+".");
    		} 

    		// Função para mostrar a data 

 
