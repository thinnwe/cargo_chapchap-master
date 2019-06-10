<div class="panel panel-default">
    <div class="panel-heading">Cart</div>
    <div class="panel-body">
    <table class="table table-condensed">
      <thead>
        <tr>
          <th style="width:50%">Product</th>
          <th style="width:20%">Quantity</th>
          <th style="width:30%">Prices</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cart->details() as $order)
        <tr>
          <td data-th="Produk">{{ $order['detail']['name'] }}</td>
          <td data-th="Jumlah" class="text-center">{{ $order['quantity'] }}</td>
          <td data-th="Harga" class="text-right">{{ number_format($order['detail']['price']) }}</td>
        </tr>
        <tr>
          <td data-th="Subtotal">Subtotal</td>
          <td data-th="Subtotal" class="text-right" colspan="2">Kshs{{ number_format($order['subtotal']) }}</td>
        </tr>

        @endforeach
      </tbody>
      <tfoot>
        @if(request()->is('checkout/payment'))
          
        @else
        <tr>
          <td><strong>Total</strong></td>
          <td class="text-right" colspan="2"><strong>Kshs{{ number_format($cart->totalPrice()) }}</strong></td>
        </tr>
        @endif
      </tfoot>
    </table>
    </div>
</div>
