<div id="conf">
	<h4 class="display-4"><b>1 - CONFERÊNCIA DOS TERMOS:</b></h4>

	<p>Com suas informações foram gerados os termos de convênio e de compromisso. Estes arquivos devem ser impressos e assinados pelas partes envolvidas.<br></p>
	<p class="lead">Confira os dados clicando aqui: &nbsp;<b><a id="conv" data-toggle="modal" data-target="#convenio" role="button">Termo de Convênio</a></b> e depois aqui: &nbsp;<b><a id="comp" data-toggle="modal" data-target="#compromisso" role="button">Termo de Compromisso</a></b>.</p> 
	<p>Leia atentamente cada um dos arquivos, verificando se todos os dados estão corretos, realize esta etapa com calma para não gerar termos inválidos, os quias não poderão ser aceitos e assinados.</p>
	<p class="lead">Caso haja algum tipo de erro, você pode corrigir clicando no botão Editar.</p>
	<p class="lead">Se os termos estiverem corretos, você poderá continuar clicando em Avançar.</p>
							   
	<div class="col-md-2">
		<a class="btn btn-warning" href="{{ route('data.index') }}"type="button">EDITAR</a>
	</div>
	<div class="col-md-2">
		<a class="btn btn-primary" id="go" href="{{ route('data.upstatus', ['i' => 'c']) }}" type="button">AVANÇAR</a>	
	</div>
	<div class="col-md-3">
		<input class="form-check-input" type="checkbox" id="tconv" disabled>
		<label class="form-check-label" for="tconv">Termo de convênio</label>	
	</div>
	<div class="col-md-3">
		<input class="form-check-input" type="checkbox" id="tcomp" disabled>
		<label class="form-check-label" for="tcomp">Termo de compromisso</label>	
	</div>
</div>