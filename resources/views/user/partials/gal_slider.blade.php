<div class="gal_slider">
	@if(isset($products) && !$products->isEmpty())
		@foreach($products as $product)
		<div class="item">
			<a href="{{$product->image}}" data-lightbox="roadtrip" data-title="Lorem ipsum dolor sit amet">
				<span class="caption">{{$product->descr}}</span>
				<img src="{{$product->image}}" alt="image">
			</a>	
		</div>
		@endforeach
	@endif
</div>