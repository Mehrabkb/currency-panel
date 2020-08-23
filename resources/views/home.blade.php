@extends('master')
@section('title')
    home
@endsection
@section('content')

    <!-- End Navbar -->
    <div class="content">
        <div class="row m-0 p-0">
            <div class="col-6 m-0 p-0">
                <h4>Est. Total Asset</h4>
                <h4>4,398,134 USD</h4>
                <h5>= 0.345 BTC</h5>
            </div>
            <div class="col-6 m-0 p-0">
                <canvas id="myChart"></canvas>
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Current Exchenge rate:USD/BTC=97.34</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        @foreach ($property as $p)
                        <tr>
                          <td class="d-flex">
                          <img style="width: 50px;" src="{{ asset($p->image) }}" alt="">
                          <span class="currency-name">{{ $p->name }}</span>
                          </td>
                          <td>
                            {{ $p->amount }}
                          </td>
                          <td>
                            <a href="" class="btn btn-success">Deposit</a>
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <script>
      var propertyurl = '{{ route('get.property')}}';
    </script>
    <script src="assets/demo/demo.js" defer></script>
    <script type="text/javascript" src="js/myjquery.js" defer></script>


@endsection
