<div id="contact" class="contact">
  <div class="section secondary-section" style="padding-bottom: 0;">
    <div class="container">
      <div class="title">
        <h1>Оформление заказа</h1>
        <p>Чтобы оформить заказ, заполните пожалуйста форму.</p>
      </div>
    </div>
    <!-- <div class="map-wrapper"> -->
      <!-- <div class="map-canvas" id="map-canvas">Loading map...</div> -->
      <div class="container" style="">
        <div class="row-fluid">
          <div class="span7 centered">
            <img src="images/_photo/forcontact.png" alt="Натуральный Алтайский мёд в Зеленограде" />
          </div>
          <div class="span5 contact-form centered">
            <h3 style="padding-bottom: 0">Заказ мёда</h3>
            <p class="offerText">Также Вы можете воспользоваться <span>онлайн-чатом</span> для уточнения всех деталей и договорится о заказе</p>
            <div id="successSend" class="alert alert-success invisible">
              <strong>Спасибо! </strong>Ваш заказ был отправлен.
            </div>
            <div id="after-offer-message" style="color: #000;"></div>

            <!-- <form id="testimonialForm" class="invisible">
              <div class="control-group">
                <div class="controls">
                  <input class="span12" type="text" name="testimonial" placeholder="Оставьте ваш отзыв..." />
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <div class="span12">
                    <button id="send-mail" class="message-btn">Заказать</button>
                  </div>
                </div>
              </div>
            </form> -->

            <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
            <form id="contact-form" action="/second-order" style="margin-top: 20px;">
              <div class="control-group">
                <div class="controls">
                  <input class="span12" type="text" id="name" name="name" placeholder="* Ваше имя..." />
                  <div class="error left-align" id="err-name">Введите имя.</div>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input class="span12" type="email" name="email" id="email" placeholder="* Ваш email..." />
                  <div class="error left-align" id="err-email">Введите Email адрес.</div>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input class="span12" type="number" step="1.5" min="1.5" max="1000" name="secondQuantity" id="secondQuantity" placeholder="* Количество (л)..." />
                  <div class="error left-align" id="err-quantity">Введите количество.</div>
                </div>
              </div>
              <!-- <div class="control-group">
                <div class="controls">
                  <textarea class="span12" name="comment" id="comment" placeholder="* Comments..." defaultValue={""} />
                  <div class="error left-align" id="err-comment">Please enter your comment.</div>
                </div>
              </div> -->
              <div class="control-group">
                <div class="controls">
                  <div class="span6" style="color: #000; padding: 15px 30px; font-size: 22px;">
                    Цена: <span class="appendInfo"></span>
                  </div>
                  <div class="span6">
                    <button id="send-mail" class="message-btn">Заказать</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    <!-- </div> -->
    {{-- <div class="container">

  </div> --}}
</div>
