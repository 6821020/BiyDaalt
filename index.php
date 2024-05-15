<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/8a206a71da.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      media="screen and (min-width: 1560px)"
      href="css/widescreen.css"
    />
    <link
      rel="stylesheet"
      media="screen and (max-width: 585px)"
      href="css/mobile.css"
    />
    <link
      rel="stylesheet"
      media="screen and (max-height: 390px)"
      href="css/landscape-mobile.css"
    />
    <title>Очир Financial | Санхүү & хөрөнгө оруулалт</title>
  </head>
  <body>
    <header id="showcase">
      <nav id="navbar">
        <h1 class="logo">
          <span class="primary-color">
            <i class="fas fa-book-open"></i> Очир
          </span>
          Financial
        </h1>
        <ul>
          <li><a href="#showcase">Нүүр</a></li>
          <li><a href="#service">Үйлчилгээ</a></li>
          <li><a href="#we">Бид</a></li>
          <li><a href="#contact">Холбогдох</a></li>
          <li><a href="newtrekh.php">Нэвтрэх</a></li>
        </ul>
      </nav>
      <div class="showcase-content">
        <h1 class="l-heading"><br />Бидний боломжид хязгаар үгүй</h1>
        <p class="lead-text">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur
          deleniti optio repellat, aliquid dignissimos consequatur corrupti
          doloremque sint fuga aliquam.
        </p>
        <a href="#service" class="btn">Дэлгэрэнгүй</a>
      </div>
    </header>

    <section id="service" class="bg-light py-1">
      <div class="container">
        <h2 class="m-heading text-center">
          Бид <span class="primary-color">юу</span> хийдэг вэ?
        </h2>
        <div class="items">
          <div class="item">
            <i class="fas fa-university fa-2x"></i>
            <div>
              <h3>Хөрөнгө оруулалт</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae
                officiis ea dignissimos expedita similique magni!
              </p>
            </div>
          </div>
          <div class="item">
            <i class="fas fa-book-reader fa-2x"></i>
            <div>
              <h3>Сургалт</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae
                officiis ea dignissimos expedita similique magni!
              </p>
            </div>
          </div>
          <div class="item">
            <i class="fas fa-pencil-alt fa-2x"></i>
            <div>
              <h3>Аудитын үйлчилгээ</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae
                officiis ea dignissimos expedita similique magni!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="we">
      <div id="we-img"></div>
      <div id="we-text" class="bg-dark p-2">
        <h2 class="m-heading">
          <span class="primary-color">Бид</span> хэн бэ?
        </h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi
          dicta natus, officiis numquam dolor unde incidunt mollitia rem,
          molestias qui quia velit dolorum ea.
        </p>
        <h3>Удирдлагын баг</h3>
        <ul class="list">
          <li>Батсайханы Дэлгэр: Гүйцэтгэх захирал</li>
          <li>Долгорын Гэрэлтуяа: Санхүү эрхэлсэн захирал</li>
          <li>Болдын Ганзориг: Ерөнхий нягтлан бодогч</li>
          <li>Сүрэнгийн Баярцэцэг: Хөрөнгө оруулалтын менежер</li>
          <li>Жаргалын Амарбаясгалан: Сургалт хариуцсан менежер</li>
        </ul>
      </div>
    </section>

    <section id="partners" class="py-1">
      <div class="container">
        <h2 class="m-heading text-center">
          <span class="primary-color">Манай</span> түншүүд
        </h2>
        <div class="items py-1">
          <div><img src="./img/logos/logo1.png" alt="parent1" /></div>
          <div><img src="./img/logos/logo2.png" alt="parent2" /></div>
          <div><img src="./img/logos/logo3.png" alt="parent3" /></div>
          <div><img src="./img/logos/logo4.png" alt="parent4" /></div>
          <div><img src="./img/logos/logo5.png" alt="parent5" /></div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="contact-form bg-primary p-2">
        <h2 class="m-heading">Бидэнтэй холбоо барих</h2>
        <p>Доорх талбаруудыг бөглөн бидэнтэй холбоо барина уу.</p>
        <form action="#">
          <div class="form-group">
            <label for="name">Нэр</label>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Нэрээ оруулна уу."
            />
          </div>
          <div class="form-group">
            <label for="name">И-мэйл</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="И-мэйл хаягаа оруулна уу."
            />
          </div>
          <div class="form-group">
            <label for="phonenumber">Утасны дугаар</label>
            <input
              type="number"
              name="phonenumber"
              id="phonenumber"
              placeholder="Утасны дугаараа оруулна уу."
            />
          </div>
          <div class="form-group">
            <label for="message">Мессеж</label>
            <textarea
              name="message"
              id="message"
              placeholder="Мессежээ оруулна уу."
            ></textarea>
          </div>
          <input type="submit" class="btn btn-dark" value="Илгээх" />
        </form>
      </div>
      <div id="map" class="p-2"></div>
    </section>

    <footer id="main-footer" class="bg-dark text-center">
      <div class="container">
        <p>
          &copy 2021, Платиниум Финанс ХХК<br />Бүх эрх хуулиар хамгаалагдсан
        </p>
      </div>
    </footer>

    <script src="js/main.js"></script>

    <script
      async
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBH652xqOzGreQxLltX4guzOn_1l9x_Lh4&callback=initMap"
    ></script>
  </body>
</html>
