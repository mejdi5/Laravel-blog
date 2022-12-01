                <footer class="footer">
                    <img src="/images/lary-newsletter-icon.svg" alt="" style="width: 120px;">
                    <form method="POST" action="/newsletter"  class="footer-form">
                        @csrf

                            <label for="email" class="footer-form-label">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter" style="height:50%">
                            </label>

                            <input id="email"
                                name="email"
                                type="text"
                                placeholder="Your email address"
                                class="footer-form-input"
                            >

                            @error('email')
                                <span>{{ $message }}</span>
                             @enderror

                        <button type="submit" class="footer-form-button">
                            Subscribe
                        </button>
                    </form>
                </footer>