<x-app-layout>
	
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                <h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
<p class="card-text">Sistema utilizado para agendamento de serviços.</p>
					<p>
					<form action="{{route('registrar_clientes')}}" method="POST">
					@csrf	
					
					<div class="container text-left">
					<div class="row row-cols-2">
						<div class="col">
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Nome do Cliente:</label>
							<input type="text" class="form-control" required  name="nome">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Telefone:</label>
							<input type="text" name="telefone" class="form-control" required   placeholder="(xx)xxxxx-xxxx">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlSelect1" class="form-label">Origem:</label>
							<select class="form-select" name="origem" aria-label="Default select example">
								<option selected value="Celular">Celular</option>
								<option value="Fixo">Fixo</option>
							</select>							
						</div>

						
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
							<input type="date" class="form-control" name="data_contato" required  >
						</div>

						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Observação</label>
							<textarea class="form-control" name="observacao"  rows="3">Nenhuma observação.</textarea>
						</div>


						</div>

						<div class="col">
							
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Endereço:</label>
							<input type="text" name="endereco" class="form-control" required  >
						</div>

                        <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Bairro:</label>
							<input type="text" name="bairro" class="form-control" required >
						</div>

                        <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">CEP:</label>
							<input type="text" name="cep" class="form-control" required >
						</div>

                        <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Cidade:</label>
							<input type="text" name="cidade" class="form-control" required >
						</div>

                        <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Estado:</label>
							<input type="text" name="estado" class="form-control" required >
						</div>

					
					
					
						
						</div>
				
	
					</div>
					</div>	

						<button type="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>