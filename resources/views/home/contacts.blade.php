<x-layout>
    <x-h1 :titolo="'Contattaci'"></x-h1>
    <div class="container mt-5">
        <form method="POST" action="">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" value="{{old('nome')}}" name="nome" placeholder="Inserisci il tuo nome" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cognome">Cognome:</label>
                        <input type="text" class="form-control" value="{{old('cognome')}}" id="cognome" name="cognome" placeholder="Inserisci il tuo cognome" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" value="{{old('email')}}" id="email" name="email" placeholder="Inserisci la tua email" required>
            </div>
            <div class="form-group">
                <label for="messaggio">Messaggio:</label>
                <textarea class="form-control" id="messaggio" value="{{old('messaggio')}}" name="messaggio" rows="4" placeholder="Inserisci il tuo messaggio" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-3">Invia</button>
        </form>
    </div>
</x-layout>
