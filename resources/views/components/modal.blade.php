<dialog class="Modal" id="{{ $id }}">
    <div class="Modal-inner">
        <button class="js-close-modal Modal-close-button" type="button">
            <span aria-hidden="true">&times;</span>
        </button>

        <div class="Modal-header">
            <h2>{{ $title }}</h2>
        </div>

        <div class="Modal-body">
            {{ $slot }}
        </div>
    </div>
</dialog>
