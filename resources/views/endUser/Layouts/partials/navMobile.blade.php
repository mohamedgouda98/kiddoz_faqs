<div class="offcanvas offcanvas-start mobile-view" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="las la-times"></i>
        </button>
    </div>
    <div class="offcanvas-body p-0">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('endUser.parent') }}">
                    <i class="las la-user-friends"></i>
                    parents
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('endUser.staff') }}">
                    <i class="las la-user-tie"></i>
                    stuff
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('endUser.features') }}">
                    <i class="las la-store-alt"></i>
                    features
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('endUser.packages') }}">
                    <i class="las la-shopping-cart"></i>
                    packages
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('endUser.contact-us') }}">
                    <i class="las la-phone-volume"></i>
                    contact us
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{ route('endUser.about-us') }}">
                    <i class="las la-microphone-alt"></i>
                    about us
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('endUser.faqs') }}">
                    <i class="las la-question-circle"></i>
                    faqs
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('endUser.articles') }}">
                    <i class="las la-newspaper"></i>
                    Article
                </a>
            </li>
        </ul>

        <div class="p-4">
            <p class="fw-bold">Need help?</p>
            <p>+201155777100</p>
            <p><a class="text-black" href="mailto:support@kiddowz.com">support@kiddowz.com</a></p>
        </div>
    </div>
</div>
