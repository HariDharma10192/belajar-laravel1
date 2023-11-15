@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body pb-0 d-flex justify-content-between">
                        <div>
                            <h1 class="mb-1">Wellcome Back, {{ auth()->user()->name}}.</h1>
                            {{-- <p>Total Earnings of the Month</p>
                            <h3 class="m-0">$ 12,555</h3> --}}
                            
                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection