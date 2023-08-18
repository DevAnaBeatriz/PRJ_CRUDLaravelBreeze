<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-lg p-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
         
                <div class="p-6 text-gray-900">
                <center>
        <div class="col-10 m-auto">    
        @csrf	
        
				
        <div class="table-responsive">
        <table class="table text-center">
            <thead class="table-blue bg-primary">
            <tr>
                    <th>Nome&nbsp;&nbsp;</th>
                    <th>Telefone&nbsp;&nbsp;</th>
                    <th>Origem&nbsp;&nbsp;</th>                
                    <th>Data do Contato&nbsp;&nbsp;</th>
                    <th>Observação&nbsp;&nbsp;</th>
                    <th>Ação&nbsp;&nbsp;</th>
                </tr>
            </thead>
            <tbody class="text-center ">
                @foreach($cliente as $clientes)
                <tr >
                    <th >{{$clientes->nome}}&nbsp;&nbsp;</th>
                    <td>{{$clientes->telefone}}&nbsp;&nbsp;</td>
                    <td>{{$clientes->origem}}&nbsp;&nbsp;</td>               
                    <td>{{$clientes->data_contato}}&nbsp;&nbsp;</td>
                    <td>{{$clientes->observacao}}&nbsp;&nbsp;</td>
                    <td>
                        <a href='{{url("/ver/{$clientes->id}")}}'>
                            <button class="btn btn-dark">Visualizar</button>
                        </a><br>
                        <a href='{{url("/editar/{$clientes->id}")}}'>
                            <button class="btn btn-primary">&nbsp;&nbsp;&nbsp;Editar&nbsp;&nbsp;&nbsp;</button>
                        </a><br>
                        <a  href='{{url("/excluir/{$clientes->id}")}}'  class="js-del">  
                        <button class="btn btn-danger">&nbsp;&nbsp;Deletar&nbsp;&nbsp;</button>
                        </a>
                    </td>
                </tr>
                        
                @endforeach
                	
        </tbody>
        </table>
        
        </div>
   </center>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>