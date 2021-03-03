<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flawless Box | Signup</title>


    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="css/style-signup.css">


</head>
<body>
<!-- partial:index.partial.html -->
<header>
    @include('includes.header')
</header>

<main>

    <a onclick="backToTop()" id="top-btn">
        <img src="https://img.icons8.com/android/24/000000/double-up.png"/></a>

    <div class="container">
        <div class="row">
            <div id="headers" class="col-4">
                <div class="container l-padding">
                    <h1 id="title" class="title">Sign up</h1>
                    <p id="description">Register today to our rewards program to receive a free gift every year. <i
                            class="fa fa-gift" aria-hidden="true"></i>
                    </p>
                </div>

                <div class="container custom-padding">
                    <p class="subtitle">We're almost done...</p>
                    <p>Just some more information to customize your skincare experience.</p>
                </div>
            </div>
            <div class="col-8">
                <div class=" container m-padding">
                    <form id="survey-form">
                        <div class="form-contain">
                            <div class="s-padding">
                                <h3>Create an account</h3>
                                <hr>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label id="name-label" for="name">First name</label>
                                        <input id="name" class="form-control" type="text" name="name-label"
                                               placeholder="First name" required/>
                                    </div>
                                    <div class="col">
                                        <label id="middlename-label" for="middlename">Middle name</label>
                                        <input id="middlename" class="form-control" type="text" name="middlename-label"
                                               placeholder="Middle name" required/>
                                    </div>
                                    <div class="col">
                                        <label id="lastname-label" for="lastname">Last name</label>
                                        <input id="lastname" class="form-control" type="text" name="lastname-label"
                                               placeholder="Last name" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label id="email-label" for="email">Email</label>
                                        <input id="email" class="form-control" type="email" name="email-label"
                                               placeholder="Email" required/>
                                    </div>
                                    <div class="col">
                                        <label id="phonenumber-label" for="phonenumber">Phone number</label>
                                        <input id="phonenumber" class="form-control" type="text"
                                               name="phonenumber-label" placeholder="Phone number" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label id="number-label" for="numer">Birthday</label>
                                <div class="row">
                                    <div class="col">
                                        <input id="number" class="form-control" type="number" name="age"
                                               placeholder="Year (Optional)" min="1" max="99"/>
                                    </div>
                                    <div class="col">
                                        <select id="dropdown" class="form-control" name="business">
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">Octuber</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input id="number" class="form-control" type="number" name="age"
                                               placeholder="Day" min="1" max="31"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-4">
                                        <label id="zipcode-label" for="zipcode">Zip code</label>
                                        <input id="zipcode" class="form-control" type="text" name="zipcode-label"
                                               placeholder="Zip code" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-contain">
                            <div class="s-padding">
                                <h3>Tell us about your skin</h3>
                                <hr>
                            </div>
                            <div class="xs-padding">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <fieldset id="care-check">
                                                <label id="radio-label">Do you take care of your skin? </label>
                                                <div class="form-check">
                                                    <input type="radio" name="care-check" value="yes"
                                                           checked>
                                                    <label for="yes-option" class="form-check-label">Yes</label><br>
                                                    <input type="radio" name="care-check" value="no">
                                                    <label for="no-option" class="form-check-label">No</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col">
                                            <label id="dropdown-label" for="dropdown"> How often do you apply your skin
                                                care products?
                                            </label>
                                            <select id="dropdown" class="form-control">
                                                <option value="1">Always</option>
                                                <option value="4">Sometimes</option>
                                                <option value="4">Never</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <fieldset id="check-products">
                                                <label id="check-label">Select your daily skin care products </label>
                                                <div class="form-check">
                                                    <label><input type="checkbox" name="products" id="cbox1"
                                                                  value="cleanser"> Clenaser</label><br>
                                                    <label><input type="checkbox" name="products" value="toner">
                                                        Toner</label><br>
                                                    <label><input type="checkbox" name="products" value="essence">
                                                        Essence</label><br>
                                                    <label><input type="checkbox" name="products" value="serum">
                                                        Serum</label><br>
                                                    <label><input type="checkbox" name="products" value="eyecream">
                                                        Eyecream</label><br>
                                                    <label><input type="checkbox" name="products" value="moisturizer">
                                                        Moisturizer</label><br>
                                                    <label><input type="checkbox" name="products" value="spottreatment">
                                                        Spot treatment</label><br>
                                                    <label><input type="checkbox" name="products" value="sunscreen">
                                                        Sunscreen</label><br>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col">
                                            <label id="description-label" class="form-check-label"> Describe your
                                                skincare routine </label><br>
                                            <textarea id="comments" class="form-control" name="comment"
                                                      placeholder=""></textarea><br>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="float-right">
                            <button id="submit" type="submit" class="btn btn-submit right">Join Now</button>
                        </div>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    @include('includes.footer')
</footer>

<script src="js/script-signup.js"></script>
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>

</body>
</html>
