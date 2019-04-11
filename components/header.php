<div class="main">
  <header>
    <div class="container">

      <!-- Шапка с логотипом -->
      <div class="row">
        <div class="col">
          <div class="header__logo">
            <a href="https://honey-hunters.ru"><img src="/img/logo.png" alt="Логотип" class="img-fluid"></a>
          </div>
          <!-- /.header__logo -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->

      <!-- Блок с логотипом конверта -->
      <div class="row">
        <div class="col">
          <div class="d-flex justify-content-center header__contact">
            <img src="/img/contactIcon.png" alt="Конверт">
          </div>
          <!-- /.header__contact -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Блок с формой -->
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6">
          <form action="" class="header__comment-form" method="post">
            <div class="header__comment-form__one-input">
              <label for="name" class="header__comment-form__label">
                  Имя
                  <img src="img/multi.png" alt="Звездочка" class="header__comment-form__label__img">
              </label>
              <input type="text" class="header__comment-form__input" name="name" id="name">
            </div>
            <!-- /.header__comment-form__one-input -->
            <div class="header__comment-form__two-input">
              <label for="email" class="header__comment-form__label">
                E-Mail
                <img src="img/multi.png" alt="Звездочка" class="header__comment-form__label__img">
              </label>
              <input type="email" class="header__comment-form__input" name="email" id="email">
            </div>
            <!-- /.header__comment-form__one-input -->
          </form>
          <!-- /.header__comment-form -->
        </div>
        <!-- /.col-6 -->
        <div class="col-xl-6 col-lg-6">
          <form action="" class="header__comment-form" method="post">
            <label for="comment" class="header__comment-form__label">
              Комментарий
              <img src="img/multi.png" alt="Звездочка" class="header__comment-form__label__img">
            </label>
            <textarea name="comments" class="header__comment-form__textarea" id="comment"></textarea>
          </form>
          <!-- /.header__comment-form -->
        </div>
        <!-- /.col-6 -->
      </div>
      <!-- /.row -->

      <div id="error-block"></div>

      <!-- Блок с кнопкой -->
      <div class="row">
        <div class="col">
          <div class="d-flex justify-content-end header__block-button">
            <button type="button" class="header__block-button__button">
              Записать
            </button>
          </div>
          <!-- /.header__blockbutton -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </header>
  <!-- /.header -->
