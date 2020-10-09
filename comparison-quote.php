<?php session_start(); ?>
<!doctype html>
<html lang="en-GB" class="no-js">

<head>
  <meta charset="UTF-8">
  <title>Here 4 Life</title>
  <meta name="description" content="Life Insurance quotes">
  <?php include "partials/head.php" ?>
</head>

<body class="body">
  <!-- Google Tag Manager (noscript) -->

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBFKN7P" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>

  <!-- End Google Tag Manager (noscript) -->
  <!-- header -->
  <?php include "partials/header.php" ?>
  <!-- /header -->
  <main role="main">
    <div class='page-main-content'>
      <section class='hero-form-banner'>
        <div class='container'>
          <div class='row'>
            <div class='col-12'>
              <div class="hero-form-container">
                <div class="inner-hero-form-container">
                  <div class="form-main-title-container">
                    <h1>Get the right cover for you from just £7 a month.</h1>
                    <div class="step-progress">
                      <div class="inner-step-progress">
                        <div class="single-step completed-step">
                          <div class="inner-single-step">
                            <div class="step-number">
                              <p>1</p>
                            </div>
                            <p>Cover to Include</p>
                          </div>
                        </div>

                        <div class="single-step">
                          <div class="inner-single-step">
                            <div class="step-number">
                              <p>2</p>
                            </div>
                            <p>Cover Details</p>
                          </div>
                        </div>

                        <div class="single-step">
                          <div class="inner-single-step">
                            <div class="step-number">
                              <p>3</p>
                            </div>
                            <p>People to Cover</p>
                          </div>
                        </div>

                        <div class="single-step">
                          <div class="inner-single-step">
                            <div class="step-number">
                              <p>4</p>
                            </div>
                            <p>Primary Contact</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>
                      Complete each step to get a no obligation life insurance quote, <br />
                      compared against hundreds of insurers, giving you peace of mind.
                    </p>
                  </div>
                  <form id="form">
                    <div class="form-step active-step ">
                      <div class="inner-form-step">
                        <div class="step-title-container">
                          <p>Who is this life insurance quote for?</p>
                        </div>
                        <div class="step-content">
                          <fieldset>
                            <label>I'd like a quote for:</label>
                            <div class="quote-buttons">
                              <button data-coverfor="me">Just Me</button>
                              <button data-coverfor="couple">My Partner and I</button>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                    </div>
                    <div class="form-step step-2">
                      <div class="inner-form-step">
                        <div class="step-title-container">
                          <p> How much cover would you like? </p>
                        </div>
                        <div class="step-content">
                          <div class="row-fieldsets">
                            <fieldset>
                              <label>HOW MUCH COVER WOULD YOU LIKE?</label>
                              <select class="cover-length">
                                <option value="empty">Please Select</option>
                                <option value="50-100">50k - 100k</option>
                                <option value="income">100k - 150k</option>
                                <option value="mortgage">150k - 200k</option>
                                <option value="criticalillness">250k -300k</option>
                                <option value="privatemedical">300k - 400k</option>
                                <option value="privatemedical">400k - 500k</option>
                                <option value="privatemedical">500k - 1m</option>
                                <option value="privatemedical">1m+</option>
                                <option value="privatemedical">I'm not sure</option>
                              </select>
                            </fieldset>
                            <fieldset>
                              <label>COVER LENGTH? (YEARS)*</label>
                              <input type="number" min="1" max="15" name="cover-length" id="cover-length" />
                            </fieldset>
                          </div>
                          <button class="form-next">Next</button>
                        </div>
                      </div>
                    </div>
                    <div class="form-step step-3  ">
                      <div class="inner-form-step">
                        <div class="step-title-container">
                          <p>Please provide the name and date of birth of the people being covered. </p>
                        </div>
                        <div class="step-content">
                          <div class="cover-person-group row-fieldsets">
                            <fieldset>
                              <label>Your Name</label>
                              <input type="text" name="name-1" id="name-1" />
                            </fieldset>
                            <fieldset>
                              <label>Your D.O.B</label>
                              <div class="date-container">
                                <select id="date-day-1" name="date-day">
                                  <option value="empty">DD</option>
                                  <option value="1">01</option>
                                  <option value="2">02</option>
                                  <option value="3">03</option>
                                  <option value="4">04</option>
                                  <option value="5">05</option>
                                  <option value="6">06</option>
                                  <option value="7">07</option>
                                  <option value="8">08</option>
                                  <option value="9">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                                  <option value="15">15</option>
                                  <option value="16">16</option>
                                  <option value="17">17</option>
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31s">31</option>
                                </select>
                                <select id="date-month-1" name="date-month">
                                  <option value="empty">MM</option>
                                  <option value="1">01</option>
                                  <option value="2">02</option>
                                  <option value="3">03</option>
                                  <option value="4">04</option>
                                  <option value="5">05</option>
                                  <option value="6">06</option>
                                  <option value="7">07</option>
                                  <option value="8">08</option>
                                  <option value="9">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                </select>
                                <select id="date-year-1" name="date-year">
                                  <option value="empty">YYYY</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                  <option value="1969">1969</option>
                                  <option value="1968">1968</option>
                                  <option value="1967">1967</option>
                                  <option value="1966">1966</option>
                                  <option value="1965">1965</option>
                                  <option value="1964">1964</option>
                                  <option value="1963">1963</option>
                                  <option value="1962">1962</option>
                                  <option value="1961">1961</option>
                                  <option value="1960">1960</option>
                                  <option value="1959">1959</option>
                                  <option value="1957">1958</option>
                                  <option value="1956">1956</option>
                                  <option value="1955">1955</option>
                                  <option value="1954">1954</option>
                                  <option value="1953">1953</option>
                                  <option value="1952">1952</option>
                                  <option value="1951">1951</option>
                                  <option value="1950">1950</option>
                                  <option value="1949">1949</option>
                                  <option value="1948">1948</option>
                                  <option value="1947">1947</option>
                                  <option value="1946">1946</option>
                                  <option value="1945">1945</option>
                                  <option value="1944">1944</option>
                                  <option value="1943">1943</option>
                                  <option value="1942">1942</option>
                                  <option value="1941">1941</option>
                                  <option value="1940">1940</option>
                                </select>
                              </div>
                            </fieldset>
                          </div>
                          <div class="cover-person-group person-2 row-fieldsets">
                            <fieldset>
                              <label>Your Partners Name</label>
                              <input type="text" name="name-2" id="name-2" />
                            </fieldset>
                            <fieldset>
                              <label>Your Partners D.O.B</label>
                              <div class="date-container">
                                <select id="date-day-2" name="date-day">
                                  <option value="empty">DD</option>
                                  <option value="1">01</option>
                                  <option value="2">02</option>
                                  <option value="3">03</option>
                                  <option value="4">04</option>
                                  <option value="5">05</option>
                                  <option value="6">06</option>
                                  <option value="7">07</option>
                                  <option value="8">08</option>
                                  <option value="9">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                                  <option value="15">15</option>
                                  <option value="16">16</option>
                                  <option value="17">17</option>
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31s">31</option>
                                </select>
                                <select id="date-month-2" name="date-month">
                                  <option value="empty">MM</option>
                                  <option value="1">01</option>
                                  <option value="2">02</option>
                                  <option value="3">03</option>
                                  <option value="4">04</option>
                                  <option value="5">05</option>
                                  <option value="6">06</option>
                                  <option value="7">07</option>
                                  <option value="8">08</option>
                                  <option value="9">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                </select>
                                <select id="date-year-2" name="date-year">
                                  <option value="empty">YYYY</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                  <option value="1969">1969</option>
                                  <option value="1968">1968</option>
                                  <option value="1967">1967</option>
                                  <option value="1966">1966</option>
                                  <option value="1965">1965</option>
                                  <option value="1964">1964</option>
                                  <option value="1963">1963</option>
                                  <option value="1962">1962</option>
                                  <option value="1961">1961</option>
                                  <option value="1960">1960</option>
                                  <option value="1959">1959</option>
                                  <option value="1957">1958</option>
                                  <option value="1956">1956</option>
                                  <option value="1955">1955</option>
                                  <option value="1954">1954</option>
                                  <option value="1953">1953</option>
                                  <option value="1952">1952</option>
                                  <option value="1951">1951</option>
                                  <option value="1950">1950</option>
                                  <option value="1949">1949</option>
                                  <option value="1948">1948</option>
                                  <option value="1947">1947</option>
                                  <option value="1946">1946</option>
                                  <option value="1945">1945</option>
                                  <option value="1944">1944</option>
                                  <option value="1943">1943</option>
                                  <option value="1942">1942</option>
                                  <option value="1941">1941</option>
                                  <option value="1940">1940</option>
                                </select>
                              </div>
                            </fieldset>
                          </div>
                          <button class="form-next">Next</button>
                        </div>
                      </div>
                    </div>
                    <div class="form-step step-4 ">
                      <div class="inner-form-step">
                        <div class="step-title-container">
                          <p>Please provide a primary point of contact.</p>
                        </div>
                        <div class="step-content">
                          <div class="row-fieldsets">
                            <fieldset>
                              <label>Email</label>
                              <input type="email" name="email" class="required d8val_email" id="email" />
                            </fieldset>
                            <fieldset>
                              <label>Telephone</label>
                              <input type="tel" name="telephone" class="required d8val_inttelephone_mobile_line_opt"
                                id="telephone" />
                            </fieldset>
                            <div class="checkbox-container">
                              <div class="checkbox-clickable">
                                <input type="checkbox" name="terms-check" id="terms-check" />
                              </div>
                              <label for="terms-check">By clicking this box you agree to our <a target="__blank"
                                  href="/docs/life-privacy.pdf">Privacy Policy</a> and <a target="__blank"
                                  href="/docs/life-terms.pdf">terms and conditions</a>.</label>
                            </div>
                          </div>
                          <button class="form-submit">Get A Quote</button>
                        </div>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <!-- footer -->
  <?php include "partials/footer.php" ?>
  <!-- /footer -->
  <script src="/dist/js/main.js"></script>
</body>

</html>