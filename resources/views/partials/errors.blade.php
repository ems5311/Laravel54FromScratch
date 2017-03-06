@if ($errors->hasBag())
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                {{--{{ dd($errors->hasBag()) }}--}}
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
