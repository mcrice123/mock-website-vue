@extends('layouts.page')

@section("content")
<div id="coupon-input">

    <h3 class="title is-5">Enter Coupon Code</h3>

    <!-- <input type="text" v-model="coupon"> -->
    <!-- <input type="text" :value="coupon" @input="coupon = $event.target.value"> --> 
    
    <coupon v-model="coupon"></coupon>

</div>

@endsection
