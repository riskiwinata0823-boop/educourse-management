<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="/">
            EduCourse
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">

                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                       href="/">

                        Home

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link {{ request()->is('students*') ? 'active' : '' }}"
                       href="/students">

                        Students

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link {{ request()->is('lecturers*') ? 'active' : '' }}"
                       href="/lecturers">

                        Lecturers

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link {{ request()->is('courses*') ? 'active' : '' }}"
                       href="/courses">

                        Courses

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link {{ request()->is('articles*') ? 'active' : '' }}"
                       href="/articles">

                        Articles

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link {{ request()->is('profile*') ? 'active' : '' }}"
                       href="/profile">

                        Profile

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>