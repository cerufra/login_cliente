 <script type="text/javascript" src="js/validar_email.js"></script>
 
   <script type="text/javascript" src="js/validar_cpf.js"></script>
  
            
<form id="register-form" action="" method="post" role="form" style="display: none;">
				<div class="form-group">
					<input type="text" name="nome" id="nome" tabindex="1" class="form-control" placeholder="Nome" value="">
					<input name="ok" id="ok" tabindex="1" class="form-control"  type="text" style="display:none" value="true">
					<div id="msgnome"></div>
						</div>
						<div class="form-group">
						     <input type="email" name="email" id="email" tabindex="1" onblur="validacaoEmail(email)"  class="form-control" placeholder="Email Address" value="">
							 <div id="msgemail"></div>
						</div>
						<div class="form-group">
							 <input type="Password" name="senha" id="senha" tabindex="2" class="form-control" placeholder="Password">
						     <div id="msgsenha"></div>
							 </div>
					
									<div class="form-group">
					<input type="text" name="cpf" id="cpf" tabindex="1"onblur="validacaoCpf(cpf)" class="form-control" placeholder="cpf" value="">
					 <div id="msgcpf"></div>
						</div>
						<div class="form-group">
					<input type="text" name="telefone" id="telefone" tabindex="1" class="form-control"  placeholder="telefone no formato (00)0000-0000 " value="">
					       <div id="msgtelefone"></div>
						</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="button" name="cadastrar" id="cadastrar" tabindex="4" class="form-control btn btn-register" value="CADASTRAR">
											</div>
										</div>
									</div>
								</form>

		 <script type="text/javascript" src="js/salvar_cadastro.js"></script>	
	</section>
</body>	
</html>

