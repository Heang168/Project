@extends('frontend.master')
@section('title', 'Thing')
@section('content')
	<!-- new code-->
			<div id="fh5co-blog-section" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>Things to do</h3>
							<p>We select the best place for your traveling to ensure that u enjoy with trip and feel satisfy.</p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row row-bottom-padded-md">
						@foreach ($data as $i)
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive"	src="{{ $i->image}}"  alt=""></a>
									<div class="blog-text">
										<div class="prod-title">
											<h3 style="text-align: center; font-weight: bold;"><a href="#">{{$i->name}}p</a></h3>
											<p>{{$i->description}} </p>
											<p><a href="#">Learn More...</a></p>
										</div>
									</div>
								</div>
							</div>

						@endforeach
					</div>

				</div>
			</div>
@endsection