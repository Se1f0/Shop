<div class="wrapper box-layout">
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact area start -->
    <div class="contact-area pb-34 pb-md-18 pb-sm-0">
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-message">
                        <h2>tell us your project</h2>
                        <form id="contact-form" class="contact-form" wire:submit.prevent="sendMessage">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="first_name" placeholder="Name *" type="text" wire:model="name" >
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="phone" placeholder="Phone *" type="text" wire:model="phone">
                                    @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="email_address" placeholder="Email *" type="text" wire:model="email">
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="contact_subject" placeholder="Subject *" type="text" wire:model="subject">
                                    @error('subject') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            <div class="col-12">
                                    <div class="contact2-textarea text-center">
                                        <textarea placeholder="Message *" name="message"  class="form-control2" wire:model="message"></textarea>
                                        @error('message') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="contact-btn">
                                        <button class="sqr-btn" type="submit">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info mt-md-28 mt-sm-28">
                        <h2>contact us</h2>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                            <li><i class="fa fa-phone"></i> info@yourdomain.com</li>
                            <li><i class="fa fa-envelope-o"></i> +88013245657</li>
                        </ul>
                        <div class="working-time">
                            <h3>Working hours</h3>
                            <p><span>Monday – Saturday:</span>08AM – 22PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <!-- map area start -->
    <div class="map-area-wrapper">
        <div class="container">
                <div id="map_content" data-lat="23.763491" data-lng="90.431167" data-zoom="8" data-maptitle="HasTech" data-mapaddress="Floor# 4, House# 5, Block# C     </br> Banasree Main Rd, Dhaka">
                </div>
        </div>
    </div>
    <!-- map area end -->
</div>
