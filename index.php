<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/fonts.css">
    <title>Тестовое</title>
</head>
<body>
    <main>
        <section>
            <div class="container">
                <h1>Заказ-наряд</h1>
                    <form method="post" action="infoFormAndSendPDF.php" class="order needs-validation" novalidate>
                        <div class="order__form-group">
                            <div class="order__form-title">
                                1.Общие данные
                            </div>
                            <div class="order__form-general mb-5">
                                <div class="order__form-data mb-5">
                                    <label for="generalNameOfHospital" class="d-block mb-3 label__general">Название клиники</label>
                                    <input type="text" placeholder="Название клиники" id="generalNameOfHospital" name="generalNameOfHospital"
                                    class="form-control_bg-white">
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-5">
                                        <label for="generalDate" class="d-block mb-3 label__general">Дата</label>
                                        <input type="date" placeholder="dd.mm.yy" id="generalDate" name="generalDate"
                                               class="form-control_bg-white">
                                    </div>
                                </div>
                                <div class="order__form-data mb-5">
                                    <label for="generalNameDoctor" class="d-block mb-3 label__general">Имя врача</label>
                                    <input type="text" placeholder="Имя врача..." id="generalNameDoctor" name="generalNameDoctor"
                                           class="form-control_bg-white">
                                </div>
                                <div class="order__form-data mb-5">
                                    <label for="generalFIOPatient" class="d-block mb-3 label__general">Фио пациента</label>
                                    <input type="text" placeholder="Имя пациента..." id="generalFIOPatient" name="generalFIOPatient"
                                           class="form-control_bg-white">
                                </div>
                                <div class="order__form-data mb-5">
                                    <label class="mb-3 label__general">Пол пациента</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="radio" id="M" name="sex" value="M">
                                            <label for="M" class="mb-3">Мужской</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" id="W" name="sex" value="W">
                                            <label for="W" class="mb-3">Женский</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <div class="order__form-title">
                                2. Виды работ
                            </div>
                            <table class="order__form-table" id="">
                                <thead>
                                    <tr>
                                        <th>Вид работы</th>
                                        <th>Кол-во</th>
                                        <th>Дата визита</th>
                                        <th>Время</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr class="work__types">
                                        <td><input type="text" name="table[]" value=""></td>
                                        <td><input type="number" name="table[]" value=""></td>
                                        <td><input type="date" name="table[]" value="" ></td>
                                        <td><input type="text" name="table[]" value="" placeholder="чч:мм"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="add-row_btn">+</button>
                        </div>
                        <div class="order__from-group">
                            <div class="order__form-title">3. Схема протезирования</div>
                            <div class="tooth-schema">
                                <img class="tooth-img" src="/assets/schema@2x.png" alt="">
                                <div class="tooth-checkboxes">

                                </div>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <div class="order__form-title">4. Оттиски</div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" name="impressions" id="analog" value="analog">
                                    <label for="analog">Аналоговый</label>

                                </div>
                                <div class="col-md-4 d-inline-block">
                                    <input type="radio" name="impressions" id="digital" value="digital">
                                    <label for="digital">Цифровые</label>
                                </div>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <div class="order__form-title">5. Материал</div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <input type="checkbox" name="materials[]" id="material-first" value="Co-Cr">
                                    <label for="material-first">Co-Cr</label>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="checkbox" name="materials[]" id="material-second" value="Zr-O2">
                                    <label for="material-second">ZrO²</label>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="checkbox" name="materials[]" id="material-third" value="Prettau">
                                    <label for="material-third">Prettau</label>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="checkbox" name="materials[]" id="material-fourth" value="E-max">
                                    <label for="material-fourth">E-max</label>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="checkbox" name="materials[]" id="material-fifth" value="Ti">
                                    <label for="material-fifth">Ti</label>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="checkbox" name="materials[]" id="material-sixth" value="Акрил/РММА">
                                    <label for="material-sixth">Акрил/РММА</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="checkbox" name="materials[]" id="material-seventh" value="Композит">
                                    <label for="material-seventh">Композит</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="checkbox" name="materials[]" id="material-eighth" value="Acry Free">
                                    <label for="material-eighth">Acry Free</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="checkbox" name="materials[]" id="material-ninth" value="Нейлон">
                                    <label for="material-ninth">Нейлон</label>
                                </div>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <div class="order__form-title">6. Цвет зубов - боковая группа</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="sideGroup" class="form-control_bg-white" placeholder="Введите цвет..." >
                                </div>
                                <div class="col-md-6">
                                    <img src="/assets/color.svg" class="tooth-color-image">
                                </div>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <div class="order__form-title">7. Цвет зубов - передняя группа</div>
                            <div class="row">
                                <div class="col-md-4 edge__col">
                                    <div class="edge__item mb-3">
                                        <input type="text" class="form-control_bg-white " name="toothColorFrontTop" placeholder="Верхняя треть">
                                    </div>
                                    <div class="edge__item mb-3">
                                        <input type="text" class="form-control_bg-white " name="toothColorFrontMiddle" placeholder="Средняя треть">
                                    </div>
                                    <div class="edge__item mb-3">
                                        <input type="text" class="form-control_bg-white " name="toothColorFrontBottom" placeholder="Нижняя треть">
                                    </div>
                                    <div class="bfe" style="background-image: url('/assets/edge.svg');">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <div class="order__form-title">8. Режущий край</div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <input type="radio" name="sharpEdge" id="sharpEdgeWhite" value="white">
                                    <label for="sharpEdgeWhite">Беловатый</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" name="sharpEdge" id="sharpEdgeBlue" value="blue">
                                    <label for="sharpEdgeBlue">Голубоватый</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" name="sharpEdge" id="sharpEdgeGray" value="gray">
                                    <label for="sharpEdgeGray">Сероватый</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Свое значение" class="form-control_bg-white" name="sharpEdgeOther">
                                </div>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <div class="order__form-title">9. Цвет культи</div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control_bg-white" name="cult" placeholder="Введите цвет">
                                </div>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <div class="order__form-title">10. Форма зубов / тип лица</div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" name="shapeTooth" id="shape__first" value="triangle">
                                    <label for="shape__first" class="shape shape-item" style="background-image: url('/assets/shape-1.svg')"></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" name="shapeTooth" id="shape__second" value="circle">
                                    <label for="shape__second" class="shape shape-item" style="background-image: url('/assets/shape-2.svg')"></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" name="shapeTooth" id="shape__third" value="square">
                                    <label for="shape__third" class="shape shape-item" style="background-image: url('/assets/shape-3.svg')"></label>
                                </div>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <div class="order__form-title">11. Форма промывного пространства</div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" name="shapeProm" id="shape__prom-first" value="prom-1">
                                    <label for="shape__prom-first" class="shape shape__prom-item" style="background-image: url('/assets/shape-prom-1.svg')"></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" name="shapeProm" id="shape__prom-second" value="prom-2">
                                    <label for="shape__prom-second" class="shape shape__prom-item" style="background-image: url('/assets/shape-prom-2.svg')"></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" name="shapeProm" id="shape__prom-third" value="prom-3">
                                    <label for="shape__prom-third" class="shape shape__prom-item" style="background-image: url('/assets/shape-prom-3.svg')"></label>
                                </div>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <div class="order__form-title">12. Контур формирования десеневого края</div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" name="shapeDes" id="shape__des-first" value="des-1">
                                    <label for="shape__des-first" class="shape shape__des-item" style="background-image: url('/assets/shape-des-1.svg')"></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" name="shapeDes" id="shape__des-second" value="des-2">
                                    <label for="shape__des-second" class="shape shape__des-item" style="background-image: url('/assets/shape-des-2.svg')"></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" name="shapeDes" id="shape__des-third" value="des-3">
                                    <label for="shape__des-third" class="shape shape__des-item" style="background-image: url('/assets/shape-des-3.svg')"></label>
                                </div>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <div class="order__form-title">13. Коментарии</div>
                            <div class="order__form-data">
                                <textarea name="comments" class="form-control_bg-white" style="height: 15rem" placeholder="Введите ваши комментарии сюда"></textarea>
                            </div>
                        </div>
                        <div class="order__form-group">
                            <button type="submit" class="btn btn_custom">Отправить</button>
                        </div>
                </form>
            </div>
        </section>
    </main>
    <script src="/js/add-rows-table.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <script src="/js/add-tooth-point3.js" type="module"></script>
</body>
</html>