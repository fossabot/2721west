@extends('layouts.app')

@section('content')
	<article class="about__wrapper" data-ng-controller="AboutController as vm">
		<div class="row">
			<section class="about__intro">
				<h1> I am a UX leader, a digital strategist, and a full-stack developer. Someone who will work 
					<span data-browser-detect class="malarkey" ng-click="vm.type()">
						<span class="malarkey--text" id="malarkey">smart</span>
                	</span>to get the job done. </h1>
				
				<p>I have over 13 years experience in the design industry and nine years of experience in start-ups. I created Octopoda Interactive as my own digital boutique agency to give those start-ups the necessary footing needed to create a successful business.</p>  
				<p>I understand what it takes to design and develop an application end to end and am experienced in all sides of the application launch.</p>
				<p>My passion is building delightful and engaging digital experiences that draw the user into meeting the company&rsquo;s goals.  </p>
				


				<ul class="about__more">
					<li><a data-modal-toggle data-target="contactModal">Contact me<i class="fa fa-angle-right"></i></a></li>
              		<li><a target="_blank" href="https://s3.amazonaws.com/2721west-assets/documents/zack-davis-resume.pdf" id="resumeDownload">Download My Resume<i class="fa fa-angle-right"></i></a></li>
              		<li><a target="_blank" href="https://www.linkedin.com/in/zackdavis" id="linkedIn">Linked In <i class="fa fa-angle-right"></i></a></li>
              		<li><a target="_blank" href="https://twitter.com/2721west" id="twitter">Twitter<i class="fa fa-angle-right"></i></a></li>
            	</ul>

			</section>
		</div>

		<div class="row">
			<div class="about-resume">
				@include('layouts.front.resume')

				
			</div>

			
		</div>
	</article>
@endsection

