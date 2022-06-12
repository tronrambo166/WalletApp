@extends('content-layout.layout')
@section('thecontents') 


<h3  class="  mt-3 h3 text-success bg-dark text-center font-weight-bold">All Orders  </h3>
<h3 class="text-center font-weight-bold bg-light"><b class="text-success" > {{ Session:: get('success') }} </b> </h3>



@foreach($orders as $order)
<table class="display table table-bordered mb-4 ml-3" id="">
	<thead>
		<tr class="bg-danger">
			<th>Customer Name </th>
			<th>Email </th>
			<th>Address </th>

			<th>Mapinfo table(ids)</th>
			<th>Frames table(ids) </th>
			
			<th>Total</th>
			
			
			
			<th class="text-center">Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	<tr>

			<td> {{ $order->firstname }} {{ $order->lastname }}</td>
			<td> {{ $order->email }} </td>

            <td> {{ $order->address }} </td>


			
           <td>
           	@php $map_ids=$order->map_ids; $map_ids=explode('-', $map_ids); @endphp
            @foreach($map_ids as $name) @if($name!='')
			 Map Id - {{ $name }}<br> @endif @endforeach
			 </td>


			 <td>
           	@php $fm_ids=$order->fm_ids; $fm_ids=explode('-', $fm_ids); @endphp
            @foreach($fm_ids as $fm) @if($fm!='')
			 Frame Id - {{ $fm }}<br> @endif @endforeach
			 </td>

			
			<td> ${{$order->price }}</td>
		
			<td class=" text-center">
		<a href="{{url('cancel_order/'.$order->id)}}" class=" btn btn-danger">
			Cancel </a>
		</td>

		</tr>
		
		
		
	</tbody>
	
	
</table>  @endforeach  



@endsection



