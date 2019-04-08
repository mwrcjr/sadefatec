"use strict";    
		    var index = document.getElementById("index");
		    var seg = document.getElementById("seg");
		    var end = document.getElementById("end");
		    var emp = document.getElementById("emp");
		    var est = document.getElementById("est");
		    var goseg = document.getElementById("goseg");
		    var goend = document.getElementById("goend");
		    var goend2 = document.getElementById("goend2");
		    var ntrabalhando = document.getElementById("ntrabalhando");
		    var trabalhando = document.getElementById("trabalhando");		    
		    var backseg = document.getElementById("backseg");
		    var goemp = document.getElementById("goemp");
		    var goemp2 = document.getElementById("goemp2");
		    var backend = document.getElementById("backend");
		    var goest = document.getElementById("goest");
		    var backemp = document.getElementById("backemp");
		    var save = document.getElementById("save");

			seg.style.display = "none";
			end.style.display = "none";
		    emp.style.display = "none";
		    est.style.display = "none";

		    goseg.addEventListener("click", function(){ 
		    seg.style.display = "block"; 
		    index.style.display = "none";
		    }, false);

		    goend2.addEventListener("click", function(){ 
		    end.style.display = "block";
		    ntrabalhando.style.display = "none"; 
		    index.style.display = "none";
		    }, false);

		    goend.addEventListener("click", function(){ 
		    	if($("#policy").val()== null || $("#policy").val() ==""){
				    alert('Dados da Apólice inválidos');
				    document.getElementById("policy").focus();      
				    return false;
				}else if($("#insurer").val()== null || $("#insurer").val() ==""){
				    	alert('Dados da Seguradora inválidos');
				    	document.getElementById("insurer").focus();     
				    	return false;
					}else if($("#rg").val()== null || $("#rg").val() ==""){
				    		alert('Dados do RG inválidos');
				    		document.getElementById("rg").focus();      
				    		return false;
				    }else if($("#cpf").val()== null || $("#cpf").val() ==""){
				    		alert('Dados do CPF inválidos');
				    		document.getElementById("cpf").focus();      
				    		return false;
				    }else
		    end.style.display = "block";
		    trabalhando.style.display = "none"; 
		    seg.style.display = "none";
		    }, false);

		    backseg.addEventListener("click", function(){  
			    seg.style.display = "block";
			    end.style.display = "none";		        		         
			}, false);

			goemp.addEventListener("click", function(){
				if($("#street").val()== null || $("#street").val() ==""){
				    alert('Nome de Rua inválido');
				    document.getElementById("street").focus();      
				    return false;
				}else if($("#number").val()== null || $("#number").val() ==""){
				    	alert('Número de casa inválido');
				    	document.getElementById("number").focus();  
				    	return false;
					}else if($("#district").val()== null || $("#district").val() ==""){
				    		alert('Nome de Bairro inválido');      
				    		document.getElementById("district").focus();
				    		return false;
				    }else if($("#city").val()== null || $("#city").val() ==""){
				    		alert('Nome de Cidade inválido');      
				    		document.getElementById("city").focus();
				    		return false;
				    }else if($("#state").val()== null || $("#state").val() ==""){
				    		alert('Nome de Estado inválido');      
				    		document.getElementById("state").focus();
				    		return false;
				    }else if($("#phonerec").val()== null || $("#phonerec").val() ==""){
				    		alert('Você deve informar pelo menos um Telefone de Recado');      
				    		document.getElementById("phonerec").focus();
				    		return false;
				    }else  
			emp.style.display = "block";
			end.style.display = "none";		        		         
			}, false);

			goemp2.addEventListener("click", function(){
				if($("#street").val()== null || $("#street").val() ==""){
				    alert('Nome de Rua inválido');
				    document.getElementById("street").focus();      
				    return false;
				}else if($("#number").val()== null || $("#number").val() ==""){
				    	alert('Número de casa inválido');
				    	document.getElementById("number").focus();  
				    	return false;
					}else if($("#district").val()== null || $("#district").val() ==""){
				    		alert('Nome de Bairro inválido');      
				    		document.getElementById("district").focus();
				    		return false;
				    }else if($("#city").val()== null || $("#city").val() ==""){
				    		alert('Nome de Cidade inválido');      
				    		document.getElementById("city").focus();
				    		return false;
				    }else if($("#state").val()== null || $("#state").val() ==""){
				    		alert('Nome de Estado inválido');      
				    		document.getElementById("state").focus();
				    		return false;
				    }else if($("#phonerec").val()== null || $("#phonerec").val() ==""){
				    		alert('Você deve informar pelo menos um Telefone de Recado');      
				    		document.getElementById("phonerec").focus();
				    		return false;
				    }else  
			emp.style.display = "block";
			end.style.display = "none";		        		         
			}, false);

		    backend.addEventListener("click", function(){  
			    end.style.display = "block";
			    emp.style.display = "none";		        		         
			}, false);

			goest.addEventListener("click", function(){  
		        if($("#company").val()== null || $("#company").val() ==""){
				    alert('Razão social da empresa inválida!');      
				    document.getElementById("company").focus();
				    return false;
				}else if($("#cnpj").val()== null || $("#cnpj").val() ==""){
				    alert('CNPJ da empresa inválido!');      
				    document.getElementById("cnpj").focus();
				    return false;
				}else if($("#cstreet").val()== null || $("#cstreet").val() ==""){
				    alert('Nome de Rua inválido!');      
				    document.getElementById("cstreet").focus();
				    return false;
				}else if($("#cnumber").val()== null || $("#cnumber").val() ==""){
				    alert('Numero do Endereço inválido!');      
				    document.getElementById("cnumber").focus();
				    return false;
				}else if($("#cdistrict").val()== null || $("#cdistrict").val() ==""){
				    alert('Nome de Bairro inválido!');      
				    document.getElementById("cdistrict").focus();
				    return false;
				}else if($("#ccity").val()== null || $("#ccity").val() ==""){
				    alert('Nome de Cidade inválido!');      
				    document.getElementById("ccity").focus();
				    return false;
				}else if($("#cstate").val()== null || $("#cstate").val() ==""){
				    alert('Nome de Estado inválido!');      
				    document.getElementById("cstate").focus();
				    return false;
				}else if($("#cphone").val()== null || $("#cphone").val() ==""){
				    alert('Numero de Telefone inválido!');      
				    document.getElementById("cphone").focus();
				    return false;
				}else if($("#cemail").val()== null || $("#cemail").val() ==""){
				    alert('Endereço de Email inválido!');      
				    document.getElementById("cemail").focus();
				    return false;
				}else if($("#cagent").val()== null || $("#cagent").val() ==""){
				    alert('Nome do Representante Legal inválido!');      
				    document.getElementById("cagent").focus();
				    return false;
				}else if($("#cagentrg").val()== null || $("#cagentrg").val() ==""){
				    alert('RG do Representante Legal inválido!');      
				    document.getElementById("cagentrg").focus();
				    return false;
				}else if($("#responsible").val()== null || $("#responsible").val() ==""){
				    alert('Nome do Responsável pela Documentação de Estágio inválido!');      
				    document.getElementById("responsible").focus();
				    return false;
				}else
		        est.style.display = "block"; 
		        emp.style.display = "none";
		    }, false);

		    backemp.addEventListener("click", function(){  
			    emp.style.display = "block";
			    est.style.display = "none";		        		         
			}, false);

			save.addEventListener("click", function(){  
		        if($("#supervisor").val()== null || $("#supervisor").val() ==""){
				    alert('Nome do Supervisor de Estágio na Empresa inválido!');      
				    document.getElementById("supervisor").focus();
				    return false;
				}else if($("#supervisorrole").val()== null || $("#supervisorrole").val() ==""){
				    alert('Cargo do Supervisor de Estágio na Empresa inválido!');      
				    document.getElementById("supervisorrole").focus();
				    return false;
				}else if($("#semail").val()== null || $("#semail").val() ==""){
				    alert('Email do Supervisor de Estágio na Empresa inválido!');      
				    document.getElementById("semail").focus();
				    return false;
				}else if($("#sphone").val()== null || $("#sphone").val() ==""){
				    alert('Telefone do Supervisor de Estágio na Empresa inválido!');      
				    document.getElementById("sphone").focus();
				    return false;
				}else if($("#initialdate").val()== null || $("#initialdate").val() ==""){
				    alert('Data de início inválida!');      
				    document.getElementById("initialdate").focus();
				    return false;
				}else if($("#enddate").val()== null || $("#enddate").val() ==""){
				    alert('Data do Fim do estágio inválida!');      
				    document.getElementById("enddate").focus();
				    return false;
				}else if($("#initialtime").val()== null || $("#initialtime").val() ==""){
				    alert('Hora de início inválida!');      
				    document.getElementById("initialtime").focus();
				    return false;
				}else if($("#endtime").val()== null || $("#endtime").val() ==""){
				    alert('Hora do término inválida!');      
				    document.getElementById("endtime").focus();
				    return false;
				}else if($("#acting").val()== null || $("#acting").val() ==""){
				    alert('Área de atuação inválida!');      
				    document.getElementById("acting").focus();
				    return false;
				}else if($("#payment").val()== null || $("#payment").val() ==""){
				    alert('Valor da Bolsa Estágio inválida! Se não vai receber algum valor informe R$ 0.00');      
				    document.getElementById("payment").focus();
				    return false;
				}else if($("#activities").val()== null || $("#activities").val() ==""){
				    alert('Atividades do estágio inválidas!');      
				    document.getElementById("activities").focus();
				    return false;
				}else
		        document.form.submit();
		    }, false);