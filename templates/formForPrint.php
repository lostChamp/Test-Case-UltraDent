<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/formForPrint.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/printStyle.css" media="print">
    <title></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 text-nowrap p-0">
                <h2 class="order_title">заказ наряд на выполнение хирургического шаблона</h2>
            </div>
            <div class="col mt-3 d-flex justify-content-end">
                <img class="logo-img" src="../assets/logo.png" alt="">
            </div>
        </div>

        <div class="order__group-first">
            <div class="row">
                <div class="mt-2 col-6 p-0">
                    <h3 class="group__title ">1. Общие данные:</h3>
                    <div>
                        <div class="text__under text__bold-green">
                            Стоматологическая
                        </div>
                        <div class="d-flex align-items-end">
                            <div class="text__under text__bold-green">
                                клиника:
                            </div>
                            <div class="ms-3 mt-0 mb-1 under__line-green"><?=$generalNameOfHospital?></div>
                        </div>

                        <div class="d-flex align-items-end">
                            <div class="text__under text__bold-green mt-1">Дата:
                            </div>
                            <div class="ms-3 mt-0 mb-1 under__line-green"><?=$generalDate?></div>
                        </div>
                        <div class="d-flex align-items-end">
                            <div class="text__under text__bold-green mt-1">
                                Врач:
                            </div>
                            <div class="ms-3 mt-0 mb-1 under__line-green"><?=$generalNameDoctor?></div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end">
                            <div class="text__under text__bold-green mt-1">
                                ФИО пациента:
                            </div>
                            <div class="ms-3 mt-0 mb-1 under__line-green"><?=$generalFIOPatient?></div>
                        </div>

                        <div class="d-flex text-nowrap align-items-end">
                            <div class="me-6">
                                <label class="label__text text__bold-green ms-0 mt-1" for="M">М</label>
                                <input class="me-3" type="checkbox" id="M" value="M" <?= $sex === "M" ? "checked" : ""?>>

                                <label class="label__text text__bold-green" for="W">Ж</label>
                                <input type="checkbox" id="W" value="W" <?= $sex === "W" ? "checked" : ""?>>
                            </div>
                            <div class="ms-3 mt-0 mb-1 under__line-green"></div>
                        </div>
                    </div>
                </div>
                <div class="col ms-3 mt-2">
                    <div>
                        <h3 class="group__title">7. Цвет зубов - передняя группа</h3>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Верхняя треть</p>
                            <div class="ms-3 mt-0 under__line-third"><?= $toothColorFrontTop ?></div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Средняя треть</p>
                            <div class="ms-3 mt-0 under__line-third"><?= $toothColorFrontMiddle ?></div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Нижняя треть</p>
                            <div class="ms-3 mt-0 under__line-third"> <?= $toothColorFrontBottom ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="order__group-third mt-3">
            <div class="row">
                <div class="col-6 p-0 m-0">
                    <div class="">
                        <h3 class="group__title mt-4">2. Виды работ:</h3>
                        <table class="order__form-table" id="">
                            <thead>
                            <tr>
                                <th class="text__under pt-0 pb-0 pe-1">Вид работы</th>
                                <th class="text__under pt-0 pb-0 pe-1">Кол-во</th>
                                <th class="text__under pt-0 pb-0 pe-1">Дата визита</th>
                                <th class="text__under pt-0 pb-0 pe-1">Время</th>
                            </tr>
                            </thead>
                            <tbody class="">
                            <?php foreach ($table as $array): ?>
                            <tr class="work__types">
                                <td class="pt-0 pb-0 pe-1"><input class="text__under td__input" type="text" name="tableType0" value="<?= $array[0]?>"></td>
                                <td class="pt-0 pb-0 pe-1"><input class="text__under td__input" type="text" name="tableNum0" value="<?= $array[1]?>"></td>
                                <td class="pt-0 pb-0 pe-1"><input class="text__under td__input" type="text" name="tableDate0" value="<?= $array[2]?>" ></td>
                                <td class="pt-0 pb-0 pe-1"><input class="text__under td__input" type="text" name="tableTime0" value="<?= $array[3]?>" placeholder="чч:мм"></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-5">
                        <h3 class="group__title mt-5 text-nowrap">3. Схема протезирования</h3>
                        <div class="tooth-schema">
                            <img src="../assets/schema@2x.png" alt="" class="tooth__image">
                            <div class="tooth-checkboxes">
                                <div class="tooth">
                                    <input type="checkbox" value="1" id="tooth-1" name="tooth[]" class="tooth__checkbox" <?= in_array("1", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-1" class="tooth__mark"></label>
                                    <input type="checkbox" value="1-2" id="tooth-link-1" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("1-2", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-1" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="2" id="tooth-2" name="tooth[]" class="tooth__checkbox" <?= in_array("2", $tooth ) ? "checked" : ""?>>
                                    <label for="tooth-2" class="tooth__mark"></label>
                                    <input type="checkbox" value="2-3" id="tooth-link-2" name="tooth_link[]" class="tooth__checkbox" <?= in_array("2-3", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-2" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="3" id="tooth-3" name="tooth[]" class="tooth__checkbox" <?= in_array("3", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-3" class="tooth__mark"></label>
                                    <input type="checkbox" value="3-4" id="tooth-link-3" name="tooth_link[]" class="tooth__checkbox" <?= in_array("3-4", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-3" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="4" id="tooth-4" name="tooth[]" class="tooth__checkbox"  <?= in_array("4", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-4" class="tooth__mark"></label>
                                    <input type="checkbox" value="4-5" id="tooth-link-4" name="tooth_link[]" class="tooth__checkbox" <?= in_array("4-5", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-4" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="5" id="tooth-5" name="tooth[]" class="tooth__checkbox" <?= in_array("5", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-5" class="tooth__mark"></label>
                                    <input type="checkbox" value="5-6" id="tooth-link-5" name="tooth_link[]" class="tooth__checkbox" <?= in_array("5-6", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-5" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="6" id="tooth-6" name="tooth[]" class="tooth__checkbox"  <?= in_array("6", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-6" class="tooth__mark"></label>
                                    <input type="checkbox" value="6-7" id="tooth-link-6" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("6-7", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-6" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="7" id="tooth-7" name="tooth[]" class="tooth__checkbox" <?= in_array("7", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-7" class="tooth__mark"></label>
                                    <input type="checkbox" value="7-8" id="tooth-link-7" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("7-8", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-7" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="8" id="tooth-8" name="tooth[]" class="tooth__checkbox"  <?= in_array("8", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-8" class="tooth__mark"></label>
                                    <input type="checkbox" value="8-9" id="tooth-link-8" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("8-9", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-8" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="9" id="tooth-9" name="tooth[]" class="tooth__checkbox" <?= in_array("9", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-9" class="tooth__mark"></label>
                                    <input type="checkbox" value="9-10" id="tooth-link-9" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("9-10", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-9" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="10" id="tooth-10" name="tooth[]" class="tooth__checkbox" <?= in_array("10", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-10" class="tooth__mark"></label>
                                    <input type="checkbox" value="10-11" id="tooth-link-10" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("10-11", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-10" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="11" id="tooth-11" name="tooth[]" class="tooth__checkbox"  <?= in_array("11", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-11" class="tooth__mark"></label>
                                    <input type="checkbox" value="11-12" id="tooth-link-11" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("11-12", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-11" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="12" id="tooth-12" name="tooth[]" class="tooth__checkbox"  <?= in_array("12", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-12" class="tooth__mark"></label>
                                    <input type="checkbox" value="12-13" id="tooth-link-12" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("12-13", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-12" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="13" id="tooth-13" name="tooth[]" class="tooth__checkbox" <?= in_array("13", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-13" class="tooth__mark"></label>
                                    <input type="checkbox" value="13-14" id="tooth-link-13" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("13-14", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-13" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="14" id="tooth-14" name="tooth[]" class="tooth__checkbox" <?= in_array("14", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-14" class="tooth__mark"></label>
                                    <input type="checkbox" value="14-15" id="tooth-link-14" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("14-15", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-14" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="15" id="tooth-15" name="tooth[]" class="tooth__checkbox"  <?= in_array("15", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-15" class="tooth__mark"></label>
                                    <input type="checkbox" value="15-16" id="tooth-link-15" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("15-16", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-15" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="16" id="tooth-16" name="tooth[]" class="tooth__checkbox" <?= in_array("16", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-16" class="tooth__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="17" id="tooth-17" name="tooth[]" class="tooth__checkbox"  <?= in_array("17", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-17" class="tooth__mark"></label>
                                    <input type="checkbox" value="17-18" id="tooth-link-17" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("17-18", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-17" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="18" id="tooth-18" name="tooth[]" class="tooth__checkbox" <?= in_array("18", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-18" class="tooth__mark"></label>
                                    <input type="checkbox" value="18-19" id="tooth-link-18" name="tooth_link[]" class="tooth__checkbox" <?= in_array("18-19", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-18" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="19" id="tooth-19" name="tooth[]" class="tooth__checkbox"  <?= in_array("19", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-19" class="tooth__mark"></label>
                                    <input type="checkbox" value="19-20" id="tooth-link-19" name="tooth_link[]" class="tooth__checkbox" <?= in_array("19-20", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-19" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="20" id="tooth-20" name="tooth[]" class="tooth__checkbox"  <?= in_array("20", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-20" class="tooth__mark"></label>
                                    <input type="checkbox" value="20-21" id="tooth-link-20" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("20-21", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-20" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="21" id="tooth-21" name="tooth[]" class="tooth__checkbox"  <?= in_array("21", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-21" class="tooth__mark"></label>
                                    <input type="checkbox" value="21-22" id="tooth-link-21" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("21-22", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-21" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="22" id="tooth-22" name="tooth[]" class="tooth__checkbox" <?= in_array("22", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-22" class="tooth__mark"></label>
                                    <input type="checkbox" value="22-23" id="tooth-link-22" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("22-23", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-22" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="23" id="tooth-23" name="tooth[]" class="tooth__checkbox" <?= in_array("23", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-23" class="tooth__mark"></label>
                                    <input type="checkbox" value="23-24" id="tooth-link-23" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("23-24", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-23" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="24" id="tooth-24" name="tooth[]" class="tooth__checkbox"  <?= in_array("24", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-24" class="tooth__mark"></label>
                                    <input type="checkbox" value="24-25" id="tooth-link-24" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("24-25", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-24" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="25" id="tooth-25" name="tooth[]" class="tooth__checkbox"  <?= in_array("25", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-25" class="tooth__mark"></label>
                                    <input type="checkbox" value="25-26" id="tooth-link-25" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("25-26", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-25" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="26" id="tooth-26" name="tooth[]" class="tooth__checkbox"  <?= in_array("26", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-26" class="tooth__mark"></label>
                                    <input type="checkbox" value="26-27" id="tooth-link-26" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("26-27", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-26" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="27" id="tooth-27" name="tooth[]" class="tooth__checkbox"  <?= in_array("27", $tooth)  ? "checked" : ""?>>
                                    <label for="tooth-27" class="tooth__mark"></label>
                                    <input type="checkbox" value="27-28" id="tooth-link-27" name="tooth_link[]" class="tooth__checkbox" <?= in_array("27-28", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-27" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="28" id="tooth-28" name="tooth[]" class="tooth__checkbox"  <?= in_array("28", $tooth)  ? "checked" : ""?>>
                                    <label for="tooth-28" class="tooth__mark"></label>
                                    <input type="checkbox" value="28-29" id="tooth-link-28" name="tooth_link[]" class="tooth__checkbox" <?= in_array("28-29", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-28" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="29" id="tooth-29" name="tooth[]" class="tooth__checkbox"  <?= in_array("29", $tooth)  ? "checked" : ""?>>
                                    <label for="tooth-29" class="tooth__mark"></label>
                                    <input type="checkbox" value="29-30" id="tooth-link-29" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("29-30", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-29" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="30" id="tooth-30" name="tooth[]" class="tooth__checkbox" <?= in_array("30", $tooth)  ? "checked" : ""?> >
                                    <label for="tooth-30" class="tooth__mark"></label>
                                    <input type="checkbox" value="30-31" id="tooth-link-30" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("30-31", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-30" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="31" id="tooth-31" name="tooth[]" class="tooth__checkbox" <?= in_array("31", $tooth ) ? "checked" : ""?> >
                                    <label for="tooth-31" class="tooth__mark"></label>
                                    <input type="checkbox" value="31-32" id="tooth-link-31" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("31-32", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-31" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="32" id="tooth-32" name="tooth[]" class="tooth__checkbox" <?= in_array("32", $tooth)  ? "checked" : ""?> >
                                    <label for="tooth-32" class="tooth__mark"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="group__title mt-5"> 4. Оттиски</h3>
                    <div>
                        <input type="checkbox" id="impression_analog" value="analog" <?= $impressions === "analog" ? "checked" : ""?>>
                        <label class="label__text top-margin-3mm me-5" for="impression">Аналоговые</label>
                        <input type="checkbox" id="impression_digital" value="digital" <?= $impressions === "digital" ? "checked" : ""?>>
                        <label class="label__text top-margin-3mm" for="impression_digital">Цифровые</label>
                    </div>


                    <h3 class="group__title mt-5">5. Материал:</h3>
                    <div class="row">
                        <div class="col-4">
                            <input type="checkbox" id="material-first" <?= in_array("Co-Cr", $materials) ? "checked" : ""?>>
                            <label class="label__text me-1 ms-0 top-margin-3mm" for="material-first">Co-Cr</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox" id="material-second" <?= in_array("Zr-O2", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="material-second">ZrO²</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="checkbox" id="material-third" <?= in_array("Prettau", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="material-third">Prettau</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox" id="material-fourth" <?= in_array("E-max", $materials) ? "checked" : ""?>>
                            <label class="label__text me-1 ms-0 top-margin-3mm" for="material-fourth">E-max</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox" id="material-fifth" <?= in_array("Ti", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="material-fifth">Ti</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="checkbox" id="material-sixth" <?= in_array("Акрил/РММА", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="material-sixth">Акрил/РММА</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox" id="material-seventh" <?= in_array("Композит", $materials) ? "checked" : ""?>>
                            <label class="label__text me-1 ms-0 top-margin-3mm" for="material-seventh">Композит</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox" id="material-eighth" <?= in_array("Acry Free", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="material-eighth">Acry Free</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="checkbox" id="material-ninth" <?= in_array("Нейлон", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="material-ninth">Нейлон</label>
                        </div>
                    </div>
                    <h3 class="group__title mt-5">6. Цвет зубов - боковая группа</h3>
                    <div class="d-flex text-nowrap align-items-end">
                        <p class="text__under top-margin-4mm">Цвет</p>
                        <div class="ms-3 mt-0 under__line-third"><?= $sideGroup?></div>
                    </div>
                </div>

                <div class="col ms-4 pe-0">
                    <h3 class="group__title mt-4">8. Режущий край</h3>
                    <div class="row">
                        <div class="col-4">
                            <input type="radio" name="sharpEdge" id="sharpEdgeWhite" value="white" <?= $sharpEdge === "white" ? "checked" : ""?>>
                            <label class="label__text" for="sharpEdgeWhite">Беловатый</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="radio"  name="sharpEdge" id="sharpEdgeBlue" value="blue" <?= $sharpEdge === "blue" ? "checked" : ""?>>
                            <label class="label__text" for="sharpEdgeBlue">Голубоватый</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="radio" name="sharpEdge" id="sharpEdgeGray" value="gray" <?= $sharpEdge === "gray" ? "checked" : ""?>>
                            <label class="label__text" for="sharpEdgeGray">Беловатый</label>
                        </div>
                        <div class="col d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Свое значение</p>
                            <div class="ms-3 mt-0 under__line-third"><?= $sharpEdgeOther?></div>
                        </div>
                    </div>

                    <h3 class="group__title mt-5">9. Цвет культи</h3>
                    <div class="d-flex text-nowrap align-items-end">
                        <p class="text__under top-margin-4mm">Цвет</p>
                        <div class="ms-3 mt-0 under__line-third"><?= $cult?></div>
                    </div>
                    <h3 class="group__title mt-5">10. Цвет зубов - передняя группа</h3>
                    <div class="row ms-3">
                        <div class="col-3">
                            <input type="radio" name="shapeTooth" id="shape__first" value="triangle" <?= $shapeTooth === "triangle" ? "checked" : ""?>>
                            <label for="shape__first" class="shape shape-item" style="background-image: url('../assets/shape-1.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeTooth" id="shape__second" value="circle" <?= $shapeTooth === "circle" ? "checked" : ""?>>
                            <label for="shape__second" class="shape shape-item" style="background-image: url('../assets/shape-2.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeTooth" id="shape__third" value="square" <?= $shapeTooth === "square" ? "checked" : ""?>>
                            <label for="shape__third" class="shape shape-item shape-item" style="background-image: url('../assets/shape-3.svg')"></label>
                        </div>
                    </div>
                    <h3 class="group__title mt-5">11. Форма промывного пространства</h3>
                    <div class="row ms-3">
                        <div class="col-3">
                            <input type="radio" name="shapeProm" id="shape__prom-first" value="prom-1" <?= $shapeProm === "prom-1" ? "checked" : ""?>>
                            <label for="shape__prom-first" class="shape shape__prom-item" style="background-image: url('../assets/shape-prom-1.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeProm" id="shape__prom-second" value="prom-2" <?= $shapeProm === "prom-2" ? "checked" : ""?>>
                            <label for="shape__prom-second" class="shape shape__prom-item" style="background-image: url('../assets/shape-prom-2.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeProm" id="shape__prom-third" value="prom-3"<?= $shapeProm === "prom-3" ? "checked" : ""?>>
                            <label for="shape__prom-third" class="shape shape__prom-item" style="background-image: url('../assets/shape-prom-3.svg')"></label>
                        </div>
                    </div>
                    <h3 class="group__title mt-5">12. Контур формирования десеневого края</h3>
                    <div class="row ms-3">
                        <div class="col-3">
                            <input type="radio" name="shapeDes" id="shape__des-first" value="des-1" <?= $shapeDes === "des-1" ? "checked" : "" ?>>
                            <label for="shape__des-first" class="shape shape__des-item" style="background-image: url('../assets/shape-des-1.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeDes" id="shape__des-second" value="des-2" <?= $shapeDes === "des-2" ? "checked" : "" ?>>
                            <label for="shape__des-second" class="shape shape__des-item" style="background-image: url('../assets/shape-des-2.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeDes" id="shape__des-third" value="des-3" <?= $shapeDes === "des-3" ? "checked" : "" ?>>
                            <label for="shape__des-third" class="shape shape__des-item" style="background-image: url('../assets/shape-des-3.svg')"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order__group-fourth">
            <h2 class="order_title text-uppercase mt-5">комментарии к работе:</h2>
            <p class="mt-3 under__line-green under__line-green-down"><span class="under__line-green-text"><?= $comments?></span></p>
        </div>
    </div>
</body>
</html>