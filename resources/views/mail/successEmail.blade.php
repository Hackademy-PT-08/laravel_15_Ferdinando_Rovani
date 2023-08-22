<x-layout>
    <p>SUCCESSO</p>
    @if(session('successMessage')) <p>{{session('successMessage')}}</p> @endif
</x-layout>