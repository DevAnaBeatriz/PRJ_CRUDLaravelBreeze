<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visualização de Agendamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-lg p-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				
                <div class="p-6 text-gray-900">
  
        <div class="col-10 m-auto">    

   
        <form>
        <h5 class="card-title">Visualizar - Agendamento de {{$clientes->nome}}</h5>
        <br>
        <div class="container text-left">
						<div class="row row-cols-2">
							<div class="col">
							<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Nome:</label>
							<input type="text" class="form-control"   name="nome" value="{{$clientes->nome}}" readonly>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Telefone:</label>
							<input type="tel" name="telefone" class="form-control"   value="{{$clientes->telefone}}" readonly >
						</div>

						<div class="mb-3">
							<label for="exampleFormControlSelect1" class="form-label">Origem:</label>
							<input class="form-select" name="origem" aria-label="Default select example" value="{{$clientes->origem}}" disabled readonly>
							
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
							<input type="date" class="form-control" name="data_contato"  value="{{$clientes->data_contato}}" readonly >
						</div>

						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Observação</label>
							<input class="form-control" name="observacao"  rows="3" value="{{$clientes->observacao}}">
						</div>


							</div>



							<div class="col">

							<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Endereço:</label>
							<input type="text" name="endereco" class="form-control"   value="{{$clientes->endereco}}" readonly>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Bairro:</label>
							<input type="text" name="bairro" class="form-control"   value="{{$clientes->bairro}}" readonly>
						</div>


						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">CEP:</label>
							<input type="text" name="cep" class="form-control"   value="{{$clientes->cep}}" readonly>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Cidade:</label>
							<input type="text" name="cidade" class="form-control"   value="{{$clientes->cidade}}" readonly>
						</div>

						<div class="mb-3">
								<label for="estado" class="form-label">Estado:</label>
								<select class="form-select" name="estado" id="estado" required disabled>
									<option value="">Selecione um estado</option>
									@php
										$estados = [
											"AC" => "Acre",
											"AL" => "Alagoas",
											"AP" => "Amapá",
											"AM" => "Amazonas",
											"BA" => "Bahia",
											"CE" => "Ceará",
											"DF" => "Distrito Federal",
											"ES" => "Espírito Santo",
											"GO" => "Goiás",
											"MA" => "Maranhão",
											"MT" => "Mato Grosso",
											"MS" => "Mato Grosso do Sul",
											"MG" => "Minas Gerais",
											"PA" => "Pará",
											"PB" => "Paraíba",
											"PR" => "Paraná",
											"PE" => "Pernambuco",
											"PI" => "Piauí",
											"RJ" => "Rio de Janeiro",
											"RN" => "Rio Grande do Norte",
											"RS" => "Rio Grande do Sul",
											"RO" => "Rondônia",
											"RR" => "Roraima",
											"SC" => "Santa Catarina",
											"SP" => "São Paulo",
											"SE" => "Sergipe",
											"TO" => "Tocantins"
										];
									@endphp
									@foreach($estados as $sigla => $estado)
										@if($sigla == $clientes->estado)
											<option selected value="{{$sigla}}">{{$estado}}</option>
										@else
											<option value="{{$sigla}}">{{$estado}}</option>
										@endif
									@endforeach
								</select>
							</div>


							</div>
						</div>
					</div>	
                    <a href="{{url('/listar')}}">
                        <br>
                        <button type="button" class="btn btn-primary" href="{{url('/listar')}}" >Voltar</button>
                     </a>

</form>
</p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>