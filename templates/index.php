

<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное
        снаряжение.</p>
    <ul class="promo__list">
        <?php foreach ($categories as $key => $value): ?>
            <li>
                <a class="promo__link" href="pages/all-lots.html"><?= $value ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <?php foreach ($items as $key => $value): ?>

            <li class="lots__item lot">
                <div class="lot__image">
                    <img src='<?= $value["Url картинки"] ?>' width="350" height="260"
                         alt=<?= $value["Категория"] ?>>
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= $value["Категория"] ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= $value["Название"] ?></a>
                    </h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= getPrice($value["Цена"]) ?></span>
                        </div>
                        <div class="lot__timer timer">
                            <?= $estimateTime ?>
                            <span class="lot__cost"><?=  date('H i')?></span>
                            <span class="lot__cost"><?=  date('d H i',$tomorrow)?></span>

                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
