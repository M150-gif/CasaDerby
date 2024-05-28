@extends('store.dashbord.layouts.template')
@section('content')
<h1 class="app-page-title">Dashboard</h1>
<div class="row mt-2 mb-2 p-2">
</div>

<div class="row g-4 mb-4">
     <div class="col-6 col-lg-3">
          <div class="app-card app-card-stat shadow-sm h-100">
               <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Clients</h4>
                    <div class="stats-figure">{{ $clientCount }}</div>
               </div><!--//app-card-body-->
               <a class="app-card-link-mask" href="{{ route('clients.index') }}"></a>
          </div><!--//app-card-->
     </div><!--//col-->
     
     <div class="col-6 col-lg-3">
          <div class="app-card app-card-stat shadow-sm h-100">
               <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Products</h4>
                    <div class="stats-figure">{{ $productsCount }}</div>
               </div><!--//app-card-body-->
               <a class="app-card-link-mask" href="{{ route('products.index') }}"></a>
          </div><!--//app-card-->
     </div><!--//col-->
     
     <div class="col-6 col-lg-3">
          <div class="app-card app-card-stat shadow-sm h-100">
               <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total commandes</h4>
                    <div class="stats-figure">{{ $commandeCount }}</div>
               </div><!--//app-card-body-->
               <a class="app-card-link-mask" href="{{ route('commandes.index') }}"></a>
          </div><!--//app-card-->
     </div><!--//col-->
     
     <div class="col-6 col-lg-3">
          <div class="app-card app-card-stat shadow-sm h-100">
               <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Retard de paiement</h4>
                    <div class="stats-figure">0</div>
               </div><!--//app-card-body-->
               <a class="app-card-link-mask" href="#"></a>
          </div><!--//app-card-->
     </div><!--//col-->
</div><!--//row-->

@endsection
