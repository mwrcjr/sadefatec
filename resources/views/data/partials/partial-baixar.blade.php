<div id="save">
	<h4 class="display-4"><b>2 - DOWNLOAD DOS ARQUIVOS:</b></h4>

	<p>Agora que você conferiu os termos gerados pelo sistema, os arquivos devem ser salvos e depois impressos em 3 vias, para serem assinados.<br></p>
	<p>Os termos serão salvos no formato PDF, para evitar erros de formatação na impressão. Salve em seu computador ou diretamente em um Pen Drive, por segurança uma cópia de cada termo será armazenada pelo sistema, caso você precise realizar o download novamente.</p>
	<p class="lead">Para voltar a tela de conferência de dados clique no botão Voltar.</p>
	<p class="lead">Para salvar os termos para a impressão clique nos botões Baixar.</p>
							   
	<div class="col-md-2">
		<a class="btn btn-warning" href="{{ route('data.upstatus', ['i' => 'i']) }}"type="button">VOLTAR</a>
	</div>
	<div class="col-md-4">
		<a class="btn btn-success" href="{{ route('pdf.convenio') }}" type="button">BAIXAR TERMO DE CONVÊNIO</a>	
	</div>
	<div class="col-md-4">
		<a class="btn btn-success" href="{{ route('pdf.compromisso') }}" type="button">BAIXAR TERMO DE COMPROMISSO</a>	
	</div>
</div>