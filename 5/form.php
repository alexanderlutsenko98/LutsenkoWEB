<!DOCTYPE html>
<html lang="">

<head>
    <meta name="viewport" content="width=device.width, intial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <script src="index.js" defer></script>
    <title>Луценко 5-ое задание ВЕБ</title>
</head>
  
<style>
  .form-container{
    max-width: 960px;
    text-align: center;
    margin: 0 auto;
  }
  .error {
    border: 2px solid red;
  }
  .hidden{
    display: none;
  }
</style>
<body>
    <?php
    if (!empty($messages)) {
        print('<div id="messages">');
        foreach ($messages as $message) {
            print($message);
        }
        print('</div>');
    }
    ?>
    <div class="form-container">
        <div class="form-title">
            Форма
        </div>
        <form method="POST" action="">
            <div class="input-group">
                <a href="login.php?logout=1" <?php (empty($_SESSION['login'])) ? print('style="display:none"') : print('style="display:inline-block"'); ?>>Выйти</a>
                <span class="input-group-text" id="basic-addon1">Имя</span>
                <input type="text" class="form-control" name="name" placeholder="-" <?php if ($errors['name']) {
                                                                                                print 'class="error"';
                                                                                            } ?> value="<?php print $values['name']; ?>" />
            </div>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon2">Email</span>
                <input type="text" class="form-control" name="email" placeholder="-" <?php if ($errors['email']) {
                                                                                                    print 'class="error"';
                                                                                                } ?> value="<?php print $values['email']; ?>" />
            </div>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon3">Дата рождения</span>
                <input type="date" class="form-control" name="date" <?php if ($errors['date']) {
                                                                        print 'class="error"';
                                                                    } ?> value="<?php print $values['date']; ?>" />
            </div>
            <div class="form-check" id="gender-block">
                <span class="input-group-text">Пол</span>
                <div class="male-radio">
                    <input class="form-check-input" type="radio" name="gender" value="m" <?php if ($values['gender'] == 'm') {
                                                                                                print 'checked';
                                                                                            }; ?> />
                    <label class="form-check-label" for="male">Мужской</label>
                </div>
                <div class="female-radio">
                    <input class="form-check-input" type="radio" name="gender" value="f" <?php if ($values['gender'] == 'f') {
                                                                                                print 'checked';
                                                                                            }; ?> />
                    <label class="form-check-label" for="female">Женский</label>
                </div>
            </div>
            <div class="form-check" id="limbs-block">
                <span class="input-group-text block-title">Кол-во конечностей</span>
                <div class="limbs-radio">
                    <input class="form-check-input" type="radio" name="limbs" value="1" <?php if ($values['limbs'] == '1') {
                                                                                            print 'checked';
                                                                                        }; ?> />
                    <label class="form-check-label" for="male">1</label>
                </div>
                <div class="limbs-radio">
                    <input class="form-check-input" type="radio" name="limbs" value="2" <?php if ($values['limbs'] == '2') {
                                                                                            print 'checked';
                                                                                        }; ?> />
                    <label class="form-check-label" for="female">2</label>
                </div>
                <div class="limbs-radio">
                    <input class="form-check-input" type="radio" name="limbs" value="3" <?php if ($values['limbs'] == '3') {
                                                                                            print 'checked';
                                                                                        }; ?> />
                    <label class="form-check-label" for="female">3</label>
                </div>
                <div class="limbs-radio">
                    <input class="form-check-input" type="radio" name="limbs" value="4" <?php if ($values['limbs'] == '4') {
                                                                                            print 'checked';
                                                                                        }; ?> />
                    <label class="form-check-label" for="female">4</label>
                </div>
            </div>
            <select class="form-select form-select-lg mb-2" name="select[]" multiple <?php if ($errors['select']) {
                                                                                            print 'class="error"';
                                                                                        } ?>>
                <option value="inf" <?php $arr = explode(',', $values['select']);
                                    if ($arr != '') {
                                        foreach ($arr as $value) {
                                            if ($value == "inf") {
                                                print 'selected';
                                            }
                                        }
                                    }
                                    ?>>Бессмертие</option>
                <option value="through" <?php $arr = explode(',', $values['select']);
                                        if ($arr != '') {
                                            foreach ($arr as $value) {
                                                if ($value == "through") {
                                                    print 'selected';
                                                }
                                            }
                                        }
                                        ?>>Прохождение сквозь стены</option>
                <option value="levitation" <?php $arr = explode(',', $values['select']);
                                            if ($arr != '') {
                                                foreach ($arr as $value) {
                                                    if ($value == "levitation") {
                                                        print 'selected';
                                                    }
                                                }
                                            }
                                            ?>>Левитация</option>
            </select>
            <div class="input-group">
                <textarea class="form-control" placeholder="Расскажите о себе..." name="bio" <?php if ($errors['bio']) {
                                                                                                    print 'class="error"';
                                                                                                } ?>><?php print $values['bio']; ?></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="y" id="policy" name="policy" checked />
                <label class="form-check-label" for="policy">Согласен с <a href="./task3.html">политикой обработки данных*</a>.</label>
            </div>
            <button class="btn btn-primary" type="submit" id="send-btn">Отправить</button>
        </form>
    </div>
</body>

</html>
