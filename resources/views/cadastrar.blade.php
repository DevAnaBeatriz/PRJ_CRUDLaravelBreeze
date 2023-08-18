<x-app-layout>
	
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-lg p-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				
                <div class="p-6 text-gray-900">
				<script type="text/javascript">

					function preencherEndereco() {
							const cep = document.getElementById('cep').value;

							// Fazer uma requisição HTTP para a API de consulta de CEPs
							fetch(`https://viacep.com.br/ws/${cep}/json/`)
								.then(response => response.json())
								.then(data => {
								// Preencher os campos com os dados retornados pela API
								document.getElementById('bairro').value = data.bairro;
								document.getElementById('endereco').value = data.logradouro;
								document.getElementById('cidade').value = data.localidade;
								document.getElementById('estado').value = data.uf;
								})
								.catch(error => {
								console.error('Ocorreu um erro ao consultar o CEP:', error);
								});
					}

                function blockletras(keypress)
                {
                    // campo senha - bloqueia letras                               
                    if(keypress>=48 && keypress<=57)
                    {
                        return true;
                    }
                    else{
                        return false;
                    }
                 }

                 function blocknumero(keypress)
                {
                    // campo nome - bloqueia numero                               
                    if(keypress>=48 && keypress<=57)
                    {
                        return false;
                    }
                    else{
                        return true;
                    }
                 }

				 function formatCEP(event) {
					const cepInput = event.target;
					const cep = cepInput.value.replace(/\D/g, '');

					// Formata o CEP
					if (cep.length > 5) {
						cepInput.value = cep.replace(/(\d{5})(\d{1,3})/, '$1-$2');
					}
				}

				function formatarTelefone(event) {
						const telefoneInput = event.target;
						const telefone = telefoneInput.value.replace(/\D/g, '');

						// Formata o telefone
						if (telefone.length > 2) {
							telefoneInput.value = `(${telefone.slice(0, 2)}) ${telefone.slice(2, 7)}-${telefone.slice(7, 11)}`;
						}
				}




					function keyPressHandler(event) {
					const keyPressed = event.which || event.keyCode;
					const input = event.target;

					// Verifica se o caractere pressionado é um número
					if (keyPressed >= 48 && keyPressed <= 57) {
						formatPhoneNumber(input);
					} else {
						event.preventDefault();
					}
				}			

        </script>

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
							<input type="text" class="form-control" required  name="nome" placeholder="Digite seu nome"   onkeypress="return blocknumero(window.event.keyCode)">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Telefone:</label>
							<input type="text" name="telefone" id="telefone" class="form-control" required  oninput="formatarTelefone(event)" onkeypress="return blockletras(window.event.keyCode)" placeholder="Digite seu número" maxlength="15">
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
							<label for="exampleFormControlInput1" class="form-label">CEP:</label>
							<input type="text" name="cep" id="cep" class="form-control" required maxlength="9" placeholder="Digite seu CEP"  oninput="formatCEP(event)" onblur="preencherEndereco()"  onkeypress="return blockletras(window.event.keyCode)" >

						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Endereço:</label>
							<input type="text" name="endereco" id="endereco"  placeholder="Digite seu endereço" class="form-control" required  >
						</div>

                        <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Bairro:</label>
							<input type="text" name="bairro" id="bairro" class="form-control" placeholder="Digite seu bairro" required onkeypress="return blocknumero(window.event.keyCode)">
						</div>

                     

                        <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Cidade:</label>
							<input type="text" name="cidade" id="cidade"  class="form-control" placeholder="Digite sua cidade" required onkeypress="return blocknumero(window.event.keyCode)">
						</div>

						<div class="mb-3">
									<label for="estado" class="form-label">Estado:</label>
									<select class="form-select" name="estado" id="estado" required>
										<option value="">Selecione um estado</option>
										<option value="AC">Acre</option>
										<option value="AL">Alagoas</option>
										<option value="AP">Amapá</option>
										<option value="AM">Amazonas</option>
										<option value="BA">Bahia</option>
										<option value="CE">Ceará</option>
										<option value="DF">Distrito Federal</option>
										<option value="ES">Espírito Santo</option>
										<option value="GO">Goiás</option>
										<option value="MA">Maranhão</option>
										<option value="MT">Mato Grosso</option>
										<option value="MS">Mato Grosso do Sul</option>
										<option value="MG">Minas Gerais</option>
										<option value="PA">Pará</option>
										<option value="PB">Paraíba</option>
										<option value="PR">Paraná</option>
										<option value="PE">Pernambuco</option>
										<option value="PI">Piauí</option>
										<option value="RJ">Rio de Janeiro</option>
										<option value="RN">Rio Grande do Norte</option>
										<option value="RS">Rio Grande do Sul</option>
										<option value="RO">Rondônia</option>
										<option value="RR">Roraima</option>
										<option value="SC">Santa Catarina</option>
										<option value="SP">São Paulo</option>
										<option value="SE">Sergipe</option>
										<option value="TO">Tocantins</option>
									</select>
						</div>

						
						</div>
			</div>
			<button type="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>
					</div>
					</div>	

						
			</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>