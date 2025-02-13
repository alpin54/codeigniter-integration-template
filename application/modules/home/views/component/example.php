<!--example-->
<div class="example">
  <div class="container">
    <div class="example__head">
      <h1 class="example__title"><?= $example['title']; ?></h1>
      <p class="example__desc"><?= $example['description']; ?></p>
    </div>
    <h3 class="example__subtitle"><?= $example['subtitle']; ?></h3>
    <div class="example__body">
      <? foreach ($example['list'] as $val) { ?>
        <!--item-->
        <div class="item">
          <div class="item__box">
            <div class="item__img">
              <img class="item__img__el" src="assets/img/dummy/<?= $val['img'] ?>" alt="<?= $val['title'] ?>" />
            </div>
            <div class="item__text">
              <h4 class="item__title"><?= $val['title'] ?></h4>
              <p class="item__desc"><?= $val['description']; ?></p>
            </div>
          </div>
        </div>
        <!--end-item-->
      <? } ?>
    </div>
  </div>
</div>
<!--end-example-->
