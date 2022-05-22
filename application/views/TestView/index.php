<div class="container">
    <form action="/test/send" method="POST" class="my-5">

        <h2 class="my-5">Тест по высшей математике</h2>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Линией пересечения двух прямых может быть:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ответ">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Линией пересечения двух сфер может быть:</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Выберите ответ из меню: </option>
                <option value="1">Одна окружность</option>
                <option value="2">Несколько окружностей</option>
                <option value="3">Эллипс</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="exampleFormControlTextarea1" class="form-label">Пространственной кривой является:</label>
            <br>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
            Винтовая линия
            </label>
            <br>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Эллипс
            </label>
        </div>

        <div class="row">
            <div class="col">
                <button class="btn btn-primary w-22" type="submit">Send</button>
            <!-- </div>
            <div class="col"> -->
                <button class="btn btn-danger w-22" type="reset">Cancel</button>
            </div>
        </div>
    </form>

</div>
