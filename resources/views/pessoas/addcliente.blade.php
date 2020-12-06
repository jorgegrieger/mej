@include('header')

@include('paineis')


<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="row m-0">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Cadastrar Clientes</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="{{route('home')}}">Inicio</a></li>
                            <li><a href="{{route('pessoas.cliente')}}">Clientes</a></li>
							<li class="active">Cadastro de Clientes</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Adicionar Clientes</strong>
					</div>
					<div class="card-body">
                    <form action="{{route('pessoas.salvar')}}" method="POST">
										@csrf
										<!-- Tratamento de Errors -->
										@if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                       
                                        @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                       
                                        </div>
                                        @endif
										<!-- Fim Tratamento -->

                            <div class="row">
                            <div class="col-md-8">
                                    <div class="form-group has-error has-feedback">
                                        <label for="text"><strong>Nome:</strong></label>
                                        <input type="text" class="form-control"  for="inputError" name="nome" value="{{old('nome')}}">
                                    </div>
                                    </div>
									</div>
                                    <div class="row">
									<div class="col-md-8">
									<div class="form-group">
                                        <label for="text"><strong>Razão Social:</strong></label>
                                        <input type="text" class="form-control" name="razao_social" value="{{old('razao_social')}}">

                                    </div>
									</div>
									</div>
                                    <div class ="row">
									<div class="col-md-4">
									<div class="form-group">
                                        <label for="text">CPF:</label>
                                        <input type="text" class="form-control" name="cpf" id="cpf" maxlength="14" value="{{old('cpf')}}"
										onKeyPress="return digitos(event, this);" onKeyUp="Mascara('CPF',this,event); ">
                                    </div>
									</div>
									<div class="col-md-4">
									<div class="form-group">
                                        <label for="text">CNPJ:</label>
                                        <input type="text" class="form-control" name="cnpj" maxlength="18" value="{{old('cnpj')}}"
										onKeyPress="return digitos(event, this);" onKeyUp="Mascara('CNPJ',this,event);">
                                    </div>
									</div>
									</div>
                                    <div class="row">
									<div class="col-md-4">
									<div class="form-group">
                                        <label for="text">Data de Nascimento:</label>
                                        <input type="text" class="form-control" name="data_nascimento" maxlength="10" value="{{old('data_nascimento')}}"
										onKeyPress="return digitos(event, this);" onKeyUp="Mascara('DATA',this,event);">
                                    </div>
									</div>
                                    </div>
									<div class=row>
									<div class="col-md-4">
									<div class="form-group">
                                        <label for="text">Inscrição Municipal:</label>
                                        <input type="text" class="form-control" name="inscricao_municipal" value="{{old('inscricao_municipal')}}">
                                    </div>
									</div>
									<div class="col-md-4">
									<div class="form-group">
                                        <label for="text">Inscrição Estadual:</label>
                                        <input type="text" class="form-control" name="inscricao_estadual" value="{{old('inscricao_estadual')}}">
                                    </div>
									</div>
									</div>
							<div class="row">
							<div class="col-md-2">
							<div class="form-group">
							<label for="text"><strong>Pais:</strong></label>
									<select id="country" name="pais_id" class="form-control" >
                						<option value="" selected disabled>Selecionar</option>
                							  @foreach($countries as $key => $country)
                  								<option value="{{$key}}"> {{$country}}</option>
                  							  @endforeach
                  						</select>
            				</div>
							</div>
							<div class="col-md-2">
            				<div class="form-group">
               					 <label for="title"><strong>Estado:</strong></label>
                					<select name="estado_id" id="state" class="form-control" data-dropup-auto="true">
               					    </select>
           					 </div>
							 </div>
                             <br>
							 <div class="col-md-4">
           				    <div class="form-group">
              					  <label for="title"><strong>Cidade:</strong></label>
               						 <select name="cidade_id" id="city" class="form-control">
              						 </select>
							</div>
							</div>
							</div>
                            <div class="row">
									<div class="col-md-4">
									<div class="form-group">
                                        <label for="text">Rua:</label>
                                        <input type="text" class="form-control" name="rua">
                                    </div>
									</div>
									<div class="col-md-4">
									<div class="form-group">
                                        <label for="text">Bairro:</label>
                                        <input type="text" class="form-control" name="bairro">
                                    </div>
									</div>
                                    </div>
                                    <div class="row">   
									<div class="col-md-2">
									<div class="form-group">
                                        <label for="text">Numero:</label>
                                        <input type="text" class="form-control" name="numero">
                                    </div>
									</div>
									<div class="col-md-4">
									<div class="form-group">
                                        <label for="text">Email:</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
									</div>
                                    </div>
                                    <div class="row">
									<div class="col-md-4">
									<div class="form-group">
                                        <label for="text">Telefone (Fixo):</label>
                                        <input type="text" class="form-control" name="telefone" maxlength="14"
										onKeyPress="return digitos(event, this);" onKeyUp="Mascara('TEL',this,event);">
                                    </div>
									</div>
									<div class="col-md-4">
									<div class="form-group">
                                        <label for="text">Celular:</label>
                                        <input type="text" class="form-control" name="celular"
										maxlength="15"
										onKeyPress="return digitos(event, this);" onKeyUp="Mascara('CEL',this,event);">
                                    </div>
									</div>
									</div>
									
                                    <button class="btn btn-info">Adicionar</button>
                                    </div>
                                    </form>

					</div>
				</div>

    
</div><!-- .animated -->
</div><!-- .content -->
<div class="clearfix"></div>

<script>
$('.form-control').selectpicker({
    dropupAuto: false
});
</script>

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
 
		case 'CEL' :
			if (tam > 2 && tam < 4)
				campo.value = '(' + s.substr(0,2) + ') ' + s.substr(2,tam);
			if (tam >= 8 && tam < 11)
				campo.value = '(' + s.substr(0,2) + ') ' + s.substr(2,5) + '-' + s.substr(7,tam-6);
		break;
        
        
		case 'TEL' :
			if (tam > 2 && tam < 4)
				campo.value = '(' + s.substr(0,2) + ') ' + s.substr(2,tam);
			if (tam >= 7 && tam < 11)
				campo.value = '(' + s.substr(0,2) + ') ' + s.substr(2,4) + '-' + s.substr(6,tam-6);
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