@extends('layouts.master')
@section('content')
	<div class="container" id="app">
		<form method="POST" action="/equipments/{{ $equipment->name }}/update">
		@csrf
		<span class="display-5" >Edit Item</span>
		  <div class="form-group">
		    <br>
		    <input type="text" class="form-control" name='name' value='{{ $equipment->name }}'>
		    <br>
		    <select class="custom-select custom-select-lg mb-3" name ="category"> 
		    	@foreach ($equipments_category as $equipments_category)
		    	<option class="option"  value='{{ $equipments_category->name }} '>
		    		{{ $equipments_category->name }}</option>
		    	@endforeach
		    </select>
		    <input type="text" class="form-control" name='quantity' v-model='equipment.quantity' value='{{$equipment->serial_no}}' style="float:left;width:20%;margin-right: 2%;">
		    <br>
		  </div>
		  <br><br>
		  <button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
@endsection
@section('scripts')
	<script type="text/javascript">
		var equipment = @json($equipment);
	</script>
	<script type="text/javascript">
		var vm = new Vue({
			el:"#app",
			data:{
				equipment: equipment
			},
			mounted() {
				console.log(this.equipment)
			},

		})
</script>
@endsection
