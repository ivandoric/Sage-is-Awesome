@extends('layouts.app')

@section('content')
    <div class="grid-container">

        @if (!have_posts())
            <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
        @endif

        @while (have_posts()) @php the_post() @endphp
            <div class="product-item">
                <h3>{{ the_title() }}</h3>
                <a href="{{ the_permalink() }}">See the product</a>

                <h3>Discount</h3>

                {{ ArchiveProducts::discountedPrice() }}
            </div>
        @endwhile
    </div>
@endsection
