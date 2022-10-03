@csrf
        <input type="text" name="company" placeholder="Empresa:" value="{{$user->company ?? old('company')}}">
        <input type="text" name="name" placeholder="Nome:"value="{{ $user->name ?? old('name')}}">
        <input type="email" name="email" placeholder="E-mail:"value="{{ $user->email ?? old('email')}}">
        <input type="text" name="telephone" placeholder="Telefone:"value="{{$user->telephone ?? old ('telephone')}}">
        <button type="submit">
            Enviar
        </button>