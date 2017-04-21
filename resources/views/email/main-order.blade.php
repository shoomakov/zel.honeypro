@if ($quantity < 6)
  <strong>{{ $name}} хочет {{ $quantity }} л мёда! Займись им:)</strong><br /><hr />
  Имя: <strong>{{ $name }}</strong><br />
  Телефон: <strong>{{ $phone }}</strong><br />
  Количество: <strong>{{ $quantity }} л</strong><br />
  Общая стоимость: <strong style='color: #4CAF50;'>{{ $price }} руб.</strong>
@elseif ($quantity >= 6)
  <strong>{{ $name }} хочет {{ $quantity }} л мёда! Займись им:)</strong><br /><hr />
  Имя: <strong>{{$name}}</strong><br />
  Телефон: <strong>{{$phone}}</strong><br />
  Количество: <strong>{{$quantity}} л</strong><br />
  Общая стоимость: <strong style='color: #4CAF50;'>{{$price}} руб.</strong>
  <hr />
  Клиент учавствует в акции:
  <div style='color: #4CAF50;'>
    <li>Бесплатная доставка</li>
    <li>Сэмпл для друзей</li>
    <li>Скидка на следующую покупку</li>
  </div>
@endif
