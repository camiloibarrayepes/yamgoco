@extends('layouts.all')

@section('item_last_trip')

<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					Ultimas travesias
					<span>Descrubre los ultimos destinos agregados</span>
				</h3>
			</div>

			<div class="col-md-12">
				<div class="simple-slick-carousel dots-nav">

                    <!-- Listing Item -->
					
@foreach($posts as $post)
<div class="carousel-item">
		<a href="{{ route('post', $post->slug) }}" class="listing-item-container compact">
			<div class="listing-item">
					@if($post->file)
					<img src="{{ $post->file }}" width="900" class="img-responsive">
					@endif
				<div class="listing-item-details">
						<ul>
							<li>Starting from $59 per night</li>
						</ul>
					</div>

				<div class="listing-badge now-open">Descuento</div>

				<div class="listing-item-content">
					<div class="numerical-rating" data-rating="3.5"></div>
					<h3>{{ $post->name }} <i class="verified-icon"></i></h3>
					<span>Ubicación</span>
				</div>
				<span class="like-icon"></span>
			</div>
		</a>
	</div>
@endforeach



	<!-- Listing Item / End -->
					

					
				</div>
				
			</div>

		</div>
	</div>




@stop

