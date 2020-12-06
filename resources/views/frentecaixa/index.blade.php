@include('header')

@include('paineis')


<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="row m-0">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Frente de Caixa</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="{{route('home')}}">Inicio</a></li>
							<li class="active">Frente de Caixa</li>
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
						<strong class="card-title">Frente de Caixa</strong>
                    </div>
                    <div class="card-body">
					<div class="row">
					<div class="col-md-4">
					<h1><strong> Cliente:</strong> </h1>
					<select id="" name="fornecedor_id" class="form-control" >
                                    <option value="" selected disabled>Selecionar</option>
                							  @foreach($fornecedor as $key => $fornecedores)
                  								<option  value="{{$key}}"> {{$fornecedores}}</option>
                  							  @endforeach
                  						</select>
					</div>
					<div class="col-md-8">
            <h1><strong>Data: {{$datetime}}</strong></h1>
			<select id="produto" name="prd" class="form-control" >
                                    <option value="" selected disabled>Selecionar</option>
                  								<option  value="teste">teste</option>
                  						</select>
					</div>	
					</div>
					<br>
					<br>
					<a class="btn btn-success"  data-toggle="tooltip" title="Adicionar Clientes" href="{{ route('frentecaixa.addprd') }}">Adicionar Produto</a>
					<div class="row">
					<div class="col-md-12">
					<table id="tabela" class="table" >
							<thead>
								<tr>
								
									<th>Nome</th>
									<th>Quantidade</th>
									<th>Total</th>
								</tr>
							</thead>
							</table>
					</div>
					</div>
		</div>
	</div>

	</div>
</div><!-- .animated -->
</div><!-- .content -->
<div class="clearfix"></div>