@extends('layouts.app')
@section('content')
<section id="right-side" class="hide-right">
   <!-- START - Content -->
   <div class="content">
      <h2 class="text-title">It's all about Data Science</h2>
      <br><br>
      <div class="row aboutus">
         <!-- START - Box info -->
         <div class="col-xs-12 col-sm-12 col-lg-6 box-info">
            <div class="box-info-light equalizer text-center">
               <img class="iconvascar" src="assets/img/svg/ilus1.svg"> 
               <h3>Title number one</h3>
               <p>Curabitur lobortis id lorem id bibendum. Ut id consectetur magna. Quisque volutpat augue enim, pulvinar lobortis nibh lacinia at. Vestibulum nec erat ut mi sollicitudin porttitor id sit amet risus.</p>
            </div>
         </div>
         <!-- END - Box info -->
         <!-- START - Box info -->
         <div class="col-xs-12 col-sm-12 col-lg-6 box-info">
            <div class="box-info-light equalizer text-center">
               <img class="iconvascar" src="assets/img/svg/ilus2.svg">
               <h3>Title number two</h3>
               <p>Curabitur lobortis id lorem id bibendum. Ut id consectetur magna. Quisque volutpat augue enim, pulvinar lobortis nibh lacinia at. Vestibulum nec erat ut mi sollicitudin porttitor id sit amet risus.</p>
            </div>
         </div>
         <!-- END - Box info -->
      </div>
      <span class="separator"></span>
      <h2 class="text-title">Customer's form</h2>
      <p>We are here to help you make your ideas a reality.
      </p>
      <!-- START - Contact Form -->
      <div id="contact_section"></div>
      {!! Form::open(['route' => '/api/store', 'id' => 'contact-form', 'method'=>'POST']) !!}
      {{ csrf_field() }}
      <div class="row">
         <!-- Full name -->
         <div class="col-xs-12 col-sm-6 col-lg-6">
            <div class="form-group">
               {{ Form::text('Name', null, array('class' => 'form-control', 'placeholder' => 'Name', 'required','onblur'=>"this.placeholder = 'Name'",'onfocus'=>"this.placeholder = '' ")) }}
            </div>
         </div>
         <!-- E-mail -->
         <div class="col-xs-12 col-sm-6 col-lg-6">
            <div class="form-group">
               {{ Form::email('Email', null, array('class' => 'form-control', 'placeholder' => 'Email', 'required','onblur'=>"this.placeholder = 'Email'",'onfocus'=>"this.placeholder = '' ")) }}
            </div>
         </div>
         <!-- Subject -->
         <div class="col-xs-12 col-sm-12 col-lg-12">
            <div class="form-group">
               {{ Form::text('Subject', null, array('class' => 'form-control', 'placeholder' => 'Subject', 'required','onblur'=>"this.placeholder = 'Subject'",'onfocus'=>"this.placeholder = '' ")) }}
            </div>
         </div>
         <!-- Message -->
         <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
            <div class="form-group">
               {{ Form::textarea('Message', null, array('class' => 'form-control', 'rows' => 2, 'cols' => 40, 'placeholder' => 'Message', 'required','onblur'=>"this.placeholder = 'Message'",'onfocus'=>"this.placeholder = '' ")) }}
            </div>
         </div>
      </div>
      <!-- Button submit -->
      <button type="submit" id="" class="action-btn">Send</button>
      {!! Form::close() !!}
      <!-- END - Contact Form -->
   </div>
   <!-- END - Content -->
</section>
@endsection