@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('slider')
	@include('partials/default-slider')
@endsection()

@section('content')
    <div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@include('partials/breadcrumb')
				</div>
			</div>

			<div class="row">

				@include('partials/left-sidebar')

				<!-- begin:-content -->
				<div class="col-md-9 col-sm-9 single-item">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							{!! $page->body !!}
						</div>
					</div>
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h2>Wil u snel deskundig advies over gepolierde betonvloer in uw tuinhuis?</h2>
                            <a href="/contact" class="btn btn-black">Maak een afspraak</a>
                        </div>
                    </div>
				</div>
				<!-- end:about-content -->
			</div>
		</div>
	</div>
@stop
