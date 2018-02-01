<section id="contact" class="">
    
    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="container center">

                    <div class="row center-middle">

                        <div class="col-sx-12 col-sm-12 col-md-12">
                            <div class="page-header center-middle"><h2>Kontakt <a href="#contact" class="section-link-icon"><i class="fa fa-link" aria-hidden="true"></i></a></h2></div>
                        </div>

                        <div class="col-sx-12 col-sm-12 col-md-12 contactBoxInfoText">
                            <p>
                                Sie haben einen Fehler gefunden oder einfach nur eine Frage?
                                Dann kontaktieren Sie mich doch bitte.
                            </p>
                        </div>

                        <div class="col-sx-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 contactBoxSuccess">
                            <div class="contact_text">
                                <p>
                                    <span class="contact_success_headline"><i class="fa fa-check-circle"></i> Nachricht wurde gesendet!</span>
                                    <br><br>
                                    Ihre Nachricht wurde erfolgreich übermittelt.<br>Ich werde mich so schnell wie möglich mit Ihnen in Verbindung setzen.
                                </p>
                            </div>
                        </div>

                        <div class="col-sx-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 contact-form">
                            <form method="post" action="{{ route('messages.store') }}">

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input type="text" value="{{ old('senderName') }}" name="senderName" required class="form-control" placeholder="Ihr Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{ old('email') }}" name="email" required class="form-control" placeholder="Ihre E-Mail Adresse">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{ old('subject') }}" name="subject" required class="form-control" placeholder="Betreff">
                                </div>
                                <div class="form-group">
                                    <textarea name="body" class="form-control" rows="3" placeholder="Nachricht">{{ old('senderName') }}</textarea>
                                </div>
                                <button type="submit" class="btn contact-btn">Nachricht abschicken</button>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
  </section>
