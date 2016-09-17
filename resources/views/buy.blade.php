@extends('layout.default')

@section('content')
 {{form::open()}}
     <div class="form-row">
         <label>
             <span>Card No:</span>
             <input type="text" data-stripe="number">
         </label>
     </div>
<div class="form-row">
         <label>
             <span>CVV No:</span>
             <input type="password" data-stripe="cvv">
         </label>
     </div>
<div class="form-row">
         <label>
             <span>Expiration date:</span>
            {{form:selectMonth(null)}}
         </label>
     </div>
 {{form:close()}}
@endsection