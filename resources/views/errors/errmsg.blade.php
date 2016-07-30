@if ($errors->any())
    <br>
    <div class="row">
        <div class="column small-6 small-centered">
            <div class="callout alert">
                {{-- <button type="button" class="close" data-dismiss="alert"><i class="fa fa-minus-square"></i></button> --}}
                <strong>Ошибка</strong>
                @if ($message = $errors->first(0, ':message'))
                    {{ $message }}
                @else
                    Пожалуйста проверьте правильность заполнения формы
                @endif
                <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('success'))
    <div class="row">
        <div class="column small-6 small-centered">
            <div class="callout success">
                <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Success</strong> {{ $message }}
            </div>
        </div>
    </div>
@endif