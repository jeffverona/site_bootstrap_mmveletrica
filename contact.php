<?php include("header.php");?>
	<!-- Content  -->
	<div id="page-content">
		<!-- Breadcrumbs Block -->
		<div class="container">
			<div class="breadcrumbs">
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Contatos</li>
				</ul>
			</div>
		</div>
		<!-- //Breadcrumbs Block -->
		<!-- Block -->
		<div class="block">
			<h1 class="text-center decor color">Solicite <b>Contato</b></h1>
			<div class="divider"></div>
				<iframe
				  width="100%"
				  height="225"
				  frameborder="0" style="border:0"
				  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB3VnqVcWUyOZpYeAkHXAL81jnu0oLDadw
				    &q=R.+Bulgária,+97+-+Jardim+Adriane,+Itaquaquecetuba+-+SP,+08598-746" allowfullscreen>
				</iframe>
		</div>
		<!-- //Block -->
		<!-- Block -->
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-3">
						<div class="address">
							<div class="address-block">
								<i class="icon icon-map-marker"></i>
								<h6 class="text-uppercase">Endereço:</h6>Rua Bugária, Nº 97
								<br> Jd. Andriane - Itaquaquecetuba
							</div>
							<div class="address-block">
								<i class="icon icon-telephone"></i>
								<h6 class="text-uppercase">Ligue:</h6> (11) 97371-2252
							</div>
							<div class="divider-sm"></div>
							<h6>E-mail</h6>
							<p><a href="#">mmveletrica@gmail.com</a>
								<br>
								<a href="#">www.mmveletrica.com</a></p>
						</div>
						<div class="divider"></div>
						<div class="social-links">
							<ul>
								<li>
									<a class="icon icon-facebook" href="#"></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-1 visible-lg"></div>
					<div class="col-sm-7 col-md-8">
						<form action="process-contact.php" id="contactform" class="contact-form" name="contactform" method="post" novalidate>
							<div id="success">
								<p>Sua mensagem foi enviada com sucesso</p>
							</div>
							<div id="error">
								<p>Ocorreu um erro, tente atualizar e enviar o formulário novamente.</p>
							</div>
							<div class="inputs-col">
								<div class="row">
									<div class="col-md-6">
										<div class="input-wrapper">
											<label>Nome <span class="required">*</span></label>
											<input type="text" class="input-custom input-full" name="name" placeholder="Digite seu nome">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-wrapper">
											<label>Telefone</label>
											<input type="text" class="input-custom input-full" name="phone" placeholder="(55) x5555-5555">
										</div>
									</div>
								</div>
								<div class="input-wrapper">
									<label>E-mail</label>
									<input type="text" class="input-custom input-full" name="email" placeholder="xxxx@xxxx.xxx">
								</div>
							</div>
							<div>
								<label>Mensagem</label>
								<textarea class="textarea-custom input-full" name="message"></textarea>
							</div>
							<button type="submit"  name="enviar_email" value="enviar" id="submit" class="btn btn-border"><i class="icon icon-lightning"></i><span>Enviar</span></button>
						</form>
					</div>
 value="enviar"				</div>
			</div>
		</div>
		<!-- //Block -->

	</div>
	<!-- // Content  -->
<?php include("footer.php");?>