@include('header')

@include('paineis')

<form class="form-horizontal" method="POST" action="{{ route('frentecaixa.addprd') }}">
@csrf
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
									@foreach($produtos as $key => $prd)
                  								<option  value="{{$key}}">{{$prd}}</option>
												  @endforeach
                  						</select>
					</div>
					<label for="text"><strong>Qtd:</strong></label>
                                        <input type="number" class="form-control"  for="inputError" name="qtd" value="">	
					</div>
					<br>
					<br>
			
					<button class="btn btn-primary" type="submit">Save</button>
					</form>
					<div class="row">
					<div class="col-md-12">
					<table id="tabela" class="table" >
							<thead>
								<tr>
									<th>ID</th>
									<th>Nome</th>
									<th>Valor</th>
									<th>Estoque</th>
								</tr>
							</thead>
							<tbody>
							@foreach(Cart::getContent() as $pedido)
							<tr>
								<td>{{$pedido->id}}</td>
								<td>{{$pedido->name}}</td>
								<td>{{$pedido->price }}</td>
								<td>{{$pedido->quantity}}</td>
							</tr>
							@endforeach
							</tbody>
							</table>
					</div>
					</div>
		</div>
	</div>

	</div>
</div><!-- .animated -->
</div><!-- .content -->
<div class="clearfix"></div>