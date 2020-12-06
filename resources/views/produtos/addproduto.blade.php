
@include('header')

@include('paineis')

<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="row m-0">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Cadastrar Produtos</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="{{route('home')}}">Inicio</a></li>
                            <li><a href="{{route('produto.index')}}">Produtos</a></li>
							<li class="active">Cadastro de Produtos</li>
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
						<strong class="card-title">Adicionar Produtos</strong>
					</div>
					<div class="card-body">
           
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

                                        <form action="{{route('produto.salvar')}}" method="POST">
										@csrf
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text">Nome:</label>
                                        <input type="text" class="form-control" name="nome" value="{{old('nome')}}">
                                    </div>
									</div>
                                    </div>
                            <div class="row">
							<div class="col-md-6">
							<div class="form-group">
							<label for="text">Tipo:</label>
									<select id="tipo" name="tipo" class="form-control" >
                						<option value="" selected disabled>Selecionar</option>
                  								<option>Metro</option>
                                                <option>KG</option>
                                                <option>LT</option>
                                                <option>UN</option>   
                  					</select>
            				</div>
							</div>
                            </div>
                            <div class="row">
							<div class="col-md-6">
							<div class="form-group">
							<label for="text">Fornecedor:</label>
									<select id="" name="fornecedor_id" class="form-control" >
                                    <option value="" selected disabled>Selecionar</option>
                							  @foreach($fornecedor as $key => $fornecedores)
                  								<option  value="{{$key}}"> {{$fornecedores}}</option>
                  							  @endforeach
                  						</select>
            				</div>
							</div>
                            </div>
                            <div class="row">
									<div class="col-md-3">
									<div class="form-group">
                                        <label for="text">Valor Compra(R$):</label>
                                        <input type="text" id="data" class="form-control" name="valor_compra" value="{{old('valor_compra')}}" onKeyPress="return(moeda(this,'.',',',event))">
                                    </div>
									</div>
                                    <div class="col-md-3">
									<div class="form-group">
                                        <label for="text">Valor Venda(R$):</label>
                                        <input type="text" id="data" class="form-control" name="valor_venda" value="{{old('valor_venda')}}" onKeyPress="return(moeda(this,'.',',',event))">
                                    </div>
									</div>
									</div>
                                    <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text">Estoque Minimo:</label>
                                        <input type="number" class="form-control" name="estoque_min" value="{{old('estoque_min')}}">
                                    </div>
									</div>
                                    </div>
                                    <div class="row">
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text">Estoque:</label>
                                        <input type="number" class="form-control" name="estoque" value="{{old('estoque')}}">
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


<script language="javascript">   
function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}
 </script>  

@include('footer')