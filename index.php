<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="m-5">
    <div class="container px-5">
        <div class="text-center mb-3">
            <h1>Отправить заявку на участие в семинаре</h1>
        </div>
        <div class="mb-4">
            <p class="lead fs-4">Организаторы свяжутся с вами для подтерждения записи.</p>
            <p class="lead fs-4">Участие в семинаре <span class="text-decoration-underline">бесплатное</span>.</p>
        </div>
        <form id="form">
            <div class="row">
                <div class="col-12 mb-4">
                    <label for="name" class="form-label fs-4">Ваше имя:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Иванов Алексей" value="" required="">
                </div>
                <div class="col-12 mb-4">
                    <label for="email" class="form-label fs-4">Контактный email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
                </div>
                <div class="col-12 mb-4">
                    <label for="seminar" class="form-label fs-4">Интересующий семинар:</label>
                    <select class="form-select" id="seminar" name="seminar" required="">
                        <option value="">Выбрать</option>
                        <option>Семинар по IT</option>
                        <option>Семинар по маркетингу</option>
                    </select>
                </div>
                <div class="text-center alert alert-danger mt-3" id="error"></div>
                <div class="col-9 text">
                    <p class="lead fs-6">Все поля обязательны для заполнения.</p>
                    <p class="lead fs-6">Отправляя заявку, вы соглашаетесь с договором публичной оферты и политикой обработки данных.</p>
                </div>
                <div class="col-3 d-grid button">
                    <button  type="button" class="btn btn-success" id="sendmail"">Отправить</button>
                </div>
            </div>
        </form>
        <div class="text-center alert alert-success mt-3" id="success"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="formmail.js"></script>
</body>
</html>