<body>
  @include('layout.NavBar.navbar')
  @include('layout.sections.home')
  @include('layout.homemobile')
  @include('layout.sections.service')
  <div class="section secondary-section">
    <div class="triangle"></div>
    <div class="container centered">
      <p class="large-text">
        В итоге Вы получаете 3 баночки натурального мёда, пробники для Ваших друзей,
        скидку на следующую покупку
      </p>
      <p><span>и всё это Вам доставят бесплатно!</span></p>
      <a href="#contact" class="button">Приобрести</a>
    </div>
  </div>
  @include('layout.sections.testimonials')
  @include('layout.toGetTestimonial')
  @include('layout.sections.useful')
  @include('layout.sections.price')
  @include('layout.sections.newsletter')
  @include('layout.sections.contact')
  <div class="footer">
    <div class="span9 center contact-info">
      <p>Москва, Зеленоград, к814</p>
      <p class="info-mail">{{ config('custom.email') }}</p>
      <p>{{ config('custom.phone') }}</p>
    </div>
    <p>
      © {{ $lastdate }} Honeypro
    </p>
  </div>
  <script src="/js/all.js" charset="utf-8"></script>
</body>
