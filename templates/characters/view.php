<?php

/**
 * @var \MirfeesFrameWork\Models\Characters\Character $character
 * @var \MirfeesFrameWork\Models\Stats\Stats $stats
 * @var \MirfeesFrameWork\Models\AttractionSkills\AttractionSkills $attractionSkills
 * @var \MirfeesFrameWork\Models\BodySkills\BodySkills $bodySkills
 * @var \MirfeesFrameWork\Models\CoolSkills\CoolSkills $coolSkills
 * @var \MirfeesFrameWork\Models\SpecialSkills\SpecialSkills $specialSkills
 * @var \MirfeesFrameWork\Models\EmpathySkills\EmpathySkills $empathySkills
 * @var \MirfeesFrameWork\Models\IntelligenceSkills\IntelligenceSkills  $intelligenceSkills
 * @var \MirfeesFrameWork\Models\ReflexSkills\ReflexSkills $reflexSkills
 * @var \MirfeesFrameWork\Models\TechSkills\TechSkills $techSkills
 * @var \MirfeesFrameWork\Models\Users\User $user
 */

?>


<!doctype html>
<html lang="en">
<?php include __DIR__ . '/../head.php' ?>
<body>
<main>
    <?php include __DIR__ . '/../header.php' ?>

    <section class="character-update">
        <div class="character-update__container">
            <div class="container">
                <form class="character-update__wrapper view">
                    <div class="character-update__tabs">
                        <a href="javascript:;" class="character-update__tab button active" data-tab-id="tab_1">Имя и навыки</a>
                        <a href="javascript:;" class="character-update__tab button" data-tab-id="tab_2">О персонаже</a>
                        <a href="javascript:;" class="character-update__tab button" data-tab-id="tab_3">Инвентарь и броня</a>
                        <a href="javascript:;" class="character-update__tab button" data-tab-id="tab_4">Скилы</a>
                    </div>
                    <div class="character-update__content general active" id="tab_1">
                        <div class="character-update__item">
                            <div class="character-update__row">
                                <img src="<?php echo $character->getImg()?>" alt="">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Имя или кличка</div>
                                <input type="text" name="name" value="<?php echo $character->getName()?>" required class="character-update__input character-update__input_name">
                            </div>
                            <div class="character-update__row role">
                                <div class="character-update__label">Роль: <?php echo $character->getRole()?></div>

                            </div>
                        </div>
                        <div class="character-update__item">
                            <div class="character-update__row">
                                <div class="character-update__label">Интеллект</div>
                                <input required type="number" value="<?php echo $stats->getIntelligence()?>" min="2" name="intelligence" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Рефлекс</div>
                                <input required type="number" value="<?php echo $stats->getReflex()?>" min="2" name="reflex" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Техника</div>
                                <input required type="number" value="<?php echo $stats->getTechnic()?>" min="2" name="technic" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Хладнокровие</div>
                                <input required type="number" value="<?php echo $stats->getCool()?>" min="2" name="cool" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Привлекательность</div>
                                <input required type="number" value="<?php echo $stats->getAttraction()?>" min="2" name="attraction" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Удача</div>
                                <input required type="number" value="<?php echo $stats->getLuck()?>" min="2" name="luck" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Скорость движения</div>
                                <input required type="number" value="<?php echo $stats->getMovementAllowance()?>" min="2" name="movement_allowance" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Тело</div>
                                <input required type="number" value="<?php echo $stats->getBody()?>" min="2" name="body" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Эмпатия</div>
                                <input required type="number" value="<?php echo $stats->getEmpathy()?>" min="2" name="empathy" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Бег</div>
                                <input required type="number" value="<?php echo $stats->getRun()?>" min="2" name="run" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Прыжок</div>
                                <input required type="number" value="<?php echo $stats->getLeap()?>" min="2" name="leap" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Поднятие</div>
                                <input required type="number" value="<?php echo $stats->getLift()?>" min="2" name="lift" class="character-update__input">
                            </div>
                        </div>
                        <div class="character-update__item">
                            <div class="character-update__row">
                                <div class="character-update__label">Репутация</div>
                                <input type="number" value="<?php echo $character->getReputation()?>" name="reputation" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Текущий IP</div>
                                <input type="number" value="<?php echo $character->getCurrentIp()?>" name="current_ip" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Человечность</div>
                                <input required type="number" value="<?php echo $character->getHumanity()?>" name="humanity" class="character-update__input">
                            </div>
                        </div>
                    </div>
                    <div class="character-update__content about" id="tab_2">
                        <div class="character-update__item">
                            <div class="character-update__row">
                                <div class="character-update__label">Стиль</div>
                                <textarea name="style" class="character-update__text-area" placeholder="Как выглядит ваш персонаж?"><?php echo $character->getStyle()?></textarea>
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Семейное прошлое</div>
                                <textarea name="family_background" class="character-update__text-area" placeholder="Расскажите о семейном прошлом персонажа"><?php echo $character->getFamilyBackground()?></textarea>
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Сколько братьев и сестер у персонажа?</div>
                                <input type="number" value="<?php echo $character->getSiblings()?>" class="character-update__input">
                            </div>
                            <div class="character-update__row">
                                <div class="character-update__label">Жизненные события</div>
                                <textarea name="lifepath" class="character-update__text-area" placeholder="Какие события происходили с 16 лет по настоящее время?"><?php echo $character->getLifepath()?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="character-update__content gear" id="tab_3">
                        <div class="character-update__item">
                            <div class="character-update__row">
                                <div class="character-update__label">Киберимпланты</div>
                                <textarea name="cyberimplants" class="character-update__text-area" placeholder="Импланты"><?php echo $character->getCyberimplants()?></textarea>
                            </div>
                        </div>
                        <div class="character-update__item">
                            <div class="character-update__row">
                                <div class="character-update__label">Вещи (инвентарь)</div>
                                <textarea name="cyberimplants" class="character-update__text-area" placeholder="Какие вещи есть у персонажа?"><?php echo $character->getGear()?></textarea>
                            </div>
                        </div>
                        <div class="character-update__item">
                            <div class="character-update__row">
                                <div class="character-update__label">Вооружение и броня</div>
                                <textarea name="weapons_armor" class="character-update__text-area" placeholder="Какие оружие и броня есть у персонажа?"><?php echo $character->getWeaponsArmor()?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="character-update__content skills" id="tab_4">
                        <div class="wrap-buttons">
                            <a href="javascript:;" class="button unwrap">Свернуть все</a>
                            <a href="javascript:;" class="button wrap">Развернуть все</a>
                        </div>

                        <div class="character-update__item">
                            <div class="character-update__accordion">
                                <a href="javascript:;" class="character-update__accordion-title">Специальные возможности</a>
                                <div class="character-update__accordion-content">
                                    <div class="character-update__row">
                                        <div class="character-update__label">Авторитет</div>
                                        <input type="number" name="authority" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Харизматичное лидерство</div>
                                        <input type="number" name="charismatic_leadership" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Чувство боя</div>
                                        <input type="number" name="combat_sense" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Семья</div>
                                        <input type="number" name="family" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Интерфейс</div>
                                        <input type="number" name="interface" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Аварийный ремонт</div>
                                        <input type="number" name="jury_rig" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Правдоподобность</div>
                                        <input type="number" name="credibility" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Медицина</div>
                                        <input type="number" name="medical_tech" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Ресурсы</div>
                                        <input type="number" name="resources" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Блат</div>
                                        <input type="number" name="streetdeal" min="0" value="0" class="character-update__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="character-update__item">
                            <div class="character-update__accordion">
                                <a href="javascript:;" class="character-update__accordion-title">Привлекательность</a>
                                <div class="character-update__accordion-content">
                                    <div class="character-update__row">
                                        <div class="character-update__label">Внешний вид</div>
                                        <input type="number" name="personal_grooming" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Гардероб</div>
                                        <input type="number" name="wardrobe_style" min="0" value="0" class="character-update__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="character-update__item">
                            <div class="character-update__accordion">
                                <a href="javascript:;" class="character-update__accordion-title">Телосложение</a>
                                <div class="character-update__accordion-content">
                                    <div class="character-update__row">
                                        <div class="character-update__label">Выносливость</div>
                                        <input type="number" name="endurance" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Проявление силы</div>
                                        <input type="number" name="strength_feat" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Плавание</div>
                                        <input type="number" name="swimming" min="0" value="0" class="character-update__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="character-update__item">
                            <div class="character-update__accordion">
                                <a href="javascript:;" class="character-update__accordion-title">Хладнокровие</a>
                                <div class="character-update__accordion-content">
                                    <div class="character-update__row">
                                        <div class="character-update__label">Допрос</div>
                                        <input type="number" name="interrogation" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Угрожать</div>
                                        <input type="number" name="intimidate" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Красноречие</div>
                                        <input type="number" name="oratoty" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Устойчивость к ядам, пыткам</div>
                                        <input type="number" name="resist_to_drugs" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Знание улиц</div>
                                        <input type="number" name="streetwise" min="0" value="0" class="character-update__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="character-update__item">
                            <div class="character-update__accordion">
                                <a href="javascript:;" class="character-update__accordion-title">Интеллект</a>
                                <div class="character-update__accordion-content">
                                    <div class="character-update__row">
                                        <div class="character-update__label">Бухгалтерия</div>
                                        <input type="number" name="accounting" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Антропология</div>
                                        <input type="number" name="anthropology" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Замечать, узнавать</div>
                                        <input type="number" name="awareness_notice" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Биология</div>
                                        <input type="number" name="biology" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Химия</div>
                                        <input type="number" name="chemistry" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Ботаника</div>
                                        <input type="number" name="botany" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Композиция</div>
                                        <input type="number" name="composition" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Диагностика болезней</div>
                                        <input type="number" name="diagnosis_illness" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Образование</div>
                                        <input type="number" name="education" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Азартные игры</div>
                                        <input type="number" name="gamble" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Геология</div>
                                        <input type="number" name="geology" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Прятаться/избегать</div>
                                        <input type="number" name="hide_evade" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">История</div>
                                        <input type="number" name="history" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Знание языка 1</div>
                                        <input type="number" name="lang_know_one" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Знание языка 2</div>
                                        <input type="number" name="lang_know_two" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Знание языка 3</div>
                                        <input type="number" name="lang_know_three" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Использование библиотек</div>
                                        <input type="number" name="library_search" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Математика</div>
                                        <input type="number" name="math" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Физика</div>
                                        <input type="number" name="physics" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Программирование</div>
                                        <input type="number" name="programming" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Слежка/шпионаж</div>
                                        <input type="number" name="shadow_track" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Игра на бирже</div>
                                        <input type="number" name="stock_market" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Экспертность (в чем-то)</div>
                                        <input type="number" name="expert" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Знание сети</div>
                                        <input type="number" name="system_knowledge" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Преподавание</div>
                                        <input type="number" name="teaching" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Выживание в дикой природе</div>
                                        <input type="number" name="wild_survival" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Зоология</div>
                                        <input type="number" name="zoology" min="0" value="0" class="character-update__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="character-update__item">
                            <div class="character-update__accordion">
                                <a href="javascript:;" class="character-update__accordion-title">Рефлекс</a>
                                <div class="character-update__accordion-content">
                                    <div class="character-update__row">
                                        <div class="character-update__label">Лук/арбалет</div>
                                        <input type="number" name="archery" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Атлетика</div>
                                        <input type="number" name="athletics" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Борьба</div>
                                        <input type="number" name="brawling" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Танцы</div>
                                        <input type="number" name="dance" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Уклонения</div>
                                        <input type="number" name="dodge_escape" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Вождение</div>
                                        <input type="number" name="driving" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Фехтование</div>
                                        <input type="number" name="fencing" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Пистолет </div>
                                        <input type="number" name="handgun" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Тяжелое оружие</div>
                                        <input type="number" name="heavy_weapon" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Боевое искусство 1</div>
                                        <input type="number" name="material_arts_one" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Боевое искусство 2</div>
                                        <input type="number" name="material_arts_two" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Боевое искусство 3</div>
                                        <input type="number" name="material_arts_three" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Ближний бой</div>
                                        <input type="number" name="melee" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Мотоциклы</div>
                                        <input type="number" name="motorcycle" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Управление большегрузом</div>
                                        <input type="number" name="heavy_machine" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Пилотирование вертолетом</div>
                                        <input type="number" name="pilot_gyro" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Пилотирование самолетом</div>
                                        <input type="number" name="pilot_fix_wing" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Пилотирование дирижаблем</div>
                                        <input type="number" name="pilot_dirigible" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Пилотирование AV</div>
                                        <input type="number" name="pilot_av" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Ружья/винтовки</div>
                                        <input type="number" name="riffle" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Скрытность</div>
                                        <input type="number" name="stealth" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Пистолет-пулемет</div>
                                        <input type="number" name="submachinegun" min="0" value="0" class="character-update__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="character-update__item">
                            <div class="character-update__accordion">
                                <a href="javascript:;" class="character-update__accordion-title">Техника</a>
                                <div class="character-update__accordion-content">
                                    <div class="character-update__row">
                                        <div class="character-update__label">Техника самолета</div>
                                        <input type="number" name="aero_tech" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Техника AV</div>
                                        <input type="number" name="av_tech" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Базовая техника</div>
                                        <input type="number" name="basic_tech" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Управление криокамерой</div>
                                        <input type="number" name="cryotank_operation" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Техника кибердеков</div>
                                        <input type="number" name="cyberdeck" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Кибертехнология</div>
                                        <input type="number" name="cybertech" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Пиротехника</div>
                                        <input type="number" name="demolitions" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Маскировка</div>
                                        <input type="number" name="disguise" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Электроника</div>
                                        <input type="number" name="electronics" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Электронная безопасность</div>
                                        <input type="number" name="electronics_security" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Первая помощь</div>
                                        <input type="number" name="first_aid" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Подделка</div>
                                        <input type="number" name="forgery" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Технология вертолета</div>
                                        <input type="number" name="gyro_tech" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Рисование</div>
                                        <input type="number" name="paint_or_draw" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Кино-фотосъемка</div>
                                        <input type="number" name="photo_and_film" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Фармацевтика</div>
                                        <input type="number" name="pharmacuticals" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Вскрытие замков</div>
                                        <input type="number" name="pick_lock" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Кража</div>
                                        <input type="number" name="pick_pocket" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Игра на инструменте</div>
                                        <input type="number" name="play_instruments" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Оружейная технология</div>
                                        <input type="number" name="weaponsmith" min="0" value="0" class="character-update__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="character-update__item">
                            <div class="character-update__accordion">
                                <a href="javascript:;" class="character-update__accordion-title">Эмпатия</a>
                                <div class="character-update__accordion-content">
                                    <div class="character-update__row">
                                        <div class="character-update__label">Понимание людей</div>
                                        <input type="number" name="human_perception" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Интервью</div>
                                        <input type="number" name="interview" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Базовая техника</div>
                                        <input type="number" name="basic_tech" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Управление криокамерой</div>
                                        <input type="number" name="cryotank_operation" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Лидерство</div>
                                        <input type="number" name="leadership" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Соблазнение</div>
                                        <input type="number" name="seduction" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Хорошие манеры</div>
                                        <input type="number" name="social" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Убеждение</div>
                                        <input type="number" name="persuasion_fast_talk" min="0" value="0" class="character-update__input">
                                    </div>
                                    <div class="character-update__row">
                                        <div class="character-update__label">Выступать</div>
                                        <input type="number" name="perform" min="0" value="0" class="character-update__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php if(!empty($user) && $user->getId() == $character->getUserId()): ?>
        <a href="/characters/<?= $character->getId() ?>/edit" class="fixed-button button">Редактировать</a>
    <?php endif; ?>
</main>
<script src="/scripts.js"></script>
</body>
</html>