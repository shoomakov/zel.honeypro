<div class="section secondary-section" id="toGetTestimonial">
  <div class="triangle"></div>
  <div class="container centered">
    <p class="large-text">Вам пришелся по вкусу наш мед?</p>
    <a style="cursor: pointer;" class="button" id="buttonTestimonial">
      Да. Оставить отзыв
    </a>
    <div id="thanksFor" class="invisible">
      <p style="color: #000;">
        Спасибо за Ваш отзыв! Благодоря вам наш сервис становится лучше!
      </p>
    </div>
    <form id="testimonialFormTextarea" class="invisible" method="post">
      <div class="row">
        <div class="span12">
          <input
            type="text"
            name="social"
            placeholder="Ваш профиль на социальные сети"
            style="width: 400px; height:40px;"
          />
        </div>
        <div class="span12">
          <textarea
            name="testimonial-after-offer"
            id="textareaForTestimonial"
            cols="40" rows="5" style="width:400px;">
          </textarea>
        </div>
        <div class="span12">
          <input id="submitTestimonial" type="submit" class="button" value="Отправить" />
        </div>
      </div>
    </form>
  </div>
</div>
