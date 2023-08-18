<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição de Agendamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
  
        <div class="col-10 m-auto">    
        @csrf	
        <h5 class="card-title">Editar - Agendamento de {{$clientes->nome}}</h5>
				<br>
  
				<form action='{{url("/atualizar/{$clientes->id}")}}' method="POST">
					@csrf					
				
					@if(isset($errors) && count($errors)>0)
					<div class="alert alert-danger" role="alert">
						@foreach($errors->all() as $erro)
							{{$erro}}<br>
						@endforeach
					</div>
					@endif	

					<div class="container text-left">
						<div class="row row-cols-2">
							<div class="col">
							<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Nome:</label>
							<input type="text" class="form-control"   name="nome" value="{{$clientes->nome}}" required>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Telefone:</label>
							<input type="tel" name="telefone" class="form-control"   value="{{$clientes->telefone}}" required>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlSelect1" class="form-label">Origem:</label>
							<select class="form-select" name="origem" aria-label="Default select example">
								@if(($clientes->origem)=="Fixo")
								<option selected value="Fixo">Fixo</option>
								<option value="Celular">Celular</option>
								@else
								<option selected value="Celular">Celular</option>
								<option value="Fixo">Fixo</option>
								@endif
							</select>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
							<input type="date" class="form-control" name="data_contato"  value="{{$clientes->data_contato}}" required >
						</div>

						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Observação</label>
							<input class="form-control" name="observacao"  rows="3" value="{{$clientes->observacao}}">
						</div>


							</div>



							<div class="col">

							<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Endereço:</label>
							<input type="text" name="endereco" class="form-control"   value="{{$clientes->endereco}}" required>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Bairro:</label>
							<input type="text" name="bairro" class="form-control"   value="{{$clientes->bairro}}" required>
						</div>


						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">CEP:</label>
							<input type="text" name="cep" class="form-control"   value="{{$clientes->cep}}" required>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Cidade:</label>
							<input type="text" name="cidade" class="form-control"   value="{{$clientes->cidade}}" required>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Estado:</label>
							<input type="text" name="estado" class="form-control"   value="{{$clientes->estado}}" required>
						</div>



							</div>
						</div>
					</div>	
						<br>
						<button type="submit" id="btnInserir" class="btn btn-primary">Alterar</button>
						<a href="{{url('/listar')}}">
                            <button type="button" class="btn btn-primary" href="{{url('/listar')}}" >Voltar</button>
                     </a>
					</form>
					</p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>