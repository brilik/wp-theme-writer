<?php
global $themeAR, $debugAR;

ar_the_view("head");

//ar_the_view("page-main__section");

$about_params = array(
    'description' => '<p>Если ты не влюблён, то тебя всё будет раздражать в ней, даже то, как она моргает.
                            Слишком быстро или медленно, неважно, повод придраться всегда найдётся. Ты
                            должен иметь терпение, любовью движет не страсть, желание или ещё что-то, а
                            именно терпение.</p>
                        <p>Если ты не влюблён, то тебя всё будет раздражать в ней, даже то, как она моргает.
                            Слишком быстро или медленно, неважно, повод придраться всегда найдётся. Ты
                            должен иметь терпение, любовью движет не страсть, желание или ещё что-то, а
                            именно терпение.</p>
                        <p>Если ты не влюблён, то тебя всё будет раздражать в ней, даже то, как она моргает.
                            Слишком быстро или медленно, неважно, повод придраться всегда найдётся. Ты
                            должен иметь терпение, любовью движет не страсть, желание или ещё что-то, а
                            именно терпение.</p>
                        <p>Если ты не влюблён, то тебя всё будет раздражать в ней, даже то, как она моргает.
                            Слишком быстро или медленно, неважно, повод придраться всегда найдётся. Ты
                            должен иметь терпение, любовью движет не страсть, желание или ещё что-то, а
                            именно терпение.</p>
                        <p>Если ты не влюблён, то тебя всё будет раздражать в ней, даже то, как она моргает.
                            Слишком быстро или медленно, неважно, повод придраться всегда найдётся. Ты
                            должен иметь терпение, любовью движет не страсть, желание или ещё что-то, а
                            именно терпение.</p>
                        <p>Если ты не влюблён, то тебя всё будет раздражать в ней, даже то, как она моргает.
                            Слишком быстро или медленно, неважно, повод придраться всегда найдётся. Ты
                            должен иметь терпение, любовью движет не страсть, желание или ещё что-то, а
                            именно терпение.</p>',
    'img' => array(
        'src' => '/assets/img/image2.jpg'
    ),
    'title' => 'Немножко <br/>обо мне',
    'sign' => 'Всегда ваша<br/>Сюзанна Лотокова'
);

ar_the_view('page-about__section', $about_params);

//ar_the_view('page-stories__section');

$story_params = array(
    'title' => array(
        'title' => 'За мечту платить не нужно',
        'year' => 2019
    ),
    'excerpt' => 'Краткое описание',
    'desc' => array(
        'mini' => '<p>Если ты не влюблён, то тебя всё будет раздражать в ней, даже то, как она моргает. Слишком быстро или медленно,
                    неважно, повод придраться всегда найдётся. Ты должен иметь терпение, любовью движет не страсть, желание или ещё
                    что-то, а именно терпение.</p>',
        'full' => array(
            '<p>У каждого человека есть недостатки. Идеальных не бывает, а если <br/>они и есть, то их ненавидят именно
                те, кто так отчаянно ищет эту идеальность. Палка о двух концах. Но если быть ближе к реальности, то у
                каждого есть своя фермочка тараканов. Которую мы благополучно холим и лелеем, о борьбе с ними и речи
                быть не может. Ведь это родные букашки, как их можно прогнать и оставить без крова? Именно таким
                человеком и был Флойд Гилмор. Его тараканья ферма процветала и пустила прочные корни, но мириться с
                согражданами других голов его тараканы не собирались, а всячески старались изменить и привить свой уклад
                ведения хозяйства. Флойд - добродушный и открытый парень.</p>
            <p>Он наивен, но нетерпелив и вспыльчив. В свои тридцать два года не теряет веры в мечту стать главным
                архитектором. Хоть и имеет образование в другом ключе. Мечтать-то никто не запрещает, вот он вдоволь и
                наслаждался процессом реализации своих целей в голове. <br/>У Флойда были отношения с девушками, но всё
                прекращалось, стоило перейти на более серьёзный этап. Он искал добрую, красивую и нежную девушку. Чтобы
                она была женственна и во всём поддерживала его. Он представлял, как зайдёт в кафе, они встретятся
                взглядом, и это будет любовь навеки. Суженая, которая уготована ему судьбой. Все будут видеть его
                избранницу и кусать локти от того, как ему повезло. А сам Флойд уже будет главным архитектором, в их
                отношениях будет нескончаемая страсть, любовь и уважение.</p>',
            '<p>Мечты Флойда были прекрасны. Визуализируя свой мир, по дороге на работу, он становился счастливым и сам
                начинал верить - ещё чуть-чуть всё так и будет. Эти вспышки представления идеальной жизни в скором
                будущем, в реальности делали его очень несчастным. Все девушки, с которыми он встречался, либо были
                слишком деятельные, либо много говорили, или же наоборот, молчали. В них не было того, что он так
                отчаянно желал видеть в своей избраннице. Одна не умела готовить, другая - слишком много времени уделяла
                работе, третья - слишком громко смеялась и не прикрывала рот рукой. Такие очевидные минусы, как считал
                Флойд, не могли соответствовать его избраннице. Поэтому девушки не могли быть долго с Флойдом. Они
                искренне хотели быть идеальными для него. Ходили в спортзал, следили за фигурой, отказывали себе в
                сладостях, следили за поведением в обществе. Но главная ошибка девушек была в том, что они не могли
                влезть в голову к Флойду и переговорить с главнокомандующим тараканом с глазу на глаз. И выяснить, чего
                в конце концов ему не хватает и что он хочет видеть в избраннице.</p>
            <p>Нет, девушки, к их большому сожалению, сделать такого не могли. С друзьями у Флойда тоже было не всё
                гладко. У него были верные и надёжные союзники. Которые всегда были на его стороне, могли от души
                посмеяться, поддержать в трудную минуту и искренне порадоваться в счастливые времена. Но Флойду всё
                равно казалось, что есть в них такие черты характера, с которыми тяжело примириться и быть воистину
                лучшими друзьями. Один много жаловался, другой мечтал построить свой дом на островах и переселиться
                туда. Мечты лучших друзей тоже должны, если не совпадать, то хотя бы быть близки друг к другу. А у него
                с друзьями всё по-другому, наверно, они слишком разные. На его пути ещё будут люди с ним схожие во
                взглядах и отношению к жизни. Флойд искренне верил в это и ждал. Если описать Флойда одним предложением,
                то про него можно сказать, что он из тех людей, который, если случайно сделал ошибку на листе, вырвет
                его и перепишет всё на новый.<br/>Флойд повстречал девушку своей мечты. Она была обворожительно
                прекрасна. Всё то, что он так долго искал в других: женственность, королевские манеры - все
                присутствовало в ней. Но почему-то Флойд не был счастлив, как представлял.</p>',
            '<p>Как оказалось, в его избраннице, не доставало доброты, сострадания. Он был уверен, то с этим можно
                свыкнуться, но ошибся. Его сердце было разбито, ведь эта девушка была олицетворением его идеала. Но
                Флойд не соответствовал её представлениям. Поэтому забрав своё разбитое сердце. Флойд ушёл от неё и
                решил больше не влюбляться. <br/>Сидя на работе, он размышлял о смысле жизни. "Может ему отправиться в
                путешествие, чтобы найти себя?" - думал Флойд. Вдруг он вспомнил о своём дяде Барри, который ведёт
                тренинги по личностному росту. Не долго думая, Флойд взял телефон и записался на тренинг. Он решил, что
                со следующей недели уж точно начнёт жить по-новому.</p>
            <p>Через три дня состоялся тренинг. Билеты были раскуплены ещё за месяц, но благодаря дяде Флойда, ему
                всё-таки нашлось место и бесплатно. Тренинг впечатлил его. Он даже не предполагал, что будет окрылён
                верой, что у него точно всё получится. По окончанию тренинга с чувством трепещущего восторга и гордости
                он подбежал к Барри, чтобы выразить своё восхищение. Но пробиться к нему было довольно трудно. Люди,
                плотным кольцом окружившие Бари, перебивая друг друга, благодарили за такое чудесное преображение.
                Теперь их жизнь изменится, и будет приносить сплошные успехи и позитивные моменты. Дядя Бари слушал их с
                лёгкой полуулыбкой и иногда кивал головой. Флойд медленно пробираясь к нему случайно задел стул и Барри
                удивлённо вскинул брови.Потухшие глаза, усталое выражение лица и глубокие морщины на щеках дяди удивили
                Флойда.</p>
            <p>— Я в восхищении, Барри! Но только вот, пару секунд назад ты весь излучал оптимизм и веру, что же с тобой
                сейчас? - недоумевал Флойд
                <br/>— Эх, - вздохнул он, - это так, излучал. Но, чувствую себя бездарным.
                <br/>— Почему?! - запротестовал Флойд. - Ты был на высоте!
                <br/>— Ты первый раз, я понимаю твоё восхищение. Но, есть кое-что, что очень огорчает меня. Например,
                Флойд, видеть одни и те же лица в третий,четвёртый, пятый раз. после этого мой энтузиазм поубавился, -
                Барри с поникшей головой складывал бумаги в портфель. - И эти же лица приобрели билет на следующий
                тренинг. Деньги – это, безусловно, приятное вознаграждение, но я ведь изначально другую цель
                преследовал. А получается, что теперь просто гребу деньги и не испытываю былого удовлетворения. Всё
                потому, что люди приходят сюда перекочевать.
                <br/>— Что ты имеешь в виду?
                <br/>— А то, что они, как и ты, в первый раз выходили из зала окрылённые, да в целом, они зачастую
                выходят бодрые, с счастливыми лицами, полные надежды и веры. Но ничего не понимают. Не пытаются,
                что-либо изменить, сетуют, ненавидят. Приходя сюда, они заряжаются положительной энергией и опять в то
                же самое болото из которого пришли. Затем им опять всё надоедает, они запачкаются - и ко мне на
                очищение. И так по кругу. Проще говоря, они слышат только то, что хотят слышать.
                <br/>Флойд задумчиво посмотрел на Барри.
                <br/>- Ну да ладно, Флойд! - Барри взял свой портфель и направился к выходу. - Ты-то чего пожаловал,
                может пообедаем вместе? Я знаю один очень хороший ресторан, на высоте птичьего полёта! Там готовят
                обалденно, пальчики оближешь!
                <br/>- Да я не голодный, но кофе с величайшим удовольствием выпью.
                <br/>- Вот и славно!
                <br/>Они зашли в небоскрёб с панорамными окнами. Флойд был приятно удивлён сдержанному и элегантному
                стилю заведения. Весь город был перед ними. Настроение у обоих улучшилось, когда официант поставил две
                больших кружки с ароматным кофе. Они переглянулись и, вдыхая запах кофе, сделали по глотку.</p>'
        )
    ),
    'review' => array(
        'title' => 'Оставьте свой отзыв',
        'text-thanks' => 'Спасибо за Ваш отзыв',
        'form' => array()
    ),
    'slider' => array(
        [
            'href' => '#',
            'imgSrc' => 'img/image3.jpg',
            'imgAlt' => 'gallery-slider-cover-0',
            'title' => 'Вот такой вот парадокс'
        ],
        [
            'href' => '#',
            'imgSrc' => 'img/image4.jpg',
            'imgAlt' => 'gallery-slider-cover-1',
            'title' => 'A Forest Tale'
        ],
        [
            'href' => '#',
            'imgSrc' => 'img/image5.jpg',
            'imgAlt' => 'gallery-slider-cover-2',
            'title' => 'Ultraviolet'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/a6fa42a311fba52cf30b1905c9f814251693d694_vera-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-3',
            'title' => 'What Color Is Your Paradise'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/4ceecb82e544b776fa87451fee7533b9beabf98c_the-prairies-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-4',
            'title' => 'Commercial Mix'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/a8bc3e769ebb56f8200d97410f468155e7fe251a_laguna-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-5',
            'title' => 'Covers'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/7cf10ddcd44dc44be1bec664ad3ac417d80002f4_a-forest-tale-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-6',
            'title' => 'Ultraviolet'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/814b0707b6d9462d3296976dcfa3f94ccfd6a965_ultraviolet-cover-option.jpg',
            'imgAlt' => 'gallery-slider-cover-7',
            'title' => 'Various'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/0e5161041d2ad57d44ae9205d2c72b48c52f9536_what-color-is-your-paradise-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-8',
            'title' => 'What Color Is Your Paradise'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/267f6f70c84df87cc913fe413e0380917ba1ac4d_commercial-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-9',
            'title' => 'A Forest Tale'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/9f2950c7103431af16741a98cf330bb5586b8faa_covers-31.jpg',
            'imgAlt' => 'gallery-slider-cover-10',
            'title' => 'Archives'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/04f6be416adf369675b6a47abe7d8ce998081157_various-cover-option.jpg',
            'imgAlt' => 'gallery-slider-cover-11',
            'title' => 'In The Wild, L\'Officiel Ukraine'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/58bf5c269a040ca5dd61845e265d667191764a66_archives-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-12',
            'title' => ' Bo-kaap, Blocks of Color'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/97fccfe30bc2d722d55e7905e8208a4e4f469a32_in-the-wild-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-13',
            'title' => 'Ultraviolet'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/febd1d5f15d450ad35eb04735ce698d9e13ff244_bokaap-cover-.jpg',
            'imgAlt' => 'gallery-slider-cover-14',
            'title' => 'Dreamer Pool I, The Origins'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/d3eff8158c1c257f4fa31787a4e802a7ffd6e048_dreamer-pool-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-15',
            'title' => 'A Forest Tale'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/e6cfff9be5997a8348496bff1b2363e300a1d92f_dreamer-pool-ii-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-16',
            'title' => 'Laguna'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/b438c3bd466a57c52da2d69fbcbce5d98e849763_cover-1.jpg',
            'imgAlt' => 'gallery-slider-cover-17',
            'title' => 'The Prairies'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/0f248f1e9aedec4b12a13b48f6c102ab322a2ba5_dreamer-pool-iii-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-18',
            'title' => 'Vera, Jute magazine'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/0b0294673260042842a80867406c75c4a523fedd_chapmans-peak-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-19',
            'title' => 'Double Beauty'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/9e711f57f4b2684335cbd221346d29515e0a5f0c_into-the-blue-cover.jpg',
            'imgAlt' => 'gallery-slider-cover-20',
            'title' => 'AVA'
        ],
        [
            'href' => '#',
            'imgSrc' => 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/04f6be416adf369675b6a47abe7d8ce998081157_various-cover-option.jpg',
            'imgAlt' => 'gallery-slider-cover-11',
            'title' => 'The Wild Rose'
        ],
    )
);

//ar_the_view('page-story__section', $story_params);

get_header();

get_footer();