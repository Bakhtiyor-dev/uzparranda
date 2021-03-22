<div class="gal_slider">
	@if(isset($products) && !$products->isEmpty())
		@foreach($products as $product)
		<div class="item">
			<a href="{{$product->image}}" data-lightbox="roadtrip" data-title="{{$product->title}}">
				<span class="caption">{{$product->title}}</span>
				<img src="{{$product->image}}" alt="`">
			</a>	
		</div>
		@endforeach
	@endif
</div>