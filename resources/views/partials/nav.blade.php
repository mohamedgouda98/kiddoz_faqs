<div class="container-fluid">
    <div class="navigation">
        <div class="row">
            <ul class="topnav">
                <li></li>
                <li>
                    <a href="{{ route('admin.home') }}">
                        <i class="fa fa-home"></i> Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.articles.index') }}">
                        <i class="fa fa-file-text-o"></i> Articles
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.faq-questions.index') }}">
                        <i class="fa fa-lightbulb-o"></i> FAQ
                    </a>
                </li>
                <li class="icon">
                    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                </li>
            </ul>
        </div>
    </div>
</div>
