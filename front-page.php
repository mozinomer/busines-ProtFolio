<?php get_header(); ?>




	<div class="section1homepage" style="background: url('<?php the_field('bannerbg'); ?>');">
		<div class="container">
			<div class="sliderHome">
				<?php
					if( have_rows('sliderbanner') ):
					    while( have_rows('sliderbanner') ) : the_row(); ?>
								<div class="slidesContent">
									<h6>
										<?php the_sub_field('smallheading'); ?>
									</h6>
									<h4>
										<?php the_sub_field('heading'); ?>
									</h4>
									<p>
										<?php the_sub_field('contentslilder'); ?>
									</p>
									<a href="<?php the_sub_field('linkslider'); ?>">
										<?php the_sub_field('linktetx'); ?>
									</a>
								</div>
					    <?php endwhile;
					endif; 
				?>
			</div>
		</div>

		<div class="socials displayFlex">
			<div class="container">
				<span>
					Follow us on: 
				</span>
				<ul class="displayFlex alignCenter">
					<li>
						<a href="#">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-linkden"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-dribble"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="section2homepage">
		<div class="container">
			<h2>
				<?php the_field('heading2'); ?>
			</h2>
			<p>
				<?php the_field('content2'); ?>
			</p>
			<a href="<?php the_field('url2'); ?>">
				<?php the_field('button2'); ?>
			</a>
			<div class="row">
				<img id="image1cons" src="<?php the_field('imag21'); ?>">
				<img id="image2cons" src="<?php the_field('imag22'); ?>">
				<img id="image3cons" src="<?php the_field('imag23'); ?>">
			</div>
		</div>
	</div>
	<div class="serviceshomepage">
		<div class="container">
			<h2>
				Our Services
				<a href="#">
					read more
				</a>
			</h2>
			<div class="servicescontainer">
				<div class="slidersrvices">
					<div class="silideservice">
						<a href="#">
							<img src="https://www.tivix.com/wp-content/uploads/2019/06/frontend-development.svg">
							<div href="#">
								<h5>
									Front End Web Development
								</h5>
								<p>
									Our frontend development expertise enables our clients to differentiate themselves with software products that are a delight to use.
								</p>
								<span id="readmore">
									read More
								</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section4homepage">
		<div class="container">
			<div class="row" id="row1section4">
				<div class="col-md-6">
					<h2>
						We work with leading organizations <span>around the world</span>
					</h2>
					<p>
						Our clients are a mix of new ventures, Fortune 500 brands, and <br>	NGOs across a variety of sectors.
					</p>
				</div>
				<div class="col-md-6"> 
					<svg class="" viewBox="0 0 501 283" xmlns="http://www.w3.org/2000/svg">
						  <g fill="none" fill-rule="evenodd">
						    <g transform="translate(223 33)">
						      <rect fill="#342F49" width="186" height="161" rx="4.32"></rect>
						      <path d="M4.32 0h177.36A4.32 4.32 0 0 1 186 4.32V13H0V4.32A4.32 4.32 0 0 1 4.32 0z" fill="#433D5A"></path>
						      <g transform="translate(5 5)">
						        <circle fill="#FF5518" cx="2.16" cy="2.16" r="2.16"></circle>
						        <circle fill="#FF981F" cx="8.64" cy="2.16" r="2.16"></circle>
						        <circle fill="#009B97" cx="15.12" cy="2.16" r="2.16"></circle>
						      </g>
						      <g id="ill-10">
						        <rect fill="#433D5A" width="37.8" height="81.722" rx="4.32"></rect>
						        <g transform="translate(9.72 11.72)" fill="#4C4663">
						          <rect width="18.36" height="10.337" rx="2.16"></rect>
						          <rect y="13.518" width="18.36" height="9.94" rx="2.16"></rect>
						          <rect y="26.639" width="18.36" height="9.94" rx="2.16"></rect>
						          <rect y="52.88" width="18.36" height="9.94" rx="2.16"></rect>
						          <rect y="39.759" width="18.36" height="9.94" rx="2.16"></rect>
						        </g>
						      </g>
						      <g id="ill-9">
						        <rect fill="#433D5A" width="37.8" height="42.233" rx="4.32"></rect>
						        <g transform="translate(5.4 3.884)" fill="#4C4663">
						          <circle cx="13.5" cy="9.493" r="8.64"></circle>
						          <rect y="23.44" width="27" height="3.24" rx="1.62"></rect>
						          <rect x="4.32" y="28.84" width="18.36" height="3.24" rx="1.62"></rect>
						        </g>
						      </g>
						      <g id="ill-3">
						        <rect fill="#433D5A" width="126.6" height="21.187" rx="2.16"></rect>
						        <g transform="translate(4.86 6.37)" fill="#4C4663">
						          <rect width="95.443" height="3.185" rx="1.592"></rect>
						          <rect y="5.308" width="64.064" height="3.185" rx="1.592"></rect>
						        </g>
						        <circle cx="3.78" cy="3.78" r="3.78" transform="translate(109.315 6.8)" fill="#4C4663"></circle>
						      </g>
						      <g id="ill-4">
						        <rect fill="#433D5A" width="126.6" height="17.347" rx="2.16"></rect>
						        <g transform="translate(4.86 5.286)" fill="#4C4663">
						          <rect width="95.443" height="2.643" rx="1.321"></rect>
						          <rect y="4.405" width="64.064" height="2.643" rx="1.321"></rect>
						        </g>
						        <circle cx="3.78" cy="3.78" r="3.78" transform="translate(109.315 4.993)" fill="#4C4663"></circle>
						      </g>
						      <g id="ill-5">
						        <rect fill="#433D5A" width="126.6" height="17.347" rx="2.16"></rect>
						        <g transform="translate(4.86 5.286)" fill="#4C4663">
						          <rect width="95.443" height="2.643" rx="1.321"></rect>
						          <rect y="4.405" width="64.064" height="2.643" rx="1.321"></rect>
						        </g>
						        <circle cx="3.78" cy="3.78" r="3.78" transform="translate(109.315 4.993)" fill="#4C4663"></circle>
						      </g>
						      <g id="ill-6">
						        <rect fill="#433D5A" width="126.6" height="17.347" rx="2.16"></rect>
						        <g transform="translate(4.86 5.286)" fill="#4C4663">
						          <rect width="95.443" height="2.643" rx="1.321"></rect>
						          <rect y="4.405" width="64.064" height="2.643" rx="1.321"></rect>
						        </g>
						        <circle cx="3.78" cy="3.78" r="3.78" transform="translate(109.315 4.993)" fill="#4C4663"></circle>
						      </g>
						      <g id="ill-7">
						        <rect fill="#433D5A" width="126.6" height="17.347" rx="2.16"></rect>
						        <g transform="translate(4.86 5.286)" fill="#4C4663">
						          <rect width="95.443" height="2.643" rx="1.321"></rect>
						          <rect y="4.405" width="64.064" height="2.643" rx="1.321"></rect>
						        </g>
						        <circle cx="3.78" cy="3.78" r="3.78" transform="translate(109.315 4.993)" fill="#4C4663"></circle>
						      </g>
						      <g id="ill-8">
						        <rect fill="#433D5A" width="126.6" height="17.347" rx="2.16"></rect>
						        <g transform="translate(4.86 5.286)" fill="#4C4663">
						          <rect width="95.443" height="2.643" rx="1.321"></rect>
						          <rect y="4.405" width="64.064" height="2.643" rx="1.321"></rect>
						        </g>
						        <circle cx="3.78" cy="3.78" r="3.78" transform="translate(109.315 4.993)" fill="#4C4663"></circle>
						      </g>
						    </g>
						    <g id="ill-1">
						      <ellipse fill-opacity=".1" fill="#DBCEEA" fill-rule="nonzero" transform="rotate(-6 229.908 114.499)" cx="229.908" cy="114.499" rx="27.524" ry="27.528"></ellipse>
						      <path d="M215.451 118.48c-.152-3.486.64-6.993 3.085-9.705 7.044-7.817 17.169 3.023 16.153 8.953-1.015 5.93-9.555 16.31-13.041 14.788-1.39-.607-3.287-3.262-4.618-6.732l-7.108 12.345-9.302-7.267 14.831-12.382z" fill="#B28B67"></path>
						      <path d="M234.568 110.31c-.97-1.38-2.712-2.952-3.558-3.47a8.45 8.45 0 0 0 3.11-3.004c.73-1.22.972-2.556 1.286-3.909.145-.623.26-1.266.174-1.896a3.522 3.522 0 0 0-.764-1.73 4.473 4.473 0 0 0-1.512-1.184c-.256-.125-.532-.18-.791-.292-.266-.116-.265-.337-.317-.601-.126-.636-.564-1.244-1.007-1.685-.497-.495-1.13-.857-1.794-1.086-.647-.223-1.358-.32-2.05-.194a2.9 2.9 0 0 0-.898.306c-.114.064-.165.115-.287.076-.114-.037-.217-.116-.332-.157-1.11-.39-2.39-.3-3.477.25-.635.32-1.445 1.125-2.195 2.15-.75 1.024-1.884 4.341-1.78 5.955.091 1.44.765 2.87 1.646 3.953-1.346.255-2.612.899-3.769 1.656a17.698 17.698 0 0 0-3.414 2.92c-.963 1.063-1.902 2.249-2.498 3.558-.558 1.225-.69 2.485-.224 3.713.213.563.505 1.088.812 1.6.302.503.61 1.004.989 1.45.719.847 1.73 1.588 2.92 1.423.43-.059.933-.163 1.34-.326.147-.06.24-.1.246-.265.008-.197-.064-.408-.103-.598a4.223 4.223 0 0 1 .542-3.128c.602-.988 1.758-1.966 2.95-1.671 1.47.363 2.233 1.86 2.794 3.139 1.543-1.127 3.407-1.771 5.25-1.4 2.04.41 3.79 1.638 5.79 2.184.52.142 1.066.268 1.616.159.23-.046.514-.117.707-.264.253-.194.255-.52.282-.805.14-1.508-.715-5.447-1.684-6.827z" fill="#2E2845"></path>
						      <path fill="#997659" d="M161.374 148.02l-57.513 41.718-48.927 31.786.514 5.88 108.013-55.535z"></path>
						      <path d="M56.592 217.614c-1.308-.343-2.292-.486-2.951-.428-.881.077-2.154.337-3.819.78L52.24 245.6c2.43.51 3.672-.016 3.726-1.58.053-1.563.111-2.864.174-3.9l4.525-13.168a.675.675 0 0 0-.435-.863l-1.89-.594c-.792-1.374-1.227-2.51-1.305-3.405-.058-.663.107-1.578.495-2.744a1.35 1.35 0 0 0-.938-1.733z" fill="#E4E4E4"></path>
						      <path d="M62.488 213.224l4.412 11.039c14.374-6.263 30.138-13.777 47.291-22.543 17.154-8.765 33.639-18.009 49.455-27.732l-2.802-32.022c-20.117 11.03-38.275 22.448-54.472 34.252-16.198 11.803-30.826 24.138-43.884 37.006z" fill="#2F2945"></path>
						      <path d="M161.165 145.627c-21.63-1.57-49.462-5.814-50.357-6.366-.598-.367-6.927-14.94-18.989-43.717l-5.059 1.722c8.169 34.86 13.737 53.118 16.706 54.774 4.453 2.483 38.906 13.811 59.794 17.539l-2.095-23.952z" fill="#B28B67"></path>
						      <path d="M97.199 105.56l-8.131 2.965c0 26.608 3.085 42.642 9.253 48.1 6.168 5.46 27.868 10.398 65.102 14.815l-2.671-30.536c-30.366-2.205-46.203-3.538-47.51-3.998-1.307-.46-6.654-10.91-16.043-31.346z" fill="#352E4F"></path>
						      <path d="M94.175 96.4c.11-1.347.08-2.34-.09-2.98-.23-.854-.706-2.063-1.431-3.625l-26.796 7.18c-.081 2.482.653 3.613 2.202 3.394 1.55-.219 2.84-.387 3.872-.506l13.753 2.17a.675.675 0 0 0 .775-.578l.257-1.965c1.215-1.018 2.257-1.644 3.126-1.876.643-.173 1.572-.169 2.789.011a1.35 1.35 0 0 0 1.543-1.224z" fill="#E4E4E4"></path>
						      <path d="M200.177 150.688l16.236 10.677c4.304.92 7.923 2.157 10.857 3.712.704.578 1.58 1.779-1.22 1.715-2.801-.065-5.75-.006-6.087.969-.337.975 1.41 2.024.697 3.354-.475.886-3.036-1.134-7.681-6.059l-15.826-5.606 3.024-8.762zm5.587 27.298l7.148 4.692c4.02-.945 6.383-.778 7.092.503.989.747-4.385 1.387-2.998 3.064 1.387 1.676 7.235 4.457 6.964 5.616-.4 1.715-4.097 2.342-6.314 1.943-4.143-.746-6.154-2.118-9.963-6.127-1.992-2.096-4.777-4.026-8.354-5.791l6.425-3.9z" fill="#997659"></path>
						      <path d="M198.018 143.173c2.867 5.259 7.729 11.719 16.485 16.715l-4.99 6.443c-7.888-2.463-15.981-7.52-19.196-13.996-2.533-5.104 2.156-10.893 7.7-9.162z" fill="#494069"></path>
						      <path d="M191.218 155.541c1.34 6.399 8.022 15.1 20.047 26.105-5.012 6.863-9.02 10.935-12.027 12.217-11.799-8.105-19.732-16.349-24.453-24.213-4.388 2.663-9.062 4.41-14.213 4.657-10.573.508-15.156-26.996-20.87-34.025 13.304-13.378 24.826-7.315 35.014-12.722 11.158-5.922 33.1-6.07 33.803-4.749l4.077 13.287c-7.711 4.906-14.503 12.392-21.378 19.443z" fill="#7366A5"></path>
						      
						      <ellipse fill-opacity=".1" fill="#DBCEEA" fill-rule="nonzero" transform="rotate(-6 229.908 114.499)" cx="229.908" cy="114.499" rx="27.524" ry="27.528"></ellipse>
						      <path d="M203.292 117.554l13.296 19.716a3.125 3.125 0 0 1-.843 4.338l-.004.003a3.125 3.125 0 0 1-4.339-.843l-13.296-19.716a3.125 3.125 0 0 1 .844-4.338l.004-.003a3.125 3.125 0 0 1 4.338.843z" fill="#E4E4E4" fill-rule="nonzero"></path>
						    </g>
						    <g id="ill-2">
						      <path d="M19.54 20.73a.133.133 0 0 1-.004.01c.002-.003.005-.017.005-.01" fill="#C5CFD6"></path>
						      <path d="M19.538 20.734v.004c0-.004.005-.014 0-.004" fill="#C5CFD6"></path>
						      <path d="M19.561 20.677c-.004.014-.01.026-.016.04l.008-.019c-.07.176-.026.062.008-.02" fill="#C5CFD6"></path>
						      <path d="M19.546 20.718l-.008.019c-.02.038.008-.02.008-.02M19.539 20.734zM19.535 20.74c-.004.007.019-.032 0 0M19.538 20.734h0" fill="#C5CFD6"></path>
						      <rect fill="#7366A5" x=".143" y=".47" width="37.8" height="24.975" rx="2.7"></rect>
						      <g fill="#000" fill-opacity=".2">
						        <path d="M14.59 7.457L3.597 25.007h21.987z"></path>
						        <path d="M25.925 12.158l-9.719 12.849h19.438z"></path>
						      </g>
						      <circle fill="#DDE3E9" cx="30.172" cy="8.776" r="3.712"></circle>
						    </g>
						    <path d="M432.114 102.626c2.771-2.128 4.95-4.995 5.458-8.619 1.464-10.44-13.36-11.226-17.254-6.627-3.894 4.599-6.361 17.839-2.953 19.533 1.36.676 4.616.42 8.132-.793l-4.895 13.406 11.556 2.456-.044-19.356z" fill="#DDBB9F"></path>
						    <path d="M428.176 82.796c1.576.075 5.713.775 6.47.936.483.102.983.324 1.363-.058.312-.313.356-.945.516-1.351.185-.472.403-.93.622-1.387a15.092 15.092 0 0 1 2.365-3.57c1.807-2.017 4.12-3.405 6.781-3.933 2.939-.583 6.042-.2 8.888.65 3.046.91 5.635 2.527 8.357 4.11 2.594 1.51 5.438 2.49 8.45 2.663 3.034.174 5.593-.944 8.392-1.926 2.866-1.006 5.98-1.4 8.93-.53 2.755.812 5.09 2.515 7.078 4.55 1.86 1.902 3.278 4.018 3.768 6.675.527 2.859-.087 5.743-2.366 7.686-3.303 2.816-8.292 2.665-12.27 1.73a22.278 22.278 0 0 1-6.502-2.676c-2.694-1.64-4.84-3.908-7.265-5.892a21.7 21.7 0 0 0-3.645-2.439c-1.264-.664-2.55-1.119-3.939-.567-1.469.583-2.801 1.18-4.387 1.404-1.522.215-3.08.185-4.582-.147-2.922-.645-5.615-2.169-8.329-3.383-2.213-.99-4.588-2.013-7.054-2.038-1.029-.01-2.557.096-3.131 1.043 5.766 2.36 6.547 10.264 3.701 15.34-1.535 2.74-7.749 5.003-9.553 3.007-1.144-1.264-.05-2.372.66-3.106 1.361-1.405 2.152-3.414.51-4.943-1.415-1.319-3.612.63-3.644.622-.438-.13-3.83-3.125-5.809-6.864-2.652-.401-2.683-2.21-1.758-3.487.925-1.277 5.206-2.221 7.383-2.119z" fill="#352E4F"></path>
						    <path d="M449.095 164.618c-.896 12.096-57.95 47.759-58.284 48.758-.148.444 5.756 14.477 17.712 42.099l-4.986 1.943c-18.35-29.248-27.053-45.431-26.106-48.55 1.355-4.466 16.116-19.165 44.282-44.098l27.382-.152z" fill="#DDBB9F"></path>
						    <path d="M407.182 249.254l-8.144 2.976c-17.144-19.37-23.855-35.36-22.619-43.513.824-5.435 15.542-20.116 44.154-44.041l29.105-.033c-1.025 28.018-53.918 48.852-54.627 50.046-.708 1.195 6.238 12.88 12.131 34.565z" fill="#2F2945"></path>
						    <path d="M410.625 254.823c.866 1.044 1.412 1.877 1.64 2.5.302.833.606 2.099.91 3.798l-26.089 9.495c-1.492-1.99-1.54-3.341-.145-4.051a154 154 0 0 0 3.464-1.808l10.027-9.68a.675.675 0 0 1 .967.03l1.34 1.465c1.58.138 2.794.053 3.64-.255.626-.228 1.386-.765 2.28-1.611a1.35 1.35 0 0 1 1.966.117z" fill="#E4E4E4"></path>
						    <path fill="#DDBB9F" d="M442.556 164.669l25.471 61.046 25.034 51.61h-5.906l-64.62-112.656z"></path>
						    <path d="M493.555 275.327c.457 1.276.685 2.246.685 2.91 0 .886-.148 2.179-.443 3.879h-27.763c-.721-2.381-.305-3.667 1.25-3.857a154 154 0 0 0 3.873-.514l12.733-5.667a.675.675 0 0 1 .898.36l.758 1.834c1.439.67 2.608 1.006 3.508 1.006.666 0 1.564-.245 2.693-.735a1.35 1.35 0 0 1 1.808.784z" fill="#E4E4E4"></path>
						    <path d="M490.8 266.603l-13.124 2.457c-10.147-14.893-52.614-75.962-57.27-104.391h29.217c15.549 20.551 31.505 86.794 41.177 101.934z" fill="#352E4F"></path>
						    <g>
						      <path d="M397.563 155.508l-18.656-5.588c-3.48-2.704-6.762-4.682-9.847-5.931-.898-.169-2.383-.07-.527 2.031 1.856 2.102 3.713 4.397 3.183 5.279-.53.881-2.461.217-3.02 1.614-.373.93 2.826 1.597 9.597 1.998l14.505 8.52 4.765-7.923zm71.832-6.65l-9.768 3.212c12.369 17.496 18.987 26.761 19.856 27.795 1.954 2.327.99 7.15.722 9.66 3.656.39 1.599-4.779 6.233-4.216 4.23.514 8.032 2.699 11.428-1.294.417-.491.596-1.887-1.094-2.384-4.21-1.24-10.515-3.753-11.627-4.893-1.516-1.555-6.766-10.848-15.75-27.88z" fill="#DDBB9F"></path>
						      <path d="M427.582 116.032l-4.312-.203c-8.108 10.043-9.24 31.913-15.023 35.502-5.469 3.392-14.003 1.81-24.198-.488l-2.174 7.042c10.048 8.494 29.945 14.267 37.042 8.7 11.346-8.9 10.94-35.653 8.665-50.553z" fill="#009B97"></path>
						      <path d="M452.506 166.775l-37.38 4.59c-1.708.21-1.689-2.293-1.594-3.565 1.089-14.69 10.315-31.514 7.808-51.927l10.575-3.011c10.677 13.224 15.926 30.475 20.591 53.913z" fill="#DDE3E9"></path>
						      <path d="M454.452 151.798c9.305 12.787 16.923 21.88 22.855 27.28l7.647-2.494c-8.884-30.63-26.332-51.899-52.343-63.808l-1.946.24-2.323.284c-5.635 34.13-5.609 56.406.08 66.83l33.647-4.132c-1.516-7.952-4.264-16.22-7.617-24.2z" fill="#00CAC5"></path>
						    </g>
						  </g>
					</svg>
				</div>
			</div>
			<div class="row" id="row2section4">
				<div class="col-md-8">
					<div class="boxcotainermd8">
						<h6>
							Mobile App
						</h6>
						<div class="neechaycontent">
							<h4>
								<a href="https://www.tivix.com/case-studies/dovemed" title="Read more" target="">
									Reliable medical information for everyone
								</a>
							</h4>
							<a href="https://www.tivix.com/case-studies/dovemed" title="Read more" target="" class="more more--white more--underline">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="boxcontainersmallsection4">
						<h6>
							mobile app
						</h6>
						<h4><a href="https://www.tivix.com/case-studies/best-egg" title="Read more" target="">Building an $8 billion loan platform to bypass retail banks.</a></h4>
						<a href="https://www.tivix.com/case-studies/best-egg" title="Read more" target="" class="more more--white more--underline">Read more</a>
					</div>
					<div class="boxcontainerminisection4">
						<h6>
							mobile app
						</h6>
						<h4><a href="https://www.tivix.com/case-studies/best-egg" title="Read more" target="">Building an $8 billion loan platform to bypass retail banks.</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clientsays">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>
						What our clients say
					</h3>
					<p>
						We help leading brands worldwide drive digital innovation via rapid prototyping, iterative development, design thinking and agile devops. Our approach centers on creating business impact via a proven approach to identifying and delivering on digital opportunities.
					</p>
				</div>
				<div class="col-md-8">
					<div class="slidertestimonials">
						<div class="slidecontentslidertestimonials">
							<div class="boxcontainerslidertestimonials">
								<p>Having worked with Tivix on several projects, I've found their unique combination of hard-core engineering skills and solid business acumen to be a phenomenal asset.</p>
								<div class="nameconteni">
									<h6>
										Jhon boody woogi
										<span>Fucking CEO of nothing</span>
									</h6>
								</div>
							</div>
						</div>
						<div class="slidecontentslidertestimonials">
							<div class="boxcontainerslidertestimonials">
								<p>Having worked with Tivix on several projects, I've found their unique combination of hard-core engineering skills and solid business acumen to be a phenomenal asset.</p>
								<div class="nameconteni">
									<h6>
										Jhon boody woogi
										<span>Fucking CEO of nothing</span>
									</h6>
								</div>
							</div>
						</div>
						<div class="slidecontentslidertestimonials">
							<div class="boxcontainerslidertestimonials">
								<p>Having worked with Tivix on several projects, I've found their unique combination of hard-core engineering skills and solid business acumen to be a phenomenal asset.</p>
								<div class="nameconteni">
									<h6>
										Jhon boody woogi
										<span>Fucking CEO of nothing</span>
									</h6>
								</div>
							</div>
						</div>
						<div class="slidecontentslidertestimonials">
							<div class="boxcontainerslidertestimonials">
								<p>Having worked with Tivix on several projects, I've found their unique combination of hard-core engineering skills and solid business acumen to be a phenomenal asset.</p>
								<div class="nameconteni">
									<h6>
										Jhon boody woogi
										<span>Fucking CEO of nothing</span>
									</h6>
								</div>
							</div>
						</div>
						<div class="slidecontentslidertestimonials">
							<div class="boxcontainerslidertestimonials">
								<p>Having worked with Tivix on several projects, I've found their unique combination of hard-core engineering skills and solid business acumen to be a phenomenal asset.</p>
								<div class="nameconteni">
									<h6>
										Jhon boody woogi
										<span>Fucking CEO of nothing</span>
									</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="calltoaction">
		<div class="container">
			<h2 class="text-center">
				Interested in discussing a project?
			</h2>
			<p>
				Let’s build something great.
			</p>
			<a href="#" id="getintouch">
				Get in touch
			</a>
		</div>
	</div>
	<div class="ourclients">
		<div class="container">
			<h2 class="text-center">
				Our Client’s products
			</h2>
			<p class="text-center">
				were featured in
			</p>
			<div class="row">
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
				<div class="col">
					<img src="https://www.tivix.com/wp-content/uploads/2019/08/Forbes-e1564781349386.png">
				</div>
			</div>	
		</div>
	</div>

<?php get_footer(); ?>