<?php session_start(); ?>
<!doctype html>
<html lang="en-GB" class="no-js">

<head>
  <meta charset="UTF-8">
  <title>Here 4 Life</title>
  <meta name="description" content="Life Insurance quotes">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Slab&family=Slabo+27px&display=swap" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;600&display=swap" rel="stylesheet"> -->
  <?php include "partials/head.php" ?>
</head>

<body class="body">

<!-- Google Tag Manager (noscript) -->

  <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBFKN7P"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->

<!-- End Google Tag Manager (noscript) -->

  <!-- header -->
  <?php include "partials/header.php" ?>
  <!-- /header -->
  <main role="main">
    <div class='page-main-content'>
      <section class='hero'>
        <div class="hero-bg"></div>
        <div class='container'>
          <div class='row'>
            <div class='col-12 col-lg-6'>
              <div class="hero-left" data-aos="fade-up" data-aos-duration="800">
                <div class="inner-left-content">
                  <div class="title-container">
                    <h1>Life Insurance</h1>
                    <p class="hero-tagline">From just £5* per month</p>
                  </div>
                  <div class="content-container">
                    <ul>
                      <li> Cover from just £5 per month</li>
                      <li> Compare the UKs top insurers</li>
                      <li> Protect the ones you love</li>
                      <li> Access to over 100 discount partners</li>
                    </ul>
                    <button class="clickable">GET MY QUOTE</button>
                    <p class="small text-center text-muted">
                      * Premium driven quotation based on a 30 year old male, none smoker level term cover, £7 per month over 25 years would get £125,000
                    </p>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Insurer Carousel -->
      <section id="insurers-carousel" class="bg-white py-5 d-flex align-items-center">
        <div>
          <img class="img-fluid" src="assets/insurers/svg/aviva.svg" />
        </div>
        <div>
          <img class="img-fluid" src="assets/insurers/svg/aig.svg" />
        </div>
        <div>
          <img class="img-fluid" src="assets/insurers/svg/metlife.svg" />
        </div>
        <div>
          <img class="img-fluid" src="assets/insurers/svg/royal-london.svg" />
        </div>
        <div>
          <img class="img-fluid" src="assets/insurers/svg/lv.svg" />
        </div>
        <div>
          <img class="img-fluid" src="assets/insurers/svg/exeter.svg" />
        </div>
        <div>
          <img class="img-fluid" src="assets/insurers/svg/legal-general.svg" />
        </div>
        <div>
          <img class="img-fluid" src="assets/insurers/svg/national-friendly.svg" />
        </div>
        <div>
          <img class="img-fluid" src="assets/insurers/svg/vitality.svg" />
        </div>
        <div>
          <img class="img-fluid" src="assets/insurers/svg/onefamily.svg" />
        </div>
        <div>
          <img class="img-fluid" src="assets/insurers/svg/aegon.svg" />
        </div>
        <div>
          <img class="img-fluid" src="assets/insurers/svg/zurich.svg" />
        </div>
      </section>


    <!-- New Form -->
    <section class='hero-form-banner pb-5'>
      <div class='container'>
        <div class='row'>
          <div class='col-12'>
            <h1 class="form-title text-center">Get your quote in 4 easy steps</h1>
            <div class="hero-form-container mt-0">
              <div class="inner-hero-form-container">
                <div class="form-main-title-container">

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
                  <p class="pt-3">
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
                          <p class="small pb-3">I'd like a quote for:</p>
                          <div class="quote-buttons">
                            <button data-coverfor="single">Just Me</button>
                            <button data-coverfor="joint">My Partner and I</button>
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
                            <select id="cover-value" class="cover-value">
                              <option value="empty">Please Select</option>
                              <option value="0-50">Under 50k</option>
                              <option value="50-100">50k - 100k</option>
                              <option value="100-150">100k - 150k</option>
                              <option value="150-200">150k - 200k</option>
                              <option value="250-300">250k -300k</option>
                              <option value="300-400">300k - 400k</option>
                              <option value="400-500">400k - 500k</option>
                              <option value="500-1m">500k - 1m</option>
                              <option value="1m+">1m+</option>
                              <option value="not sure">I'm not sure</option>
                            </select>
                          </fieldset>
                          <fieldset>
                            <label>COVER LENGTH? (YEARS)*</label>

                            <select id="cover-length" name="cover-length">
                              <option value="empty">Please select</option>
                              <?php for ($i=1; $i < 51; $i++) { ?>
                                <option value="<?= $i ?> Year Term">
                                  <?= $i ?> Years
                                </option>
                              <?php } ?>
                              <option value="life">Whole of Life</option>
                            </select>
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
                      <div class="step-content text-center">
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
                          <div class="checkbox-container">
                            <div class="checkbox-clickable">
                              <input type="checkbox" name="call-check" id="call-check" />
                            </div>
                            <label for="call-check">By clicking this box you agree to a protection specialist calling you to discuss your policy options.</label>
                          </div>
                        </div>
                        <button type="button" class="form-submit">Get My Quote</button>
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

      <section id='three-boxes'>
        <div class="inner_container">

          <div class="box">
            <img class="img-fluid mx-auto" src="assets/icons/heart-insurance.svg" />
            <p class="text-center pt-3">Life Insurance</p>
            <p class="text-justify">
              Life insurance policies can ensure your family or friends are not financially burdened when you die, and the good news is, the younger you are, the cheaper the policy is likely to be.
            </p>
          </div>

          <div class="box">
            <img class="img-fluid mx-auto" src="assets/icons/heart-protection.svg" />
            <p class="text-center pt-3">Income Protection</p>
            <p class="text-justify">
              Being unable to pay your mortgage or meet your financial commitments in the event of redundancy, accident or illness is a significant fear for many people, particularly in the current uncertain economic climate.
            </p>
          </div>

          <div class="box">
            <img class="img-fluid mx-auto" src="assets/icons/heart-illness.svg" />
            <p class="text-center pt-3">Critical Illness</p>
            <p class="text-justify">
              Critical illness cover is important for every stage of your, and your family's life, offering vital cover should a range of serious illnesses suddenly strike.
            </p>
          </div>

          <div class="box">
            <img class="img-fluid mx-auto" src="assets/icons/heart-protection-2.svg" />
            <p class="text-center pt-3">Income Protection</p>
            <p class="text-justify">
              Whether you’ve just got your feet on the housing ladder or are firmly ensconced in your family home, your property is likely to be your single most valuable asset.
            </p>
          </div>

        </div>
        <button class='cta clickable'>GET YOUR FREE QUOTE TODAY</button>
        <div class="d-flex justify-content-center mt-5">
          <a id="faq-link" href="#" class="text-center text-uppercase font-weight-bold py-3">View all FAQ's</a>
        </div>

      </section>





      <section class='three-steps'>
        <div class='container'>
          <div class='row'>
            <div class='col-12'>
              <h2>Save on Your Life Insurance in 3 Simple Steps</h2>
            </div>
          </div>
          <div class="row steps-row">

            <div class='col-12 col-lg-4'>
              <div class="single-step">
                <div class="step-number">
                  <span>1</span>
                </div>
                <p>Complete the 30 second online form and tell us about the type of cover you want.</p>
              </div>
            </div>

            <div class='col-12 col-lg-4'>
              <div class="single-step">
                <div class="step-number">
                  <span>2</span>
                </div>
                <p>Compare quotes from leading UK insurers.</p>
              </div>
            </div>

            <div class='col-12 col-lg-4'>
              <div class="single-step">
                <div class="step-number">
                  <span>3</span>
                </div>
                <p>Secure the guaranteed price you’ll pay. Cheaper than going directly to the insurer!</p>
              </div>
            </div>

          </div>
          <div class='row'>
            <div class='col-12'>
              <button class="cta clickable">GET MY QUOTE</button>
            </div>
          </div>
        </div>
      </section>
      <section class='comparisons'>
        <div class="comparisons-bg"></div>
        <div class='container'>
          <div class='row'>
            <div class='col-12'>
              <div class="comparison-title">
                <h3>Comparing a wide range of insurers to get you the best cover</h3>
              </div>
            </div>

            <div class='col-12'>
              <div class="logo-bubbles scroll-clickable">
                <div class="single-bubble-logo">
                  <div class="inner-single-logo">
                    <img alt="insurance logo 1" src="/assets/insurers/ins-logo-1.png" />
                  </div>
                </div>
                <div class="single-bubble-logo">
                  <div class="inner-single-logo">
                    <img alt="insurance logo 2" src="/assets/insurers/ins-logo-2.png" />
                  </div>
                </div>
                <div class="single-bubble-logo">
                  <div class="inner-single-logo">
                    <img alt="insurance logo 3" src="/assets/insurers/ins-logo-3.png" />
                  </div>
                </div>
                <div class="single-bubble-logo">
                  <div class="inner-single-logo">
                    <img alt="insurance logo 4" src="/assets/insurers/ins-logo-4.png" />
                  </div>
                </div>
                <div class="single-bubble-logo">
                  <div class="inner-single-logo">
                    <img alt="insurance logo 5" src="/assets/insurers/ins-logo-5.png" />
                  </div>
                </div>
                <div class="single-bubble-logo">
                  <div class="inner-single-logo">
                    <img alt="insurance logo 6" src="/assets/insurers/ins-logo-6.png" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="comparison-content">
                <p>We check and compare your requirements against some of the biggest and best insurers making it easy
                  to find you the best rates on your cover. </p>
                <p>Here 4 Life look at multiple cover options for you and your partner, including: </p>
              </div>
            </div>
          </div>

          <div class='row'>
            <div class='col-12'>

              <div class="cta-container">
                <button class="cta cta-alt clickable">GET MY QUOTE</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class='life-range'>
        <div class='container'>
          <div class='row'>
            <div class='col-12 col-lg-10 offset-lg-1'>
              <div class="range-title">
                <h3>Here4Life Insurance Cover</h3>
                <p>Our life cover options include the following packages:</p>
              </div>
              <div class="range-collection">

                <div class="single-range-item">
                  <div class="inner-range-item">
                    <div class="range-item-content">
                      <p class="range-item-title">Level Term</p>
                      <div>
                        <p class="range-item-desc">
                          Level Term life insurance covers you for a specified amount of time – or the term of the policy. You can choose the length of time you want, whether it be 1 year or 50 years.
                        </p>
                        <p class="range-item-desc">
                          With Level Term cover, the value of your policy and the premium will never change so the lump sum payment can help your family cover funeral expenses, Mortgage, Rent and maintain their standard of living.
                        </p>
                        <p class="range-item-desc">
                          However, it’s worth bearing in mind that because your payments stay the same, the fixed cover won’t increase as the cost of living rises.
                        </p>
                        <p class="range-item-desc">
                          If you’d like your cover to take inflation into account, you can opt for this as part of your level cover policy. Your cover amount will rise with inflation, and your monthly payments can therefore go up.
                        </p>
                        <p class="range-item-desc">
                          <a class="cta cta-primary clickable">Get Your FREE Insurance Quote Now</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-range-item">
                  <div class="inner-range-item">
                    <div class="range-item-content">
                      <p class="range-item-title">Decreasing Term</p>
                      <div>
                        <p class="range-item-desc">
                          Decreasing Term life insurance covers you for a specified amount of time – or the term of the policy. You can choose the length of time you want, whether it be 1 year or 50 years. This policy is usually taken to cover a repayment mortgage or long term loan if you pass away during the term.
                        </p>
                        <p class="range-item-desc">
                          With decreasing cover, the value of your policy gradually reduces over the policy term until it reaches £0 – however, your premiums never change.
                        </p>
                        <p class="range-item-desc">
                          <a class="cta cta-primary clickable">Get Your FREE Insurance Quote Now</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-range-item">
                  <div class="inner-range-item">
                    <div class="range-item-content">
                      <p class="range-item-title">Whole of life</p>
                      <div>
                        <p class="range-item-desc">
                          Whole of life insurance covers you indefinitely until you pass away, offering you the peace of mind that funeral expenses and inheritance are taken care of.
                        </p>
                        <p class="range-item-desc">
                          <a class="cta cta-primary clickable">Get Your FREE Insurance Quote Now</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-range-item">
                  <div class="inner-range-item">
                    <div class="range-item-content">
                      <p class="range-item-title">Critical Illness</p>
                      <div>
                        <p class="range-item-desc">
                          Critical Illness insurance is a policy that helps protect you if you become critically ill during the policy term. It pays out a tax-free lump sum that you can use however you like – whether that’s to help cover health-related costs, monthly expenses, or lost income while you get better.
                        </p>
                        <p class="range-item-desc">
                          <a class="cta cta-primary clickable">Get Your FREE Insurance Quote Now</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-range-item">
                  <div class="inner-range-item">
                    <div class="range-item-content">
                      <p class="range-item-title">Income Protection</p>
                      <div>
                        <p class="range-item-desc">
                          Income Protection Insurance covers most illnesses and injuries that stop you working either in the short or long term – however, it doesn’t pay out if you’re made redundant. Here’s how policies usually work:
                        </p>
                        <ul>
                          <li>It replaces part of your income if you become ill or injured and can’t work</li>
                          <li> Income protection covers you until your return to work or until retirement, death or your policy ends or until the limited claim period on your policy ends - whichever is sooner</li>
                          <li>You can claim as many times as you need to - while the policy lasts</li>
                        </ul>
                        <p class="range-item-desc">
                          <a class="cta cta-primary clickable">Get Your FREE Insurance Quote Now</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-range-item">
                  <div class="inner-range-item">
                    <div class="range-item-content">
                      <p class="range-item-title">Over 50's</p>
                      <div>
                        <p class="range-item-desc">
                          Insurance for people age 50 and over. This cover offers guaranteed acceptance and requires no medical application, perfect if you have been medically rejected for life insurance previously. This cover is typically taken to cover funeral expenses.
                        </p>
                        <p class="range-item-desc">
                          <a class="cta cta-primary clickable">Get Your FREE Insurance Quote Now</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- <div class="single-range-item quote-box">
                                        <div class="inner-range-item">
                                            <div class="range-item-content">
                                                <p class="range-item-title">Get Your Quote</p>
                                                <p class="range-item-desc show-always">
                                                    Click here to get your comparison quote
                                                </p>
                                            </div>
                                            <span class="readmore">Read More</span>
                                        </div>
                                    </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class='customer-reviews'>
        <div class='container'>
          <div class='row'>
            <div class='col-12'>
              <h4>Customer Reviews</h4>
              <p>See what our valued customers have to say about our services at Here4Life.</p>
            </div>
          </div>
          <div class='row'>
            <div class='col-12'>
              <div class="review-widget">
                <div id="vertical-widget-720" style="width:100%;max-width:720px;"></div>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-12'>
              <div class="cta-container">
                <a class="cta cta-alt clickable">Get Your FREE Life Insurance Quote Today</a>
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
