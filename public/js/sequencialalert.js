"use strict";    
		    var conv = document.getElementById("conv");
		    var comp = document.getElementById("comp");
		    var go = document.getElementById("go");


		    conv.addEventListener("click", function(){ 
		    document.getElementById("tconv").checked = true;
		    }, false);

		    comp.addEventListener("click", function(){ 
		    document.getElementById("tcomp").checked = true;
		    }, false);

		    go.addEventListener("click", function(e){
		    
		    var tconv = document.getElementById("tconv");
		    var tcomp = document.getElementById("tcomp");
		    if (tconv.checked == false) {
		    	e.preventDefault();
		    	alert('LEIA E CONFIRA OS DADOS DO TERMO DE CONVÊNIO!\n\nÉ de sua total responsabilidade conferir os dados, antes de realizar a impressão e encaminhar para as assinaturas!');
		    	conv.focus();     
				return false;
		    }else if(tcomp.checked == false){
		    	e.preventDefault();
				alert('LEIA E CONFIRA OS DADOS DO TERMO DE COMPROMISSO!\n\nÉ de sua total responsabilidade conferir os dados, antes de realizar a impressão e encaminhar para as assinaturas!');    
				return false;
			}

			  var txt;
			  var r = confirm("\nOS TERMOS DE CONVÊNIO E COMPROMISSO ESTÃO COM TODOS OS DADOS CORRETOS E SERÃO SALVOS NO SEU PERFIL DE ESTÁGIO!");
			  if (r == true) {
			    e.currentTarget.submit();
			  } else {
			    e.preventDefault();
			    window.location.reload();
			  }
					    
		    }, false);

		    
