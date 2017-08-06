@if (count($errors) > 0)
    <div class="alert alert--danger">
        @foreach ($errors->all() as $error)
            <ul class="list--unstyled">
                <li class="list__item">{{ $error }}</li>
            </ul>
        @endforeach
    </div>
@endif

@if (session('notification'))
    <div class="alert alert--success">
        {{ session('notification') }}
    </div>
@endif
