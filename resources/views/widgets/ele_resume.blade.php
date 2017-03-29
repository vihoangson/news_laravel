<section class="no-display">
	<div class="item resume" id="3">
		<div class="page-head">
			<div class="row">
				<div class="col-md-5">
					<h3>{{trans("blog.resume")}}</h3>
				</div>
				<div class="col-md-7">
					<div class="np-main">
						<p>{{trans("blog.ditoitronguoc")}}</p>
						<div class="np-controls">
							<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
							<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="resume-info hidden">
			<h4>{{trans("blog.daotao")}}</h4>
			<div class="sep2"></div>
			<ul>
				<li>
					<h5>Trường Cao Đẳng CNTT Tp.HCM</h5>
					<span class="year"><i class="fa fa-calendar"></i> 2001 - 2004</span>
					<p>Academy of Art University's School of Web Design & New Media is the intersection between traditional design and new technologies.</p>
				</li>
				<li>
					<h5>IT Technical Institute</h5>
					<span class="year"><i class="fa fa-calendar"></i> 2005 - 2008</span>
					<p>Information technology (IT) workers can be found in many types of organizations. According to the U.S. Department of Labor, "In the modern workplace, it is imperative that Information Technology (IT) works both effectively and reliably</p>
				</li>
				<li>
					<h5>Web Design School</h5>
					<span class="year"><i class="fa fa-calendar"></i> 2009 - 2012</span>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
				</li>
			</ul>
		</div>


		<div class="resume-info">
			<h4>Vị trí từng làm</h4>
			<div class="sep2"></div>
			<ul>
				<li>
					<h5>Lập trình viên tại công ty Vihan</h5>
					<span class="year"><i class="fa fa-calendar"></i> 2010 - 2014</span>
					<p><b>Vị trí:</b> Lập trình viên </p>
				</li>
				<li>
					<h5>Lập trình viên tại công ty Cybridge Asia</h5>
					<span class="year"><i class="fa fa-calendar"></i> 2014 - 2016</span>
					<p><b>Vị trí:</b> Lập trình viên </p>
				</li>
			</ul>
		</div>

		<div class="skills-info">
			<h4>Kỹ năng</h4>
			<div class="sep2"></div>
			<ul>
				<li>
					<p>Codeigniter <span>90%</span></p>
					<div class="skills-bg"><span class="skill1"></span></div>
				</li>
				<li>
					<p>Laravel <span>75%</span></p>
					<div class="skills-bg"><span class="skill2"></span></div>
				</li>
				<li>
					<p>Wordpress <span>80%</span></p>
					<div class="skills-bg"><span class="skill3"></span></div>
				</li>
				<li>
					<p>Framework CSS <span>85%</span></p>
					<div class="skills-bg"><span class="skill4"></span></div>
				</li>
				<li>
					<p>Linux / Centos <span>60%</span></p>
					<div class="skills-bg"><span class="skill5"></span></div>
				</li>
				<li>
					<p>HTML5/CSS3/JAVASCRIPT <span>85%</span></p>
					<div class="skills-bg"><span class="skill6"></span></div>
				</li>
				<li>
					<p>Git <span>85%</span></p>
					<div class="skills-bg"><span class="skill7"></span></div>
				</li>
				<li>
					<p>Ruby on rail <span>20%</span></p>
					<div class="skills-bg"><span class="skill8"></span></div>
				</li>
			</ul>
		</div>


		<div class="services-info hidden">
			<h4>Services</h4>
			<div class="sep2"></div>
			<ul>
				<li>
					<i class="fa fa-cloud"></i>
					<h5>Design</h5>
				</li>
				<li>
					<i class="fa fa-smile-o"></i>
					<h5>Coding</h5>
				</li>
				<li>
					<i class="fa fa-desktop"></i>
					<h5>Responsive</h5>
				</li>
				<li>
					<i class="fa fa-text-width"></i>
					<h5>Planing</h5>
				</li>
				<li>
					<i class="fa fa-comment"></i>
					<h5>Wordpress</h5>
				</li>
				<li>
					<i class="fa fa-picture-o"></i>
					<h5>Photography</h5>
				</li>
			</ul>
		</div>
		<br>
		<br>
		<div class="row skill-box">
			<h4>Trình độ</h4>
			<div class="sep2"></div>
			<style>
			.skill-box * {
				font-size:14px;
			}
			</style>
			<div class="col-md-6">
				<?php $i=0; ?>
				@foreach ($skill_level as $key=>$element)
				<p>{{$key}} {!! show_star($element) !!}</p>
				<?php
				if($i == round(count($skill_level)/2)){
					echo "</div><div class='col-md-6'>";
				}
				$i++;
				?>
				@endforeach
			</div>
		</div>
		<div class="text-center" style="margin-bottom:10px">
			<a href="https://docs.google.com/document/d/1UXBX0MHyqF9v3k6UgwfL3RH0Xvoy6IBwHomhMB_j8M4/edit?usp=sharing" class="btn btn-primary btn-lg"><i class="fa fa-user"></i> View my CV</a>
		</div>


	</div>
</section>
