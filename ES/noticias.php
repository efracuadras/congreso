<?php $ingles = false ?>

<?php include('../site/header.php') ?>
<?php include('../admin/noticias.php') ?>

<div class="view news">
	<div class="section1 o-h">
		<?php 
			foreach ($noticias as $noticia) {
		?>
		
			<div class="yellow-box o-h <?php echo $noticia['tipo']?>">
				<div class="sec sec1 o-h">
					<?php 
						if ($noticia['tipo'] == 'individual') {
							?>
								<div class="img">
									<img src="../images/noticias/<?php echo $noticia['imagen1'] ?>" alt="noticia-<?php echo $noticia['imagen1'] ?>">
								</div>
							<?php
						} else {
							?>
							<div class="img">
								<img src="../images/noticias/<?php echo $noticia['imagen1'] ?>" alt="noticia-<?php echo $noticia['imagen1'] ?>">
							</div>
							<div class="img">
								<img src="../images/noticias/<?php echo $noticia['imagen2'] ?>" alt="noticia-<?php echo $noticia['imagen2'] ?>">
							</div>
							
							<?php
						}
					?>
				</div>
				<div class="sec sec2">
					<div class="title">
						<?php echo $noticia['titulo'] ?>
					</div>
					<div class="text">
						<?php echo $noticia['descripcion'] ?>
					</div>
				</div>
			</div>

		<?php	
			}
		 ?>
	</div>
</div>

<?php include('../site/footer.php') ?>