@extends("layout")

@section("main_content")
    <div style="max-width: 400px">
        <h1 class="font-weight-normal text-white-50 w-100">Форма обратной связи</h1>
        <form method="post" action="form/check" style="display: flex; flex-direction: column; gap: 6px; width: 100%;">
            @csrf
            <input class="bg-dark" type="email" name="email" id="email" placeholder="Ваш E-mail"/>
            <input class="bg-dark" type="text" name="heading" id="heading" placeholder="Ваш заголовок"/>
            <textarea class="bg-dark" name="message" id="message" placeholder="Ваше сообщение"></textarea>
            <button style="background: teal" type="submit">Отправить</button>
        </form>

        @if($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
