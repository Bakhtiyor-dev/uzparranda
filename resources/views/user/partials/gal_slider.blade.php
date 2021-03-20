<div class="gal_slider">
	@if(isset($products) && !$products->isEmpty())
		@foreach($products as $product)
		<div class="item">
			<a href="{{$product->image}}" data-lightbox="roadtrip" data-title="{{$product->body}}">
				<span class="caption">{{$product->body}}</span>
				<img src="{{$product->image}}" alt="image">
			</a>	
		</div>
		@endforeach
	@endif
</div>