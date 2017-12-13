@extends('master')

@section('head')
    <title>ve-gain Nutrition</title>
    <!---Bootstrap and styling--->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">
    <!---Scripts--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/js.js"></script>
@endsection

@section('body')
    <header class="landing-intro">
        <div class="landing-message backdrop">
            <div class="container">
                <div class="col-lg-12">
                    <h2 id="headline" style="font-family:Lobster; font-size:45px; color: rgb(244, 230, 240);">We're coming soon...</h2>
                    <hr class="line">

                    <div class="headline-para">
                        We're here to help <strong>you</strong> with all your fitness goals through a vegan diet.<br> Drop your email below to be the first to know when we're launching!
                    </div>

                    <div id="clockdiv">
                        <div>
                            <span class="days number"></span>
                            <div class="smalltext">Days</div>
                        </div>
                        <div>
                            <span class="hours number"></span>
                            <div class="smalltext">Hours</div>
                        </div>
                        <div>
                            <span class="minutes number"></span>
                            <div class="smalltext">Minutes</div>
                        </div>
                        <div>
                            <span class="seconds number"></span>
                            <div class="smalltext">Seconds</div>
                        </div>
                    </div>
                    <form method="POST" action="#">
                        <div class="row">
                            <div class="col-xs-6 col-centered">

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control input-sm floatlabel" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success">Notify Me</button>
                    </form>

                </div>
            </div>
            <div class="container">
                <div class="text-center">
                    <div class="social-tabs">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x icon-background1"></i>
							<i class="fa fa-twitter fa-stack-1x social-fa"></i>
						</span>
                        <span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x icon-background1"></i>
							<i class="fa fa-facebook fa-stack-1x social-fa"></i>
						</span>
                        <span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x icon-background1"></i>
							<i class="fa fa-instagram fa-stack-1x social-fa"></i>
						</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection