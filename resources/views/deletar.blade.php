<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Remoção de Agendamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
  
        <div class="col-10 m-auto">    

        <form action='{{url("/excluir/{$clientes->id}")}}' method="POST">
					@csrf
						<div class="mb-3">
                            <h5 class="card-title">Tem certeza que deseja excluir esse registro?</h5>
                            <label for="exampleFormControlInput1" class="form-label"></label>
                            <br>
							<label for="exampleFormControlInput1" class="form-label">Nome:</label>
							<input value="{{ $clientes->nome }}" type="text" class="form-control" required  name="nome" readonly>
						</div>

						<br>
                        <button type="submit" id="btnInserir" class="btn btn-primary">Deletar</button>

                      <a href="{{url('/listar')}}">
                            <button type="button" class="btn btn-primary" href="{{url('/listar')}}" >Voltar</button>
                     </a>
					</form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>