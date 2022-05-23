<div class="page profile-wraper">
<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("db.php");
?>
	<div class="navbar navbar-style-1">
		<div class="navbar-inner">
			<div class="left">
				<a href="#" class="link back">
					<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M4.3419 8L10.2222 2.22222L8 2.73828e-07L1.22201e-06 8L8 16L10.2222 13.7778L4.3419 8Z" fill="#122261"/>
					</svg>
				</a>
            </div>
			<div class="title">Profile</div>
            <div class="right">
                <a href="#" class="link panel-open" data-panel="left">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.6995 11.6977V0.674578C12.6995 0.299813 12.3997 0 12.0249 0C11.6501 0 11.3503 0.299813 11.3503 0.674578V11.6977C9.78631 12.0125 8.60205 13.3966 8.60205 15.0556C8.60205 16.7146 9.78631 18.0987 11.3503 18.4135V23.3204C11.3503 23.6952 11.6501 23.995 12.0249 23.995C12.3997 23.995 12.6995 23.6952 12.6995 23.3204V18.4135C14.2635 18.0987 15.4478 16.7146 15.4478 15.0556C15.4478 13.4016 14.2685 12.0125 12.6995 11.6977ZM12.0249 17.1293C10.8806 17.1293 9.95121 16.1999 9.95121 15.0556C9.95121 13.9113 10.8806 12.9819 12.0249 12.9819C13.1692 12.9819 14.0986 13.9113 14.0986 15.0556C14.0986 16.1999 13.1692 17.1293 12.0249 17.1293Z" fill="#12224F"/>
						<path d="M4.43972 6.04122V0.674578C4.43972 0.299813 4.13991 0 3.76515 0C3.39038 0 3.09057 0.299813 3.09057 0.674578V6.04122C1.52655 6.35603 0.342285 7.74016 0.342285 9.39913C0.342285 11.0581 1.52655 12.4422 3.09057 12.757V23.3204C3.09057 23.6952 3.39038 23.995 3.76515 23.995C4.13991 23.995 4.43972 23.6952 4.43972 23.3204V12.752C6.00375 12.4372 7.18801 11.0531 7.18801 9.39413C7.18801 7.73517 6.00375 6.35603 4.43972 6.04122ZM3.76515 11.4728C2.62086 11.4728 1.69144 10.5434 1.69144 9.39913C1.69144 8.25484 2.62086 7.32542 3.76515 7.32542C4.90943 7.32542 5.83885 8.25484 5.83885 9.39913C5.83885 10.5434 4.90443 11.4728 3.76515 11.4728Z" fill="#12224F"/>
						<path d="M20.9095 6.04122V0.674578C20.9095 0.299813 20.6096 0 20.2349 0C19.8601 0 19.5603 0.299813 19.5603 0.674578V6.04122C17.9963 6.35603 16.812 7.74016 16.812 9.39913C16.812 11.0581 17.9963 12.4422 19.5603 12.757V23.3254C19.5603 23.7002 19.8601 24 20.2349 24C20.6096 24 20.9095 23.7002 20.9095 23.3254V12.752C22.4735 12.4372 23.6577 11.0531 23.6577 9.39413C23.6577 7.73517 22.4785 6.35603 20.9095 6.04122ZM20.2349 11.4728C19.0906 11.4728 18.1612 10.5434 18.1612 9.39913C18.1612 8.25484 19.0906 7.32542 20.2349 7.32542C21.3792 7.32542 22.3086 8.25484 22.3086 9.39913C22.3086 10.5434 21.3792 11.4728 20.2349 11.4728Z" fill="#12224F"/>
					</svg>
				</a>
            </div>
        </div>
	</div>
	<?php 
		
		$query = "SELECT 'name','class', 'sem' FROM `student` WHERE rollno='".$_SESSION['rollno']."'";
		$result = mysqli_query($con, $query); ?>
	<!-- Page Content -->
	<div class="page-content content-area pt-90 pt-0">
		<div class="container">
			<div class="author-bx mb-20">
				<div class="dz-media">
				<img src="/img/avg.png" alt=""/>
				</div>
				<div class="author-content">
				<?php if($row = $result ->fetch_assoc()){ echo '<h4 class="name">'.$_SESSION['name'].'</h4>
					<p>'.$_SESSION['class'].'</p>
					<p>'.$_SESSION['rollno'].'</p>
					<ul class="social-list">
						<li>'.$_SESSION['sem'].'</li>
					</ul>'; }?>
				</div>
			</div>
			<!-- <p class="mt-0 mb-30">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugi</p>
			<div class="card bg-primary radius download-cv">
				<div class="info">
					<h4 class="item-title">My Resume</h4>
					<span>david_resume.pdf</span>
				</div>
				<img src="img/svg/pdf.svg" alt="">
			</div> -->
			
			<div class="title-bar">
				<h4 class="dz-title">Theory</h4>
			</div>
			<div data-space-between="30" data-slides-per-view="auto" data-centered-slides="false" class="swiper-container swiper-init main-swiper skill-swiper">
				<div class="swiper-wrapper" style="height:200px;">
					<div class="swiper-slide">
						<div class="skill-bar">
							<div class="gauge gauge-init" 
								data-type="circle" 
								data-value="0.70" 
								data-value-text="70%" 
								data-border-bg-color="#d4d4d4" 
								data-border-width="20" 
								data-value-text-color="#122261" 
								data-border-color="#122261">
							</div>
							<h5 class="title">Web Designing</h5>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="skill-bar">
							<div class="gauge gauge-init" 
								data-type="circle" 
								data-value="0.50" 
								data-value-text="50%" 
								data-border-bg-color="#d4d4d4" 
								data-border-width="20" 
								data-value-text-color="#122261" 
								data-border-color="#122261">
							</div>
							<h5 class="title">PHP Programming</h5>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="skill-bar">
							<div class="gauge gauge-init" 
								data-type="circle" 
								data-value="0.80" 
								data-value-text="80%" 
								data-border-bg-color="#d4d4d4" 
								data-border-width="20" 
								data-value-text-color="#122261" 
								data-border-color="#122261">
							</div>
							<h5 class="title">Operating System - II</h5>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="skill-bar">
							<div class="gauge gauge-init" 
								data-type="circle" 
								data-value="0.80" 
								data-value-text="80%" 
								data-border-bg-color="#d4d4d4" 
								data-border-width="20" 
								data-value-text-color="#122261" 
								data-border-color="#122261">
							</div>
							<h5 class="title">Networking & Internet</h5>
						</div>
					</div>
				</div>
			</div>

			<div class="title-bar">
				<h4 class="dz-title">Practical</h4>
			</div>
			<div data-space-between="30" data-slides-per-view="auto" data-centered-slides="false" class="swiper-container swiper-init main-swiper skill-swiper">
				<div class="swiper-wrapper" style="height:200px;">
					<div class="swiper-slide">
						<div class="skill-bar">
							<div class="gauge gauge-init" 
								data-type="circle" 
								data-value="0.70" 
								data-value-text="70%" 
								data-border-bg-color="#d4d4d4" 
								data-border-width="20" 
								data-value-text-color="#122261" 
								data-border-color="#122261">
							</div>
							<h5 class="title">Web Designing</h5>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="skill-bar">
							<div class="gauge gauge-init" 
								data-type="circle" 
								data-value="0.50" 
								data-value-text="50%" 
								data-border-bg-color="#d4d4d4" 
								data-border-width="20" 
								data-value-text-color="#122261" 
								data-border-color="#122261">
							</div>
							<h5 class="title">PHP Programming</h5>
						</div>
					</div>
					
				</div>
			</div>
			
				
			<!-- <div class="title-bar">
				<h4 class="dz-title">Experience</h4>
			</div>
			<div class="timeline dz-timeline">
				<div class="timeline-item">
					<div class="timeline-item-divider"></div>
					<div class="timeline-item-content">
						<div class="item-date text-primary">2018 - Now</div>
						<h5 class="title">Principal UI Designer</h5>
						<p>Kongkalikong Studios</p>
					</div>
				</div>
				<div class="timeline-item">
					<div class="timeline-item-divider"></div>
					<div class="timeline-item-content">
						<div class="item-date text-primary">2015 - 2018</div>
						<h5 class="title">Lead Graphic Designer</h5>
						<p>Skuylah Inc.</p>
					</div>
				</div>
				<div class="timeline-item">
					<div class="timeline-item-divider"></div>
					<div class="timeline-item-content">
						<div class="item-date text-primary">2012 - 2015</div>
						<h5 class="title">Junior Graphic Designer</h5>
						<p>Yokbisa yok Crew</p>
					</div>
				</div>
			</div> -->

			<div class="custom-file mb-20">
             <a href="/#/logout.php" ><div class="custom-text">
								<h5 class="custom-file-label text-primary">Log Out</h5>
                
				<svg version="1.1" class="icon-bx svg-primary" style="fill: var(--f7-theme-color);"  id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 height="30px" viewBox="0 0 369.949 369.949" style="enable-background:new 0 0 369.949 369.949;"
	 xml:space="preserve">
<g>
	<g>
		<path d="M184.975,0C82.824,0,0.003,82.824,0.003,184.978c0,102.147,82.821,184.972,184.972,184.972
			c102.153,0,184.972-82.824,184.972-184.972C369.946,82.824,287.128,0,184.975,0z M184.975,353.515
			c-92.942,0-168.536-75.613-168.536-168.537c0-92.93,75.594-168.537,168.536-168.537c92.931,0,168.53,75.606,168.53,168.537
			C353.505,277.901,277.905,353.515,184.975,353.515z"/>
		<path d="M190.775,172.758H328.22c-6.233-73.619-68.053-131.649-143.245-131.649c-79.326,0-143.866,64.54-143.866,143.869
			s64.54,143.881,143.866,143.881c74.447,0,135.864-56.865,143.143-129.439H190.775l10.568,10.58c5.206,5.207,5.206,13.644,0,18.844
			c-5.212,5.212-13.646,5.212-18.852,0l-33.314-33.32c-0.015-0.007-0.015-0.019-0.027-0.019l-9.413-9.415l9.413-9.413
			c0.012,0,0.012-0.012,0.027-0.018l31.093-31.102c2.609-2.605,6.02-3.906,9.427-3.906c3.408,0,6.818,1.3,9.425,3.906
			c5.212,5.207,5.212,13.644,0,18.847L190.775,172.758z"/>
	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>  
			</div></a>
          </div>
			
		</div>		
		
	</div>
	
</div>