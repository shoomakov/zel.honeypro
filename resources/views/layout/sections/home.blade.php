<div id="home">
  <div id="da-slider" class="da-slider">
    <div class="triangle"></div>
    <div class="mask"></div>
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <div class="centered">
            <ul class="cd-pricing">
              <li>
                <header class="cd-pricing-header">
                  <h2>Мёд</h2>
                  <div class="cd-price">
                    <span>600 &#8381;</span>
                    <span>1.5 л</span>
                  </div>
                </header>
                <div class="cd-pricing-features">
                  <ul>
                    <li><em><img src="images/honey_mini.png" alt="" /></em></li>
                  </ul>
                  <div>
                    <div class="cd-form">
                      <div class="cd-plan-info"></div>
                      <div class="cd-more-info">
                        <h3></h3>
                        <p>Бесплатная доставка по Зеленограду и Андреевке.</p>
                      </div>
                      <!-- oninput="out.value = parseInt(quantity.value).toFixed(1) -->
                      <div id="contact_message" class="success-msg animated fadeInRight" style="color: #000; margin-top: 20%; padding: 0 0 0 210px;"> <i class="fa fa-paper-plane-o animated fadeInLeft"></i>Спасибо. Ваш заказ отправлен,</div>
                      <div class="success-msg2 animated fadeInUpBig" style="color: #000; padding: 0 0 0 210px;">В ближайшее время мы с Вами свяжемся!</div>
                      <form role="form" id="this_form" method="post" onSubmit="return false" class="thisChanges form_check form_style">
                        <fieldset>
                          <legend>Заказ Алтайского мёда</legend>

                          <div class="half-width">
                            <p class="rline">
                              <!-- <label for="mf">Введите количество</label> -->
                              <input type="number"
                                  id="mf"
                                     class="honey_change rfield"
                                     step="1.5"
                                     min="1.5"
                                     max="1000"
                                     name="quantity"
                                     title="Кол-во"
                                     pattern="[0-9]*"
                                     inputmode="numeric"
                                     placeholder="Введите количество"
                                     required
                              />
                            </p>
                            <!-- pattern="(\+?\d[- .]*){7,13}" -->
                            <p class="rline">
                              <!-- <label for="userName">Имя</label> -->
                              <input type="text" id="userName" class="rfield" name="userName" placeholder="Ваше имя" required/>
                            </p>
                            <p class="rline">
                              <!-- <label for="userPhone">Телефон</label> -->
                              <input type="tel"  id="userPhone" class="rfield phonefield" name="userPhone" placeholder="Телефон" required/>
                            </p>
                            <center>

                              <div class="cene">
                                <input type="submit" defaultValue="Заказать" id="btn_submit" class="btnsubmit" value="Заказать"/>
                                <div class="errorMessage"></div>
                              </div>
                              <!-- <output id="outQuantity" name="out" value="1.5" style="color: #000;"></output> -->
                            </center>


                          </div>
                          <div class="half-width">
                            <img src="images/offergirl.png" alt="" />

                            <div class="testimonial animated fadeInDown" style="color: #4CAF50;">
                              <ul class="res-res " style="list-style-type: none; text-align: left;"></ul>
                              <br />
                              <hr />
                              <span class="someInfo animated" style="color: #000;"></span>

                            </div>
                          </div>
                        </fieldset>
                        <fieldset>
                          <!-- <div class="half-width">

                          </div> -->
                          <!-- <div class="half-width">
                            <img src="images/offergirl.png" alt="" />
                            <div class="cene">
                              <input type="submit" defaultValue="Заказать" />
                            </div>
                          </div> -->
                        </fieldset>
                      </form>
                      <a href="#0" class="cd-close"></a>
                    </div>
                    <!-- {/* shadow layer */} -->
                    <!-- <div class="cd-overlay"></div> -->
                  </div>
                </div>
                <footer class="cd-pricing-footer">
                  <a href="#0">Хочу</a>
                </footer>
              </li>
            </ul>
          </div>
        </div>

        <!-- <center>
          <div style="position: absolute; z-index: 1;margin-top: 3%; margin-left: 40%; background: rgba(0,0,0,0.5); padding: 17px; width: 30%; border-radius: 10px; font-size:28px; line-height: 28px;">
            Вы на пороге того, чтобы попробовать самый чудесный в мире мед!
          </div>
        </center> -->
        <div class="span6">
          <div class="comics-thought" style="left: 400px;">
            <p>Вы на пороге того, чтобы попробовать самый чудесный в мире мед!</p>
          </div>
          <img src="images/etery.png" alt="" style="position: relative"/>
        </div>

      </div>
      <div class="da-arrows">
        <span class="da-arrows-prev" />
        <span class="da-arrows-next" />
      </div>
    </div>
  </div>
</div>
