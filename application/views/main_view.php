<form enctype="multipart/form-data" class="w-100 apeal-form" id="form" action="data/write" method="post">
    <div class="form-group">
        <label for="apeal-type">Тип обращения</label>
        <select class="form-control" name="apeal-type">
            <option value="0">Жалоба</option>
            <option value="1">Отзыв</option>
            <option value="2">Предложение</option>
        </select>
    </div>
    <div class="form-group">
        <label for="surname">Фамилия*</label>
        <input class="form-control" type="text" name="surname" placeholder="Иванов" required>
    </div>
    <div class="form-group">
        <label for="name">Имя*</label>
        <input class="form-control" type="text" name="name" placeholder="Иван" required>
    </div>

    <div class="form-group">
        <label for="last-name">Отчество</label>
        <input class="form-control" type="text" name="last-name" placeholder="Иванович">
    </div>

    <div class="form-group">
        <label for="email">Email*</label>
        <input class="form-control" type="email" name="email" placeholder="ivanov@gmail.com" required>
    </div>

    <div class="form-group">
        <label for="last-name">Телефон</label>
        <input type="text" class="form-control bfh-phone" name="phone"
               data-format="+7 (ddd) ddd-dd-dd" placeholder="+7 (999) 999-99-99">
    </div>

    <div class="form-group">
        <label for="text-apeal">Текст сообщения*</label>
        <textarea class="form-control" name="text-apeal" rows="3" required></textarea>
    </div>
    <ul class="js_file_list file-list">
    </ul>
    <div class="form-group">
        <div class="file-block">
            <div class="form-group">
                <label class="label">
                    <i class="fa fa-paperclip" aria-hidden="true"></i>
                    <span class="title">Прикрепить файлы</span>
                    <input class="input-file js_file_check" type="file" name="file[]" id="userfile" multiple="multiple">
                </label>
            </div>
        </div>
    </div>

    <button type="submit" class="btn submit-btn">Отправка формы</button>
</form>

<script>
    $('#form').validate();
</script>