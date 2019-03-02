@extends('layouts.app')

@section('content')
    <div class="grid-container">
        {{ $site_name }}

        {{ App::title() }}
        @while (have_posts()) @php the_post() @endphp
            <div class="product-item">
                <h3>{{ the_title() }}</h3>

                <strong>{{ $price }}</strong>
                {{ $discount }}

                <h3>Discount</h3>
                {{ $calculate_discount }}
            </div>
        @endwhile

        <h3>Related Products</h3>

        @while ($related_products->have_posts()) @php $related_products->the_post() @endphp
            <div class="product-item">
                <h3>{{ the_title() }}</h3>
            </div>
        @endwhile
    </div>
@endsection
