<?php render('_header',array('title'=>$title))?>

<p>Добро пожаловать на наш сайт! Этот сайт был разработан <a href="https://vk.com/id96357645"> Остриковой Викторией</a>.</p>


<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
    <li data-role="list-divider">Категории товаров</li>
    <?php render($content) ?>
</ul>

<?php render('_footer')?>