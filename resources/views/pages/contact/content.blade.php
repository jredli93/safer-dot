<section class="contact-content-wrap">
    <div class="contact-map" id="contact-map"></div>
    <div class="contact-form">
        <form method="POST" action="{{ route('contact.send') }}" class="input-form">
            @csrf
            <label>Full Name:</label>
            <input type="text" name="fullname" class="form-name">
            
            <label>Email: </label>
            <input name="email" type="email" class="form-email">
            
            <label>Message</label>
            <textarea placeholder="Please enter message text" name="message" class="form-message" cols="30" rows="10"></textarea>

            <button type="submit" href="#" class="btn btn--xlrg btn--gradient">
                <span class="btn__text btn-text">Send</span>
            </button>

        </form>
    </div>
</section>
