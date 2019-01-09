@extends('layouts.master')
@section('content')
    <div class="card">
        <header class="card__header">
            <h4>Kontakt</h4>
        </header>
        <div class="card__content">

            <div class="row">
                <div class="col-md-4">
                    <h5>Imate pitanja? Posaljite nam poruku!</h5>
                    <p>Za sve informacije o treninzima i utakmicama kontaktirajte nas </p>

                    <div class="spacer-sm"></div>

                    <h5>Treninzi</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor doloremque incididunt ut labore et dolore magna.</p>

                    <address>
                        <strong>Od ponedeljka do petka:</strong> 9:00  to 12:00
                    </address>
                </div>
                <div class="col-md-8">

                    <!-- Contact Form -->
                    <form action="/contact" class="contact-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Ime i prezime <span class="required">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Vaše puno ime...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email adresa <span class="required">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Vaš email...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="subject">Naslov</label>
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Naslov poruke...">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Poruka <span class="required">*</span></label>
                            <textarea name="message" rows="5" class="form-control" placeholder="Tekst poruke..."></textarea>
                        </div>
                        <div class="form-group form-group--submit">
                            <button type="submit" class="btn btn-primary-inverse btn-lg btn-block">Poslati</button>
                        </div>
                    </form>
                    <!-- Contact Form / End -->
                </div>
            </div>

        </div>
    </div>
@endsection