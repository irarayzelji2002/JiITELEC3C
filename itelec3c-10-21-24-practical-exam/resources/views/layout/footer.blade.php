<footer class="footer mt-auto py-3 bg-light">
    <div class="row g-0 text-center align-items-center">
        <div class="col-lg-4 col-md-12 footer-col">
            <div class="d-flex justify-content-lg-start justify-content-md-center justify-content-center">
                &copy; Meralco
            </div>
        </div>
        <div class="col-lg-4 col-md-12 footer-col">
            <a class="btn btn-primary btn-yellow" href="{{ route('billing-form') }}" role="button">
                Add and Compute Billing
            </a>
        </div>
        <div class="col-lg-4 col-md-12 footer-col">
            <div class="d-flex justify-content-lg-end justify-content-md-center justify-content-center">
                <a class="px-2 footer-socials" href="#" target="_blank" rel="noopener noreferrer" role="button">
                    <img src="{{ asset('assets/elements/socials/Facebook.png') }}" alt="Facebook" />
                </a>
                <a class="px-2 footer-socials" href="#" target="_blank" rel="noopener noreferrer" role="button">
                    <img src="{{ asset('assets/elements/socials/Email.png') }}" alt="Email" />
                </a>
            </div>
        </div>
    </div>
</footer>
