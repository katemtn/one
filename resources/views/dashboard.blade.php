<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="/dashboard">
</head>
<body class="bg-danger text-white">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Интерьерная галерея</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="/home">Выход</a>
      </nav>
    </div>

    @csrf  
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label text-dark">Имя</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Все хорошо!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label text-dark">Фамилия</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Все хорошо!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label text-dark">Имя пользователя</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Пожалуйста, выберите имя пользователя.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label text-dark">Вся информация о будущем проекте(размер комнаты, примерная цена, которую вы ходите отдать за проект, будущий стиль комнаты и т.п)</label>
    <input type="text" class="form-control" id="validationCustom03" required>
  </div>
  <div class="col-md-3">
    <div class="invalid-feedback">
      Пожалуйста, выберите корректный город.
    </div>
  </div>
  
  <div class="col-12">
    <button class="btn btn-dark" type="submit">Отправить форму</button>
  </div>
</form>

  <div class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Или если вы не хотите пользоватеться формой заполнения, то сразу пишите по номеру +12345678900</h1>
      </div>
    </div>
    </div>

<div class="my-5 pt-5 text-body-secondary text-center container text-small">
    <p class="mb-1">© 2017–2023 Интерьерная галерея</p>
  </div>
</body>
</html>

