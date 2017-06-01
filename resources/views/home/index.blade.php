@extends('master')

@section('title', 'Social Matrix | Home')

@section('content')

	<div class="home">
		<div class="home-text">
			<div class="container-fluid">
				<div class="row">
					<div class="text-center">
						<div class="home-text-container">
							<img src="images/smlogows.png">
							<h2>THE BEST WAY TO SELL IS BY WORD OF MOUTH.<br>
							SOCIAL MEDIA IS A PLATFORM TO CONNECT.<br>
							PEOPLE TRUST PEOPLE.</h2>

							
							<section id="section05" class="demo">
								<a href="#home1" class="btn btn-default page-scroll"><span></span><h4>WHO WE ARE</h4></a>
							</section>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="home1" id="home1">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3 text-center">
						<h3>SOCIAL MATRIX OFFERS A PLATFORM FROM WHICH TO REACH, CONNECT, ENGAGE, COMMUNICATE AND SELL.</h3>
						<p>We specialise in, and are committed to, partnering our clients to engage with their defined audiences through social media.
						Through specific interventions and growth, we connect you with your audience through various online platforms which your customers utilize every day.</p>
						<p>By engaging your stakeholders – not just your ad agency and marketing teams – we look to create a culture where everyone feels comfortable contributing to content. Social media is the new way of marketing.</p>
						<a href="{{ url('/team') }}"><button type="button" class="btn btn-default">MEET OUR TEAM</button></a>
					</div>
				</div>
			</div>
	</div>

	<div class="home2">
		<div class="home-text">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<div class="home-text-container2">
							<h2>SOCIAL MATRIX WILL PROVIDE THE MECHANISMS TO MOVE YOUR SOCIAL CONVERSATIONS TO CONVERSIONS.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="home5">
		
			<div class="container">
				<div class="row">
					<div class="text-center">
						<div class="home-text-container">
							<img src="images/qamea.png" height="50px">
							<img src="images/mp.png" height="50px">
							<img src="images/fronde.png" height="50px">
							<img src="images/raywhite.png" height="50px">
							<img src="images/prive.png" height="50px">
						</div>
					</div>
				</div>
			</div>
		
	</div>

	<div class="home3">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

							<ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
							</ol>

							<div class="carousel-inner" role="listbox">
							    <div class="item active">
							        <i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i>
							        <h3>SOCIAL INSIGHT</h3>
							        <p>What is the business capability, capacity, and commitment to social as a critical channel to market? The Social Insight is a health check that clearly maps the scope of your social media, go to market plan.</p>
							    </div>
							    <div class="item">
							        <i class="fa fa-commenting-o fa-5x" aria-hidden="true"></i>
							        <h3>SOCIAL SELLING</h3>
							        <p>Customer don't engage with the seller until 70% of the buying process is complete, although they are willing to engage with salespeople, they don't want to be sold to, they want to learn. 76% of buyers are ready to have a social media conversation about their pending buying decision.</p>
							    </div>
							    <div class="item">
							        <i class="fa fa-line-chart fa-5x" aria-hidden="true"></i>
							        <h3>AUDIENCE GROWTH</h3>
							        <p>Who, specifically is your target audience and on what social platforms do they use? Most importantly, are you connected to them? If not, we need to develop interventions to connect so that our social tactics are landing with the right people.</p>
							    </div>
							    <div class="item">
							        <i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
							        <h3>CONTENT CULTURE</h3>
							        <p>It's not just marketing and the ad agency that can generate content, how do you create a culture where everyone feels comfortable contributing to the richness of our social media presence, employees, stakeholder, suppliers and importantly customers.</p>
							    </div>
							    <div class="item">
							        <i class="fa fa-pencil fa-5x" aria-hidden="true"></i>
							        <h3>CONTENT PRODUCTION</h3>
							        <p>Generating persistent, provocative, engaging, video rich content that is grounded in the customer's world. Content that drives a conversation with your audience not a lecture gets better engagement.</p>
							    </div>
							   </div>

						     	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							      <span class="sr-only">Previous</span>
							    </a>
							    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							      <span class="sr-only">Next</span>
							    </a>

						    </div>
						
					</div>
				</div>
			</div>
	</div>


	<div class="home4">		
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 text-center">
						
							<div id="socialMatrix-map"></div>
							<p><small>CONTACT@SOCIALMATRIX.NZ</small><p>
							<p><small>2/130 ORIENTAL PARADE, ORIENTAL BAY, <br>
							WELLINGTON, NEW ZEALAND 6011<br>
							+64 4 801 9022</small></p>
							<a href="{{ url('/contact') }}"><button type="button" class="btn btn-default">CONTACT US</button></a>
						
					</div>
				</div>
			</div>		
	</div>
<script src="/js/socialMatrix-map.js" type="text/javascript"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAPk2cb6nhsAbWyEOi7hnHBjxDmDZflFs&callback=initMap">
    </script>
 
@endsection