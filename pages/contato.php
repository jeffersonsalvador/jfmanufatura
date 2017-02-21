<section class="container-contato">
	<div class="container">
		<h4 class="title-contato">Entre em contato</h4>
		
		<div class="col-md-12">
			<div id="msg-form" class="col-md-12 g-none alert alert-info" ></div>
		</div>
	
		<form method="post" class="form-contato ajax-submit" action="pages/send-mail.php" >
			<div class="col-md-6">			
				<label>Nome *</label>
				<input name="nome" class="form-control">
				
				<label>Assunto</label>
				<input name="assunto" class="form-control">
				
				<label>E-mail *</label>
				<input name="e-mail" class="form-control">
			</div>
			<div class="col-md-6">		
				<label>Mensagem *</label>
				<textarea name="mensagem" class="form-control" rows="9"></textarea>
			</div>
			
			<input type="submit" value="Enviar" >
			
		</form>
		
	</div>
</section>