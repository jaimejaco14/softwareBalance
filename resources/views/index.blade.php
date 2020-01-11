@extends('template')

@section('titulo')
	Inicio | Software Balance
@endsection

@section('body')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card blue darken-3">
					<div class="card-content white-text">
						<span class="card-title"><h5>SALDO ANTERIOR</h5></span>
						<p>	$123.456.789</h6></p>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l6">
				<div class="card green darken-3">
					<div class="card-content white-text">
						<span class="card-title">INGRESOS DEL MES</span>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l6">
				<div class="card red darken-3">
					<div class="card-content white-text">
						<span class="card-title">EGRESOS DEL MES</span>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection