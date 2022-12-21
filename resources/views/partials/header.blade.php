<body>
    <header>

        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="w-50"src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Bootstrap">
                </a>
                <div class="header-bottom">
                    <nav class="navbar">
                        <ul class="navbar-nav d-flex flex-row justify-content-between">
                            <li class="nav-item ms-5 "><a class="nav-link active" href="##">Home</a></li>
                            <li class="nav-item ms-5 "><a class="nav-link active"
                                    href="{{ route('comics.index') }}">Comics</a></li>
                        </ul>
                    </nav>
                </div>

            </div>

            </div>


        </nav>

    </header>
</body>

</html>
