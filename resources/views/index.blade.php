@extends('layouts.app')

@section('content')
    <div class="grid-container">
        @include('partials.page-header')

        @if (!have_posts())
            <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
        @endif

        @while (have_posts()) @php the_post() @endphp
            @include('partials.content-'.get_post_type())

            @include('icon::youtube', ['color' => '#ff0000', 'width' => 12])
        @endwhile

        {!! get_the_posts_navigation() !!}

        <div class="margin-top-3">
            <button class="js-modal-trigger button" data-modal="#modal01">
                Open modal
            </button>

            <button class="js-modal-trigger button" data-modal="#modal02">
                Open modal
            </button>

            @modal(['id' => 'modal01'])
                @slot('title')
                    This is the title of our modal
                @endslot
                This is a text that is going to go in the Slot
            @endmodal

            @component('components.modal', ['id' => 'modal02'])
                @slot('title')
                    dsfsadfdsfa
                @endslot
                asfassad
            @endcomponent

        </div>
    </div>
@endsection
