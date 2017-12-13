<!DOCTYPE html>
<html>
<head>
    @yield('head')
</head>
<body>
    <div>
        <section class="nav-wrapper">
            <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"><strong><i>OUR NAME</i></strong></a>
                    </div>
                    <div class="navbar-collapse collapse" id="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#intro">Intro</a>
                            </li>
                            <li><a href="#section4">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        @yield('body')
    </div>
</body>
</html>