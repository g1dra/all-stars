@extends('layouts.master')
@section('team-pages-filter')
    <nav class="content-filter">
        <div class="container">
            <a href="#" class="content-filter__toggle"></a>
            <ul class="content-filter__list">
                <li class="content-filter__item "><a href="team-overview.html" class="content-filter__link"><small>The Team</small>Overview</a></li>
                <li class="content-filter__item content-filter__item--active"><a href="team-roster-1.html" class="content-filter__link"><small>The Team</small>Roster</a></li>
                <li class="content-filter__item "><a href="team-standings.html" class="content-filter__link"><small>The Team</small>Standings</a></li>
                <li class="content-filter__item "><a href="team-last-results.html" class="content-filter__link"><small>The Team</small>Latest Results</a></li>
                <li class="content-filter__item "><a href="team-schedule.html" class="content-filter__link"><small>The Team</small>Schedule</a></li>
                <li class="content-filter__item "><a href="team-gallery.html" class="content-filter__link"><small>The Team</small>Gallery</a></li>
            </ul>
        </div>
    </nav>
@endsection
@section('content')
    <div class="card">
        <header class="card__header">
            <h4>Contact Form</h4>
        </header>
        <div class="card__content">

            <div class="row">
                <div class="col-md-4">
                    <h5>Questions? Send us a Message!</h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, remeriam, eaque ipsa quae ab illo et quasi architecto.</p>

                    <div class="spacer-sm"></div>

                    <h5>Open Practices</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor doloremque incididunt ut labore et dolore magna.</p>

                    <address>
                        <strong>Mondays to Fridays:</strong> 9:00am to 12:00pm
                    </address>
                </div>
                <div class="col-md-8">

                    <!-- Contact Form -->
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact-form-name">Your Name <span class="required">*</span></label>
                                    <input type="text" name="contact-form-name" id="contact-form-name" class="form-control" placeholder="Your full name...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact-form-email">Your Email <span class="required">*</span></label>
                                    <input type="email" name="contact-form-email" id="contact-form-email" class="form-control" placeholder="Your email...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact-form-subject">Subject</label>
                                    <input type="text" name="contact-form-subject" id="contact-form-subject" class="form-control" placeholder="Your subject...">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-form-message">Your Message <span class="required">*</span></label>
                            <textarea name="name" rows="5" class="form-control" placeholder="Enter your message here..."></textarea>
                        </div>
                        <div class="form-group form-group--submit">
                            <button type="submit" class="btn btn-primary-inverse btn-lg btn-block">Send Your Message</button>
                        </div>
                    </form>
                    <!-- Contact Form / End -->
                </div>
            </div>

        </div>
    </div>
@endsection