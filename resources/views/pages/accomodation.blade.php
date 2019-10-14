@extends('layouts.master')
@section('content')
<div class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
                    <li><a href="/">Home</a></li>
                    <li class="page">Accomodation</li>
                </ol>
                <h1 class="page-title wow fadeInRight" data-wow-delay="300ms"> Accomodation</h1>
            </div>
        </div>
    </div>


    <section id="content" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="blog-post single-gallery">
                    	<div class="post-content">
                    		<blockquote style="margin-top: 0 0">
                                <i class="fa fa-quote-right"></i>
                                <span class="quote-text">
								There are specially reduced hotel accommodation rates for delegates of the NMA 2nd National Health Summit, Abuja 2019. <br> The underlisted Hotels are the participating hotels.
								</span>
                            </blockquote>
                            
                        </div>

                        <div class="feature-inner">
                            <a class="lightbox" href="img/hotels.jpg"><img src="img/hotels.jpg" alt=""></a>
                        </div>

                        <div class="post-content">
                            <p>Each hotel has 2 allocated numbers one for enquiries and the other for complaints.</p>
                            <ul>
		                        <li style="color: black; list-style: circle; text-align: left;margin-left:10px">The Hotel contact number.</li>
		                        <li style="color: black; list-style: circle; text-align: left;margin-left:10px">The Accommodation Committee member number.</li>
		                    </ul>
                            <p>Delegates are also advised to call the Hotel contact number for their chosen hotels before payments are made for inquiry about availability and bookings.</p>
                            <p>Receipt of payment made by the delegates for hotel reservations should be sent to the Hotel contact number and the Accommodation Committee member number allocated to the hotel booked. <br>This is to ensure proper reservations, continuous follow up and clear documentation in case of any ambiguity.</p>

                            <p>For any complaints, please check the accommodation committee numbers allocated to your hotel and channel your complaints to them. </p>
                            
                            <p>The Summit is scheduled to host a large number of delegates, we strongly recommend early hotel reservations!</p>

                            <div class="share">
                                <div class="">
                                    <span>Share this Website</span>
                                </div>
                                {!! $share !!}
                            </div>
                        </div>

                    </div>
                </div>

                <aside id="sidebar" class="col-md-4 right-sidebar">
                    <div class="widget tag">
                        <h5 class="widget-title">For Complaints only <br><br>Accommodation Committee Numbers</h5> 
                        <h5 class="widget-title">CALL: HOTEL 1 - 5</h5>
                        <a href="tel:+2347069702460"><i class="fa fa-phone"></i> <strong>Dr Adejo: </strong> +2347069702460</a>
                        <a href="tel:+2348067202795"><i class="fa fa-phone"></i> <strong>Dr Obayi: </strong> 2348067202795</a>
                        <a href="tel:+2348064937008"><i class="fa fa-phone"></i> <strong>Dr Abah: </strong> +2348064937008</a>
                        <a href="tel:+2348177034201"><i class="fa fa-phone"></i> <strong>Dr Adebiyi: </strong> +2348177034201</a>
                        <a href="tel:+2348099876055"><i class="fa fa-phone"></i> <strong>Dr Etinosa: </strong> +2348099876055</a>

						<h5 class="widget-title">CALL: HOTEL 6 - 10</h5>
                        <a href="tel:+2348051818629"><i class="fa fa-phone"></i> <strong>Mr Solomon: </strong> +2348051818629</a>
						<a href="tel:+2348036774921"><i class="fa fa-phone"></i> <strong>Dr Stella: </strong> +2348036774921</a>
						<a href="tel:+2348035722835"><i class="fa fa-phone"></i> <strong>Dr Rahman: </strong> +2348035722835</a>
						<a href="tel:+2348039497652"><i class="fa fa-phone"></i> <strong>Dr Omeke: </strong> +2348039497652</a>
						<a href="tel:+2348037576181"><i class="fa fa-phone"></i> <strong>Dr Lucy: </strong> +2348037576181</a>

						<h5 class="widget-title">CALL: HOTEL 11 - 15</h5>
                        <a href="tel:+2348051818629"><i class="fa fa-phone"></i> <strong>Mr Solomon: </strong> +2348051818629</a>
						<a href="tel:+2348034186036"><i class="fa fa-phone"></i> <strong>Dr Egort: </strong> +2348034186036</a>
						<a href="tel:+2347068900936"><i class="fa fa-phone"></i> <strong>Dr Ayo: </strong> +2347068900936</a>
						<a href="tel:+2349074591619"><i class="fa fa-phone"></i> <strong>Dr Stephanie: </strong> +2349074591619</a>
						<a href="tel:+2348037784192"><i class="fa fa-phone"></i> <strong>Dr Henry: </strong> +2348037784192</a>

						<h5 class="widget-title">CALL: HOTEL 16 and Above</h5>
                        <a href="tel:+2348065911130"><i class="fa fa-phone"></i> <strong>Dr Godwin: </strong> +2348065911130</a>
						<a href="tel:+2348051818629"><i class="fa fa-phone"></i> <strong>Mr Solomon: </strong> +2348051818629</a>
						<a href="tel:+2348037582754"><i class="fa fa-phone"></i> <strong>Dr Nnadi: </strong> +2348037582754</a>
						<a href="tel:+2348052001171"><i class="fa fa-phone"></i> <strong>Dr Amodu: </strong> +2348052001171</a>
						<a href="tel:+2348036678249"><i class="fa fa-phone"></i> <strong>Dr Eziechila: </strong> +2348036678249</a>
						<a href="tel:+2348030560799"><i class="fa fa-phone"></i> <strong>Dr Usman: </strong> +2348030560799</a>
						<a href="tel:+2348026136394"><i class="fa fa-phone"></i> <strong>Dr Ebuta: </strong> +2348026136394</a>                        
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection