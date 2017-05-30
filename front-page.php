<?php get_header('model-3'); ?>
	<!-- Header -->

	<!-- Casal -->
	<div class="container  couple">
	<?php
		$page_id = get_page_by_path( 'Sobre o Casal' )->ID;
		$imgnoiva = get_field('imagem_noiva', $page_id);
		$imgnoivo = get_field('imagem_noivo', $page_id);
		$imgcasal = get_field('imagem_casal', $page_id);

		$page_id = get_page_by_path( 'Banner' )->ID;
		$noiva = get_field('nome_noiva', $page_id);
		$noivo = get_field('nome_noivo', $page_id);
		$img = get_field('background', $page_id);
	?>
		<div class="space-default hidden">
			<div class="column">
				<div class="sm-12-12 ">
					<!-- <h2 class="a-center font-dancing section-title">Os Noivos</h2> -->
					<div class="couple-item">
						<div class="couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/2.jpg')">
							<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/2.jpg" alt="">
						</div>
						<div class="a-center space-title">
							<p class="font-dancing couple-name"><?php echo $noiva; ?> & <?php echo $noivo ?></p>
						</div>
					</div>
				</div>
				<div class="sm-6-12  ">
					<div class="couple-item">
						<h2>Nossa História</h2>
						<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat porro vel ut, obcaecati repellendus dolorem possimus eveniet aperiam sint, distinctio quis provident asperiores velit nisi ratione maiores exercitationem inventore sunt.</p>
						<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit tempora molestias adipisci obcaecati necessitatibus, et, odit amet aliquid magni harum totam repellendus dolore quia, autem ab, laudantium dicta blanditiis perferendis!</p>
					</div>
				</div>
				<div class="sm-6-12  ">
					<div class="couple-item">
						<h2>O pedido</h2>
						<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat deserunt accusantium ea, commodi, ut maiores dolores sint excepturi pariatur vel numquam voluptates veniam? Ipsam eius dolor magnam, maxime neque nesciunt?</p>
						<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero distinctio, a ab modi similique ullam, animi quam cumque fugiat consectetur ut odit totam, recusandae expedita corrupti! Nam animi, distinctio sint.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="hidde space-default">
			<div class="column ">
				<div class="sm-6-12 ">
					<div class="couple-item">
						<div class="couple-img circle-img" style="background-image: url('<?php echo $imgnoiva?>')">
							<img class="hidden" src="<?php echo $imgnoiva?>" alt="">
						</div>
						<p class="font-montserrrat font-dancing couple-name a-center space-title"><?php echo $noiva; ?></p>
						<p class="font-montserrrat a-center max-width">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat porro vel ut, obcaecati repellendus dolorem possimus eveniet aperiam sint, distinctio quis provident asperiores velit nisi ratione maiores exercitationem inventore sunt.</p>
					</div>
				</div>
				<div class="sm-6-12 ">
					<div class="couple-item">
						<div class="couple-img circle-img" style="background-image: url('<?php echo $imgnoivo?>')">
							<img class="hidden" src="<?php echo $imgnoivo?>" alt="">
						</div>
						<p class="font-montserrrat font-dancing couple-name a-center space-title"><?php echo $noivo ?></p>
						<p class="font-montserrrat a-center max-width">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat porro vel ut, obcaecati repellendus dolorem possimus eveniet aperiam sint, distinctio quis provident asperiores velit nisi ratione maiores exercitationem inventore sunt.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="hidden couple-item space-default single-col">
			<div class="couple-img circle-img" style="background-image: url('<?php echo $imgcasal?>')">
				<img class="hidden" src="<?php echo $imgcasal?>" alt="">
			</div>
			<div class="">
				<p class="font-dancing couple-name a-center space-title"><?php echo $noiva; ?> & <?php echo $noivo ?></p>
				<div class=" ">
					<p class="font-montserrrat a-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat porro vel ut, obcaecati repellendus dolorem possimus eveniet aperiam sint, distinctio quis provident asperiores velit nisi ratione maiores exercitationem inventore sunt.</p>
					<p class="font-montserrrat a-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione deserunt aliquid exercitationem, ab dolores quo at modi quis. Nesciunt nisi dolores et ad doloremque molestiae, provident necessitatibus minus tempora dolore.</p>
				</div>
			</div>
		</div>
		<div class="hidden couple space-default under-other single-col">
			<div class="couple-item img-holder ">
				<div class="   couple-img circle-img" style="background-image: url('<?php echo $imgnoiva?>')">
					<img class="hidden" src="<?php echo $imgnoiva?>" alt="">
				</div>
				<div class="   couple-img circle-img" style="background-image: url('<?php echo $imgnoivo?>')">
					<img class="hidden" src="<?php echo $imgnoivo?>" alt="">
				</div>
			</div>
			<div class="a-center   space-title">
				<p class="font-dancing couple-name"><?php echo $noiva; ?> & <?php echo $noivo ?></p>
			</div>
			<div class="couple-item a-center  ">
				<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat deserunt accusantium ea, commodi, ut maiores dolores sint excepturi pariatur vel numquam voluptates veniam? Ipsam eius dolor magnam, maxime neque nesciunt?</p>
				<p class="font-montserrrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero distinctio, a ab modi similique ullam, animi quam cumque fugiat consectetur ut odit totam, recusandae expedita corrupti! Nam animi, distinctio sint.</p>
			</div>
		</div>
	</div>

	<!-- Local -->
	<section class="space-default local with-img ">
		<div class="container max-width-content ">
			<div class="column">
				<div class="sm-6-12">
					<div class="local-item a-center">
						<div class="local-img bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/local/wedding.jpg')">
							<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/local/party.jpg">
						</div>
						<div class="local-content">
							<h2 >Cerimônia</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<p class="local-featured open-sans">Sábado, 6 de janeiro de 2018</p>
							<p class="local-featured open-sans">Av Alberto Byington, #178</p>
						</div>
					</div>
				</div>
				<div class="sm-6-12">
					<div class="local-item a-center">
						<div class="local-img bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/local/party.jpg')">
							<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/local/party.jpg">
						</div>
						<div class="local-content">
							<h2 >Festa</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<p class="local-featured open-sans">Sábado, 6 de janeiro de 2018</p>
							<p class="local-featured open-sans">Av Alberto Byington, #178</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="hidden space-default local with-title">
		<div class="container  max-widt-content">
			<!-- <h2 class="font-dacing a-center mg-bottom">O Casamento</h2> -->
			<div class="column">
				<div class="sm-6-12 border-right">
					<div class="local-item a-center">
						<h2 >Cerimônia</h2>
						<p>6 de janeiro de 2018, ás 20h</p>
						<p>Av Alberto Byington, #178</p>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7312.976294812386!2d-46.66058329394004!3d-23.58682003096726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59f1069d11d1%3A0xcb936109af9ce541!2sParque+Ibirapuera!5e0!3m2!1spt-BR!2sbr!4v1494531597526" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="sm-6-12">
					<div class="local-item a-center">
						<h2 >Festa</h2>
						<p class="local-featured open-sans">6 de janeiro de 2018, ás 23h</p>
						<p class="local-featured open-sans">Av Alberto Byington, #178</p>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.145903743023!2d-46.656441185020775!3d-23.563202767545324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.+Paulista%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1494531673158"  height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	<section class="hidden space-defult local">
		<div class="containe  max-width-content ">
			<!-- <h2 class="a-center section-title">Eventos</h2> -->
			<div class="column">
				<div class="sm-6-12">
					<div class="local-item a-center bordered">
						<h2 class="font-dancin">Cerimônia</h2>

						<svg class="mg-20-bottom" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" width="50">
							<path style="fill:#E5BC53;" d="M354.079,487.362c-87.078,0-157.921-70.843-157.921-157.921S267,171.521,354.079,171.521
							S512,242.363,512,329.441S441.158,487.362,354.079,487.362z M354.079,204.912c-68.665,0-124.53,55.864-124.53,124.528
							c0,68.666,55.864,124.53,124.53,124.53s124.53-55.864,124.53-124.53C478.609,260.776,422.745,204.912,354.079,204.912z"/>
							<path style="fill:#F6C958;" d="M157.921,487.362C70.842,487.362,0,416.519,0,329.441s70.842-157.92,157.921-157.92
							s157.921,70.842,157.921,157.92S244.999,487.362,157.921,487.362z M157.921,204.912c-68.666,0-124.53,55.864-124.53,124.528
							c0,68.666,55.864,124.53,124.53,124.53s124.53-55.864,124.53-124.53C282.45,260.776,226.586,204.912,157.921,204.912z"/>
							<path style="fill:#D02D7F;" d="M286.737,24.638c-13.195,0-24.691,7.728-30.737,19.162c-6.046-11.434-17.54-19.162-30.737-19.162
							c-23.159,0-38.504,16.823-38.504,37.574c0,20.75,11.698,33.309,38.504,52.246C248.686,131.009,256,142.621,256,142.621
							s7.315-11.612,30.737-28.161c26.804-18.938,38.502-31.496,38.502-52.246C325.239,41.461,309.896,24.638,286.737,24.638z"/>
							<path style="fill:#C42C78;" d="M286.737,24.638c-13.195,0-24.691,7.728-30.737,19.162c0,19.899,0,98.82,0,98.82
							s7.315-11.612,30.737-28.161c26.804-18.938,38.502-31.496,38.502-52.246C325.239,41.461,309.896,24.638,286.737,24.638z"/>
							</svg>
						<div class="local-details">
							<p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> 06/01/2018, 20h00</p>
							<p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Av Paulista, #188, São Paulo/SP</p>
							<!-- <a href="#" class="btn btn-theme mg-20-top">Ver local</a> -->
						</div>
					</div>
				</div>
				<div class="sm-6-12">
					<div class="local-item a-center bordered">
						<h2 class="font-dancin">Festa</h2>
							<svg class="mg-20-bottom" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" width="50">
								<rect x="186.268" y="8.348" style="fill:#F5F6F6;" width="139.453" height="122.669"/>
								<rect x="256" y="8.348" style="fill:#E5E5E5;" width="69.732" height="122.669"/>
								<path style="fill:#FC9FD8;" d="M290.862,86.598c-13.874,0-21.682-5.334-26.85-8.863c-3.601-2.46-4.458-3.045-8.016-3.045
									c-3.556,0-4.412,0.584-8.012,3.044c-5.168,3.529-12.976,8.864-26.85,8.864s-21.682-5.334-26.85-8.864
									c-3.6-2.46-4.456-3.044-8.012-3.044V41.298c13.874,0,21.681,5.334,26.848,8.863c3.601,2.46,4.457,3.044,8.014,3.044
									s4.413-0.584,8.014-3.044c5.167-3.529,12.974-8.863,26.848-8.863c13.875,0,21.683,5.334,26.851,8.863
									c3.601,2.46,4.457,3.044,8.015,3.044s4.415-0.584,8.016-3.045c5.168-3.529,12.976-8.863,26.85-8.863v33.391
									c-3.558,0-4.414,0.584-8.015,3.044C312.546,81.263,304.737,86.598,290.862,86.598z"/>
								<path style="fill:#EC96CB;" d="M290.862,86.598c-13.874,0-21.682-5.334-26.85-8.863c-3.601-2.46-4.458-3.045-8.016-3.045
									c0-10.742,0-24.842,0-33.391c13.875,0,21.683,5.334,26.851,8.863c3.601,2.46,4.457,3.044,8.015,3.044s4.415-0.584,8.016-3.045
									c5.168-3.529,12.976-8.863,26.85-8.863v33.391c-3.558,0-4.414,0.584-8.015,3.044C312.546,81.263,304.737,86.598,290.862,86.598z"/>
								<rect x="119.808" y="119.552" style="fill:#E5E5E5;" width="272.373" height="152.732"/>
								<rect x="256.178" y="119.552" style="fill:#CECFD0;" width="136.014" height="152.732"/>
								<path style="fill:#EC96CB;" d="M358.137,208.623c-13.772,0-21.49-5.397-26.595-8.969c-3.479-2.433-4.203-2.94-7.457-2.94
									c-3.252,0-3.976,0.506-7.454,2.94c-5.106,3.572-12.822,8.969-26.594,8.969s-21.487-5.397-26.594-8.969
									c-3.478-2.433-4.202-2.94-7.455-2.94c-3.251,0-3.975,0.506-7.453,2.94c-5.106,3.572-12.822,8.969-26.594,8.969
									c-13.771,0-21.487-5.397-26.593-8.969c-3.478-2.433-4.202-2.94-7.454-2.94c-3.25,0-3.972,0.506-7.45,2.938
									c-5.106,3.572-12.821,8.97-26.593,8.97c-13.771,0-21.486-5.398-26.592-8.97c-3.477-2.433-4.2-2.938-7.45-2.938v-33.391
									c13.771,0,21.486,5.398,26.592,8.97c3.477,2.433,4.2,2.938,7.45,2.938c3.251,0,3.974-0.506,7.451-2.938
									c5.106-3.572,12.821-8.97,26.592-8.97c13.772,0,21.488,5.397,26.594,8.969c3.478,2.433,4.202,2.94,7.453,2.94
									c3.252,0,3.976-0.506,7.454-2.94c5.106-3.572,12.822-8.969,26.593-8.969c13.772,0,21.488,5.397,26.595,8.969
									c3.478,2.433,4.202,2.94,7.454,2.94c3.252,0,3.976-0.506,7.454-2.94c5.106-3.572,12.822-8.969,26.594-8.969
									s21.49,5.397,26.595,8.969c3.479,2.433,4.203,2.94,7.457,2.94c3.255,0,3.978-0.506,7.457-2.94
									c5.106-3.572,12.823-8.969,26.595-8.969v33.391c-3.255,0-3.978,0.506-7.457,2.94C379.626,203.226,371.909,208.623,358.137,208.623z"
									/>
								<path style="fill:#DD8CBF;" d="M255.988,196.715c3.253,0,3.977,0.506,7.455,2.94c5.107,3.571,12.822,8.969,26.594,8.969
									s21.488-5.397,26.594-8.969c3.478-2.433,4.202-2.94,7.454-2.94c3.255,0,3.978,0.506,7.457,2.94
									c5.106,3.572,12.823,8.969,26.595,8.969c13.772,0,21.49-5.397,26.595-8.969c3.479-2.433,4.203-2.94,7.457-2.94v-33.391
									c-13.772,0-21.49,5.397-26.595,8.969c-3.479,2.433-4.203,2.94-7.457,2.94c-3.255,0-3.978-0.506-7.457-2.94
									c-5.106-3.572-12.823-8.969-26.595-8.969s-21.488,5.397-26.594,8.969c-3.478,2.433-4.202,2.94-7.454,2.94
									c-3.252,0-3.976-0.506-7.454-2.94c-5.107-3.572-12.823-8.969-26.595-8.969L255.988,196.715L255.988,196.715z"/>
								<rect x="239.304" y="399.482" style="fill:#B8B9BD;" width="33.391" height="87.474"/>
								<rect x="53.35" y="252.394" style="fill:#F5F6F6;" width="405.293" height="147.089"/>
								<rect x="256.178" y="252.394" style="fill:#E5E5E5;" width="202.474" height="147.089"/>
								<path style="fill:#FC9FD8;" d="M458.648,348.591c-13.738,0-21.423-5.419-26.507-9.006c-3.408-2.403-4.116-2.903-7.264-2.903
									c-3.148,0-3.858,0.5-7.264,2.903c-5.084,3.586-12.771,9.006-26.508,9.006s-21.423-5.419-26.508-9.006
									c-3.408-2.403-4.116-2.903-7.265-2.903c-3.147,0-3.856,0.5-7.26,2.902c-5.084,3.586-12.77,9.006-26.506,9.006
									c-13.738,0-21.423-5.419-26.508-9.006c-3.406-2.402-4.115-2.902-7.261-2.902c-3.148,0-3.857,0.5-7.264,2.903
									c-5.084,3.586-12.77,9.006-26.507,9.006c-13.737,0-21.424-5.419-26.508-9.005c-3.409-2.403-4.117-2.903-7.267-2.903
									s-3.859,0.5-7.267,2.903c-5.084,3.586-12.771,9.005-26.508,9.005c-13.739,0-21.424-5.419-26.509-9.005
									c-3.409-2.403-4.118-2.903-7.268-2.903c-3.15,0-3.859,0.5-7.267,2.903c-5.084,3.586-12.771,9.005-26.508,9.005
									c-13.739,0-21.425-5.419-26.512-9.005c-3.409-2.404-4.118-2.904-7.269-2.904c-3.152,0-3.862,0.5-7.27,2.904
									c-5.085,3.586-12.772,9.005-26.51,9.005v-33.391c3.151,0,3.861-0.5,7.269-2.904c5.087-3.586,12.773-9.005,26.512-9.005
									s21.425,5.418,26.51,9.005c3.409,2.404,4.118,2.904,7.27,2.904c3.15,0,3.859-0.5,7.266-2.903c5.085-3.586,12.772-9.005,26.509-9.005
									c13.737,0,21.424,5.419,26.509,9.005c3.409,2.403,4.118,2.903,7.268,2.903c3.15,0,3.859-0.5,7.267-2.903
									c5.084-3.586,12.771-9.005,26.508-9.005c13.737,0,21.424,5.419,26.509,9.005c3.408,2.403,4.116,2.903,7.266,2.903
									c3.148,0,3.857-0.5,7.264-2.903c5.084-3.586,12.77-9.006,26.507-9.006c13.737,0,21.422,5.419,26.506,9.006
									c3.408,2.403,4.116,2.903,7.264,2.903c3.147,0,3.856-0.5,7.26-2.902c5.084-3.586,12.77-9.006,26.506-9.006
									c13.738,0,21.423,5.419,26.508,9.006c3.408,2.403,4.116,2.903,7.265,2.903s3.858-0.5,7.265-2.903
									c5.084-3.586,12.77-9.006,26.507-9.006s21.423,5.419,26.507,9.006c3.408,2.403,4.116,2.903,7.264,2.903L458.648,348.591
									L458.648,348.591z"/>
								<path style="fill:#EC96CB;" d="M458.648,348.591c-13.738,0-21.423-5.419-26.507-9.006c-3.408-2.403-4.116-2.903-7.264-2.903
									c-3.148,0-3.858,0.5-7.264,2.903c-5.084,3.586-12.771,9.006-26.508,9.006s-21.423-5.419-26.508-9.006
									c-3.408-2.403-4.116-2.903-7.265-2.903c-3.147,0-3.856,0.5-7.26,2.902c-5.084,3.586-12.77,9.006-26.506,9.006
									c-13.738,0-21.423-5.419-26.508-9.006c-3.406-2.402-4.115-2.902-7.261-2.902c-3.148,0-3.857,0.5-7.264,2.903
									c-5.084,3.586-12.77,9.006-26.507,9.006c0-18.205,0-28.44,0-33.391c3.148,0,3.857-0.5,7.264-2.903
									c5.084-3.586,12.77-9.006,26.507-9.006s21.422,5.419,26.506,9.006c3.408,2.403,4.116,2.903,7.264,2.903
									c3.147,0,3.856-0.5,7.26-2.902c5.084-3.586,12.77-9.006,26.506-9.006c13.738,0,21.423,5.419,26.508,9.006
									c3.408,2.403,4.116,2.903,7.265,2.903s3.858-0.5,7.265-2.903c5.084-3.586,12.77-9.006,26.507-9.006s21.423,5.419,26.507,9.006
									c3.408,2.403,4.116,2.903,7.264,2.903V348.591z"/>
								<rect y="382.787" style="fill:#C3C3C9;" width="512" height="33.391"/>
								<rect x="162.159" y="470.261" style="fill:#7A7A7C;" width="187.67" height="33.391"/>
							</svg>
						<div class="local-details">
							<p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> 06/01/2018, 23h00</p>
							<p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Av Paulista, #188, São Paulo/SP</p>
							<!-- <a href="#" class="btn btn-theme mg-20-top">Ver local</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contagem Regressiva -->
	<section class="space-default timer overlay ">
		<div class="cntainer max_width ">
			<h2 class="a-center section-title font-montserrrat">Contagem regressiva para o grande dia...</h2>
			<div class="column">
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-days">
						00
						</div>
						<div class="time">Dias</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-hours">
						00
						</div>
						<div class="time">Horas</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-minutes">
						00
						</div>
						<div class="time">Minutos</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-seconds">
						00
						</div>
						<div class="time">Segundos</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="hidden space-default timer overlay simple ">
		<div class="cntainer max_width ">
			<h2 class="a-center sans-serif section-title">Escolhemos o dia e estamos contando os segundos...</h2>
			<div class="column">
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-days">
						00
						</div>
						<div class="time">Dias</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-hours">
						00
						</div>
						<div class="time">Horas</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-minutes">
						00
						</div>
						<div class="time">Minutos</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-seconds">
						00
						</div>
						<div class="time">Segundos</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="hidden space-default timer simple triangle ">
		<div class="cntainer max_width ">
			<h2 class="a-center sans-serif section-title no-mg">25 de Outubro de 2018, São Paulo/SP</h2>
			<i class="fa a-center icon pulse fa-heart" aria-hidden="true"></i>
			<div class="column">
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-days">
						00
						</div>
						<div class="time">Dias</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-hours">
						00
						</div>
						<div class="time">Horas</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-minutes">
						00
						</div>
						<div class="time">Minutos</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-seconds">
						00
						</div>
						<div class="time">Segundos</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="hidden space-default timer simple triangle overlay circle ">
		<div class="cntainer max_width ">
			<h2 class="a-center sans-serif section-title">Venha celebrar nosso amor com a gente em...</h2>
			<div class="column">
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-days">
						00
						</div>
						<div class="time">Dias</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-hours">
						00
						</div>
						<div class="time">Horas</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-minutes">
						00
						</div>
						<div class="time">Minutos</div>
					</div>
				</div>
				<div class="xs-6-12 sm-3-12">
					<div class="timer-box a-center">
						<div class="number number-seconds">
						00
						</div>
						<div class="time">Segundos</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="hidden timer one-color no-bg">
		<div class="containr ">
			<div class="column">
				<div class="md-4-12 first-color"><h2 class="section-title">Faça a contagem regressiva conosco</h2></div>
				<div class="md-8-12 color_theme">
					<div class="column">
						<div class="sm-3-12 a-center">
								<div class="number number-days">
								02
								</div>
								<div class="time">Dias</div>
						</div>
						<div class="sm-3-12 a-center">
								<div class="number number-hours">
								03
								</div>
								<div class="time">Horas</div>
						</div>
						<div class="sm-3-12 a-center">
								<div class="number number-minutes">
								23
								</div>
								<div class="time">Minutos</div>
						</div>
						<div class="sm-3-12 a-center">
								<div class="number number-seconds">
								54
								</div>
								<div class="time">Segundos</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- RSVP -->
	<div class="rsvp rsvp-default mg-bottom space-default ">
		<div class="container ">
			<h2 class="a-center">RSVP</h2>
			<div class="form max-width">
				<div class="input-group">
					<label for="name" class="label">Digite seu nome</label>
					<input type="text" class="input" id="name" name="name">
				</div>
				<div class="input-group">
					<label for="email" class="label">Quantos convidados irá levar?</label>
					<select class="input">
						<option>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
				<div class="a-center">
					<button class="btn btn-theme btn-pink btn-uppercase" type="submit">Confirmar Presença</button>
				</div>
			</div>
		</div>
	</div>
	<div class="rsvp hidden space-default rsvp-pink">
		<div class="container ">
			<h2 class="a-center">RSVP</h2>
			<p class="a-center">Sua presença é muito importante para nós!</p>
			<div class="form max-width">
				<div class="input-group">
					<label for="name" class="label">Digite seu nome</label>
					<input type="text" class="input" id="name" name="name">
				</div>
				<div class="input-group">
					<label for="email" class="label">Quantos convidados irá levar?</label>
					<select class="input">
						<option>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
				<button class="btn btn-theme btn-dark btn-block btn-uppercase" type="submit">Confirmar Presença</button>
			</div>
		</div>
	</div>
	<div class="rsvp hidden space-default rsvp-font ">
		<div class="container ">
			<h2 class="a-center font-dancing">Confirmação de presença</h2>
			<div class="form max-width">
				<div class="column">
					<div class="sm-8-12">
						<div class="input-group">
							<label for="name" class="label font-dancing">Digite seu nome</label>
							<input type="text" class="input" id="name" name="name">
						</div>
					</div>
					<div class="sm-4-12">
						<div class="input-group">
							<label for="email" class="label font-dancing"># Convidados</label>
							<select class="input">
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>
				</div>
				<div class="a-rigt">
				<button class="btn btn-theme btn-dark btn-uppercase" type="submit">Confirmar Presença</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Galeria de Fotos -->
	<div class="container">
		<h2 class="font-rochester part-title a-center">Nossas Fotos</h2>
		<div class="components-item gallery column less-centered">
			<?php
				$args = array(
					'posts_per_page' => -1,
					'post_type' => 'albunsdefotos'
				);
				
				$query = new WP_Query($args);
				while($query->have_posts()) { $query->the_post();
					$fotos[] = get_field('galeria_de_fotos');
				}
				wp_reset_postdata();
				$merged = array_merge(... $fotos);
				foreach (array_slice($merged, 0, 6) as $foto) { ?>
					<div class="sm-6-12 md-4-12">
						<a data-fancybox="gallery" href="<?php echo $foto['url']; ?>">
							<div class="gallery-item" style="background-image: url('<?php echo $foto['url'] ?>')">
								<i class="fa fa-expand" aria-hidden="true"></i>
								<img src="<?php echo $foto['url'] ?>" alt="<?php echo $foto['caption'] ?>">
							</div>
						</a>
					</div>
				<?php } 
			?>
		</div>

		<div class="hidden components-item gallery  gallery-tall less-centered">
			<?php
				$args = array(
					'posts_per_page' => -1,
					'post_type' => 'albunsdefotos'
				);
				
				$query = new WP_Query($args);
				while($query->have_posts()) { $query->the_post();
					$fotos[] = get_field('galeria_de_fotos');
				}
				wp_reset_postdata();
				$merged = array_merge(... $fotos);
				foreach (array_slice($merged, 0, 4) as $foto) { ?>
					<div class="sm-25">
						<div class="gallery-item" style="background-image: url('<?php echo $foto['url'] ?>')">
							<img src="<?php echo $foto['url'] ?>" alt="<?php echo $foto['caption'] ?>">
						</div>
					</div>
				<?php } 
			?>
		</div>

		<div class="hidden gallery  gallery-featured">
			<?php
				$args = array(
					'posts_per_page' => -1,
					'post_type' => 'albunsdefotos'
				);
				
				$query = new WP_Query($args);
				while($query->have_posts()) { $query->the_post();
					$fotos[] = get_field('galeria_de_fotos');
				}
				wp_reset_postdata();
				$merged = array_merge(... $fotos);
				foreach (array_slice($merged, 0, 5) as $foto) { ?>
					<div class="gallery-item" style="background-image: url('<?php echo $foto['url'] ?>')">
						<img src="<?php echo $foto['url'] ?>" alt="<?php echo $foto['caption'] ?>">
					</div>
				<?php } 
			?>
		</div>

		<div class="hidden gallery  gallery-five less-centered">	
			<?php
				$args = array(
					'posts_per_page' => -1,
					'post_type' => 'albunsdefotos'
				);
				
				$query = new WP_Query($args);
				while($query->have_posts()) { $query->the_post();
					$fotos[] = get_field('galeria_de_fotos');
				}
				wp_reset_postdata();
				$merged = array_merge(... $fotos);
				foreach (array_slice($merged, 0, 5) as $foto) { ?>
					<div class="gallery-item" style="background-image: url('<?php echo $foto['url'] ?>')">
						<img src="<?php echo $foto['url'] ?>" alt="">
					</div>
				<?php } 
			?>
				
		</div>
		<a href="<?php echo home_url('/nossas-fotos') ?>" class="mg-bottom btn btn-theme btn-small float-right">Ver todas as fotos</a>
		<div class="clearfix"></div>
	</div>


	<!-- Recados -->
	<section class="space-defaul notes">
		<div class="container">
			<h2 class="font-rochester part-title a-center">Mural de recados</h2>
			<div class="notes-group ">
				<div class="column">
					<?php
						$args = array(
							'posts_per_page' => 4,
							'post_type' => 'recados'
						);
						
						$query = new WP_Query($args);
						while($query->have_posts()) { $query->the_post(); ?>
							<div class="sm-6-12">
								<div class="notes-item">
									<p class="notes-p first-letter"><?php echo get_the_content(); ?></p>
									<p class="notes-author"><?php the_field('nome')?> </p>
									<p class="notes-connect">-<?php the_field('aproximidade')?></p>
								</div>
							</div>
						<?php }
						wp_reset_postdata();
					?>
				</div>
			</div>
			<a href="<?php echo home_url('/recados') ?>" class="btn btn-theme btn-small float-right">Ver todos recados</a>
			<div class="clearfix"></div>
		</div>
	</section>

	<section class="hidden space-default notes overlay box ">
		<div class="container ">
			<h2>Mural de Recados</h2>
			<div class="notes-group column">
					<?php
						$args = array(
							'posts_per_page' => 4,
							'post_type' => 'recados'
						);
						
						$query = new WP_Query($args);
						while($query->have_posts()) { $query->the_post(); ?>
							<div class="sm-6-12">
								<div class="notes-item">
									<p class="notes-p"><?php echo get_the_content(); ?></p>
									<p class="notes-author"><?php the_field('nome')?> </p>
									<p class="notes-connect">-<?php the_field('aproximidade')?></p>
								</div>
							</div>
						<?php }
						wp_reset_postdata();
					?>
			</div>
		</div>
	</section>

	<section class="hidden notes bordered-bottom">
		<div class="container ">
			<h2>Mural de Recados</h2>
			<div class="notes-group column ">
					<?php
						$args = array(
							'posts_per_page' => 4,
							'post_type' => 'recados'
						);
						
						$query = new WP_Query($args);
						while($query->have_posts()) { $query->the_post(); ?>
							<div class="sm-6-12">
								<div class="notes-item">
									<p class="notes-p"><?php echo get_the_content(); ?></p>
									<p class="notes-author"><?php the_field('nome')?>, <span><?php the_field('aproximidade')?></span></p>
								</div>
							</div>
						<?php }
						wp_reset_postdata();
					?>
			</div>
		</div>
	</section>
	

	<!-- Blog -->
	<div class="container">
		<div class="space-default">
			<h2 class="font-rochester part-title a-center">Blog</h2>
			<div class="blog blog-default column ">
				<?php
					$args = array(
						'posts_per_page' => 3,
						'post_type' => 'post'
					);
					
					$query = new WP_Query($args);
					while($query->have_posts()) { $query->the_post(); ?>
					<div class="sm-4-12">
						<div class="blog_item">
							<a href="<?php the_permalink(); ?>">
								<div class="blog_img bg-img" style="background-image: url('<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : 'https://blog.stylingandroid.com/wp-content/themes/lontano-pro/images/no-image-slide.png' ?>')">
									<figure>
										<img class="hidden" src="<?php the_post_thumbnail_url(); ?>" alt="Imagem <?php echo get_the_title(); ?>">
									</figure>
								</div>
							</a>
							<div class="blog_content">
								<a href="<?php the_permalink(); ?>"><h2 class="blog_content-title"><?php the_title(); ?></h2></a>

								<p class="blog_content-p">
									<?php echo get_the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="a-left">Continuar lendo...</a>
								</p>
							</div>
						</div>
					</div>
					<?php }
				?>
			</div>
		</div>
	</div>

	<div class="hidden container space-default">
		<div class="blog bg-overlay  column">
			<div class="sm-4-12">
				<div class="blog_item overlay bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Blog/bride.jpg')">
					<figure>
						<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/Blog/bride.jpg" alt="">
					</figure>
					<div>
						<h2>Saiba como foi meu dia de noiva</h2>
						<div class="shared-list">
							<ul>
								<li>
									<a class="facebook" href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="twitter" href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="whatsapp" href="#">
										<i class="fa fa-whatsapp" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="sm-4-12 ">
				<div class="blog_item overlay bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Blog/hotel.jpg')">
					<figure>
						<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/Blog/hotel.jpg" alt="">
					</figure>
					<div>
						<h2>Onde se hospedar próximo a cerimônia?</h2>
						<div class="shared-list">
							<ul>
								<li>
									<a class="facebook" href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="twitter" href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="whatsapp" href="#">
										<i class="fa fa-whatsapp" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="sm-4-12 ">
				<div class="blog_item overlay bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Blog/music.jpg')">
					<figure>
						<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/Blog/music.jpg" alt="">
					</figure>
					<div>
						<h2>Como será a playlist?</h2>
						<div class="shared-list">
							<ul>
								<li>
									<a class="facebook" href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="twitter" href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="whatsapp" href="#">
										<i class="fa fa-whatsapp" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="hidden container space-default">
		<div class="card column ">
			<div class="sm-4-12 md-6-12">
				<div class="card_item">
					<div class="card_img">
						<figure>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/noiva.jpeg" alt=""></a>
						</figure>
					</div>
					<div class="card_content">
						<a href="#"><h2 class="card_content-title">Saiba como foi o meu dia de noiva</h2></a>
						<div class="shared-list">

							<ul>
								<li>
									<p>Compartilhar</p>	
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="twitter" href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="whatsapp" href="#">
										<i class="fa fa-whatsapp" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
						<p class="card_content-p">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
						</p>
					</div>
				</div>
			</div>

			<div class="sm-4-12 md-3-12">
				<div class="card_item">
					<div class="card_img">
						<figure>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/festa.jpg" alt=""></a>
						</figure>
					</div>
					<div class="card_content">
						<a href="#"><h2 class="card_content-title">Conheça um pouco sobre a decoração</h2></a>
						<div class="shared-list">
							<ul>
								<li>
									<a class="facebook" href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="twitter" href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="whatsapp" href="#">
										<i class="fa fa-whatsapp" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
						<p class="card_content-p">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
						</p>
					</div>
				</div>
			</div>

			<div class="sm-4-12 md-3-12">
				<div class="card_item">
					<div class="card_img">
						<figure>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/madrinhas.jpg" alt=""></a>
						</figure>
					</div>
					<div class="card_content">
						<a href="#"><h2 class="card_content-title">Saiba quem serão as madrinhas</h2></a>
						<div class="shared-list">
							<ul>
								<li>
									<a class="facebook" href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="twitter" href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a class="whatsapp" href="#">
										<i class="fa fa-whatsapp" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
						<p class="card_content-p">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


		<?php
			// $args = array(
			// 	'posts_per_page' => -1,
			// 	'post_type' => 'slug'
			// )
			
			// $query = new WP_Query($args);
			// while($query->have_posts()) { $query->the_post();
			// 	get_template_part('parts/part', 'team');
			// }
		?>
 
<?php get_footer(); ?>