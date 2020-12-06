@include('header')

@include('paineis')


<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="row m-0">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Fornecedores</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="{{route('home')}}">Inicio</a></li>
							<li class="active">Fornecedores</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content">
	<div class="animated fadeIn">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Fornecedores</strong>
					</div>
					<div class="card-body">
					<a class="btn btn-success" href="{{ route('pessoas.addfornecedor') }}">Adicionar fornecedor</a>

						
					<div class="card-body">
						<table id="tabela" class="table table-striped" >
						<thead>
								<tr>
									<th>#</th>
									<th>Nome</th>
									<th>Razão Social</th>
									<th>Email</th>
									<th>CNPJ</th>
									<th>CPF</th>
									<th>Telefone</th>
									<th>Cidade</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($fornecedores as $fornecedor)
								<tr>
									<th scope="row">{{ $fornecedor->id }}</th>
									<td>{{ $fornecedor->nome }}</td>
									<td>{{$fornecedor->razao_social}}</td>
									<td>{{ $fornecedor->email }}</td>
									<td>{{ $fornecedor->cnpj }}</td>
									<td>{{ $fornecedor->cpf }}</td>
									<td>{{ $fornecedor->telefone }}</td>
									<td>{{ $fornecedor->cidades->nome}}</td>
									<td>
                                    <a class="btn btn-custom" href="#">Editar</a>
									<a class="btn btn-danger"  href="javascript: (confirm('Deseja deletar o fornecedor : {{$fornecedor->nome}}?') ? window.location.href='{{route('fornecedor.deletar',$fornecedor->id)}}' : false )">Deletar</a>
                                </td>	
								</tr>
								@endforeach
							</tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
</div>

	</div>
</div><!-- .animated -->
</div><!-- .content -->



<script>

//--->Função para a formatação dos campos...<---
function Mascara(tipo, campo, teclaPress) {
	if (window.event)
	{
		var tecla = teclaPress.keyCode;
	} else {
		tecla = teclaPress.which;
	}
 
	var s = new String(campo.value);
	// Remove todos os caracteres à seguir: ( ) / - . e espaço, para tratar a string denovo.
	s = s.replace(/(\.|\(|\)|\/|\-| )+/g,'');
 
	tam = s.length + 1;
 
	if ( tecla != 9 && tecla != 8 ) {
		switch (tipo)
		{
		case 'CPF' :
			if (tam > 3 && tam < 7)
				campo.value = s.substr(0,3) + '.' + s.substr(3, tam);
			if (tam >= 7 && tam < 10)
				campo.value = s.substr(0,3) + '.' + s.substr(3,3) + '.' + s.substr(6,tam-6);
			if (tam >= 10 && tam < 12)
				campo.value = s.substr(0,3) + '.' + s.substr(3,3) + '.' + s.substr(6,3) + '-' + s.substr(9,tam-9);
		break;
 
		case 'CNPJ' :
 
			if (tam > 2 && tam < 6)
				campo.value = s.substr(0,2) + '.' + s.substr(2, tam);
			if (tam >= 6 && tam < 9)
				campo.value = s.substr(0,2) + '.' + s.substr(2,3) + '.' + s.substr(5,tam-5);
			if (tam >= 9 && tam < 13)
				campo.value = s.substr(0,2) + '.' + s.substr(2,3) + '.' + s.substr(5,3) + '/' + s.substr(8,tam-8);
			if (tam >= 13 && tam < 15)
				campo.value = s.substr(0,2) + '.' + s.substr(2,3) + '.' + s.substr(5,3) + '/' + s.substr(8,4)+ '-' + s.substr(12,tam-12);
		break;
 
		case 'TEL' :
			if (tam > 2 && tam < 4)
				campo.value = '(' + s.substr(0,2) + ') ' + s.substr(2,tam);
			if (tam >= 8 && tam < 11)
				campo.value = '(' + s.substr(0,2) + ') ' + s.substr(2,5) + '-' + s.substr(7,tam-6);
		break;
 
		case 'DATA' :
			if (tam > 2 && tam < 4)
				campo.value = s.substr(0,2) + '/' + s.substr(2, tam);
			if (tam > 4 && tam < 11)
				campo.value = s.substr(0,2) + '/' + s.substr(2,2) + '/' + s.substr(4,tam-4);
		break;
		
		case 'CEP' :
			if (tam > 5 && tam < 7)
				campo.value = s.substr(0,5) + '-' + s.substr(5, tam);
		break;
		}
	}
}

//--->Função para verificar se o valor digitado é número...<---
function digitos(event){
	if (window.event) {
		// IE
		key = event.keyCode;
	} else if ( event.which ) {
		// netscape
		key = event.which;
	}
	if ( key != 8 || key != 13 || key < 48 || key > 57 )
		return ( ( ( key > 47 ) && ( key < 58 ) ) || ( key == 8 ) || ( key == 13 ) );
	return true;
}
</script>

<div class="clearfix"></div>
<script src="http://www.codermen.com/js/jquery.js"></script>
<script type="text/javascript">
    $('#country').change(function(){
    var countryID = $(this).val();
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-state-list')}}?country_id="+countryID,
           success:function(res){
            if(res){
                $("#state").empty();
                $("#state").append('<option>Selecionar</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }
   });
    $('#state').on('change',function(){
    var stateID = $(this).val();
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('get-city-list')}}?state_id="+stateID,
           success:function(res){
            if(res){
                $("#city").empty();
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }

   });
</script>

@include('footer')