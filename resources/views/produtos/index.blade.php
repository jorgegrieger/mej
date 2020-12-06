@include('header')

@include('paineis')


<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="row m-0">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Produtos</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="{{route('home')}}">Inicio</a></li>
							<li class="active">Produtos</li>
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
						<strong class="card-title">Estoque de produtos</strong>
					</div>
					<br>
					<div class="col-sm-6">
					<form action="{{route('produto.buscar')}}" method="get">
				
					<div class="input-group">

											<input type="text" name="criterio" placeholder="Digite algo.."  
											data-toggle="tooltip" data-placement="top" title="Digite para fazer a busca" class="form-control">
											<div class="input-group-btn"><button class="btn btn-primary">Procurar</button>
											</div>
										</form>
										</div>
							
										</div>
					<div class="card-body">
					<a class="btn btn-success" href="{{ route('produto.addproduto') }}">Adicionar Produto</a>

					<br>
					<br>
					@if(session('mensagem'))

					<div class="sufee-alert alert with-close alert-success alert-dismissible fade show col-md-6">
                                        {{session('mensagem')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
									</div>

					
					@elseif(session('erro'))

					<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show col-md-6">
                                        {{session('erro')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
									</div>

					@endif
						
					<div class="card-body">
						<table id="tabela" class="table table-striped" >
							<thead>
								<tr>
									<th>#</th>
									<th>Nome</th>
									<th>Tipo</th>
									<th>Valor Compra</th>
									<th>Valor Venda</th>
									<th>Lucro</th>
									<th>Estoque</th>
									<th>Quantidade Minima</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($produtos as $produto)
								<tr >
									<th scope="row">{{ $produto->id }}</th>
									<td>{{ $produto->nome }}</td>
									<td>{{ $produto->tipo }}</td>
									<td>{{'R$ '.number_format($produto->valor_compra, 2, ',', '.')}}</td>
									<td>{{'R$ '.number_format($produto->valor_venda, 2, ',', '.')}}</td>
									<td>{{'R$'.number_format($produto->valor_venda - $produto->valor_compra, 2,',','.')}}
									 @if($produto->estoque < $produto->estoque_min && $produto->estoque != 0)
									 <td style="background-color: #d1383d6b">{{ $produto->estoque }}</td>
									 @elseif($produto->estoque == 0)
									 <td style="background-color: #dc3545">{{ $produto->estoque }}</td>
									 @else
									 <td>{{ $produto->estoque }}</td>
									 @endif
									<td>{{ $produto->estoque_min }}</td>
									<td>
                                    <a class="btn btn-custom" href="#">Editar</a>
									<a class="btn btn-danger"  href="javascript: (confirm('Deseja deletar o produto : {{$produto->nome}}?') ? window.location.href='{{route('produto.deletar',$produto->id)}}' : false )">Deletar</a>
                                </td>	
								</tr>                            
								@endforeach
							</tbody>
						</tbody>
					</table>
					<p style="font-size: 12px"><span style="background-color: #d1383d6b"><font color="white">Produtos</span></font> que estão abaixo do estoque minímo.</P>
					<p style="font-size: 12px"><span style="background-color: #dc3545"><font color="white">Produtos</span></font> que estão fora de estoque.</P>
				</div>
			</div>
</div>
</div>


	</div>
</div><!-- .animated -->
</div><!-- .content -->


<div class="clearfix"></div>

@include('footer')