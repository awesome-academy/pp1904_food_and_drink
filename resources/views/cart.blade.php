@extends('master')
@section('title', 'Giỏ hàng')
@section('content')
<main id="main" class="">
   <div id="content" class="content-area page-wrapper" role="main">
      <div class="row row-main">
         <div class="large-12 col">
            <div class="col-inner">
               <header class="entry-header">
                  <h1 class="entry-title mb uppercase">Giỏ hàng</h1>
               </header>
               <!-- .entry-header -->
               <div class="woocommerce">
                  <div class="text-center pt pb">
                     <div class="woocommerce-notices-wrapper"></div>
                     <p class="cart-empty">Chưa có sản phẩm nào trong giỏ hàng.</p>
                  </div>
               </div>
            </div><!-- .col-inner -->
         </div><!-- .large-12 -->
      </div><!-- .row -->
   </div>
</main><!-- #main -->
@endsection