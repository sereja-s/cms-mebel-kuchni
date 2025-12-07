<?php if (!empty($data)) :  ?>

	<?= $this->breadcrumbs ?>

	<!-- full-item start-->
	<section class="full-item">
		<div class="container">
			<div class="full-item__wrapper">

				<div class="full-item__header">
					<h1 class="full-item__main-title"><?= $data['name'] ?></h1>

					<div class="full-item__compare">

						<?php if (!empty($data['article'])) : ?>

							<span class="full-item__code-item">арт. <?= $data['article'] ?></span>

						<?php endif; ?>

					</div>
				</div>

				<div class="full-item__info">

					<div class="full-item__info-a">
						<?php if (!empty($data['discount'])) : ?>
							<span class="short-item__discount">-<?= $data['discount'] ?>%</span>
						<?php endif; ?>
						<?php if (!empty($data['new'])) : ?>
							<span class="short-item__new">Новинка</span>
						<?php endif; ?>

						<?php if (!empty($data['hit'])) : ?>
							<span class="short-item__present">Хит</span>
						<?php endif; ?>

						<?php if (!empty($data['hot'])) : ?>
							<span class="short-item__hot">Акция</span>
						<?php endif; ?>
					</div>

					<div class="full-item__info-b">
						<div class="short-item__item-rating">
							<img src="<?= PATH . TEMPLATE ?>assets/img/icons/star-activ.jpg" alt="1">
							<img src="<?= PATH . TEMPLATE ?>assets/img/icons/star-activ.jpg" alt="2">
							<img src="<?= PATH . TEMPLATE ?>assets/img/icons/star-activ.jpg" alt="3">
							<img src="<?= PATH . TEMPLATE ?>assets/img/icons/star-activ.jpg" alt="4">
							<img src="<?= PATH . TEMPLATE ?>assets/img/icons/star-activ.jpg" alt="4">
						</div>
					</div>

				</div>

				<!-- основная инфо в 3х блоках-->
				<div class="full-item__content">

					<!-- slider -->
					<div style="margin: 0 auto;">
						<div class="full-item__slider">
							<!-- mini -->
							<div class="full-item__slider-mini">

								<?php if (!empty($data['gallery_img'])) : ?>

									<div class="full-item__slider-mini-item">
										<img src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>">
									</div>

									<?php foreach (json_decode($data['gallery_img'], true) as $item) : ?>

										<div class="full-item__slider-mini-item">
											<img src="<?= $this->img($item) ?>" alt="<?= $data['name'] ?>">
										</div>

									<?php endforeach; ?>

								<?php endif; ?>

							</div>

							<!-- full slider -->
							<div class="full-item__slider-full">
								<div class="full-item__slider-full-item">
									<img src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>">
								</div>

								<?php if (!empty($data['gallery_img'])) : ?>

									<?php foreach (json_decode($data['gallery_img'], true) as $item) : ?>

										<div class="full-item__slider-full-item">
											<img src="<?= $this->img($item) ?>" alt="<?= $data['name'] ?>">
										</div>

									<?php endforeach; ?>

								<?php endif; ?>

							</div>
						</div>
					</div>
					<!-- price -->
					<div class="full-item__price" data-productContainer>
						<div class="full-item__price-wrapper">
							<div class="full-item__cost">

								<div class="full-item__price-num">
									<span><?= $data['price'] ?></span> руб.
								</div>

								<?php if (!empty($data['old_price'])) : ?>

									<s class="full-item__price-s">
										<span><?= $data['old_price'] ?></span> руб.
									</s>

								<?php endif; ?>

								<!-- <div class="card-main-info-size">
									<label class="card-main-info-size__item js-sizeCounter">

										<span class="card-main-info-size__head">
											Количество:
										</span>
										<span class="card-main-info-size__body">
											<span class="card-main-info-size__control button card-main-info-size__control_minus js-counterDecrement" data-quantityMinus></span>
											<span class="card-main-info-size__count js-counterShow" data-quantity><?= $this->cart['goods'][$data['id']]['qty'] ?? 1 ?></span>
											<span class="card-main-info-size__control button card-main-info-size__control_plus js-counterIncrement" data-quantityPlus></span>
										</span>

									</label>
								</div> -->

								<div class="full-item__payment-method" style="margin: 1rem 0 0 0; text-align: center">
									Наличие товара и способ оплаты:<br>
									<b>уточняйте у менеджера по указанным телефонам</b>
								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div id="full-item__tabs" class="full-item__tabs">
				<ul class="full-item__tabs-menu">
					<li class="full-item__tabs-menu-item"><a href="#tabs-1">Характеристики</a></li>
					<li class="full-item__tabs-menu-item"><a href="#tabs-2">Описание</a></li>
				</ul>
				<div id="tabs-1">
					<div class="full-item__tabs-table">
						<div class="full-item__table">

							<?php if ($data['filters']) : ?>

								<?php foreach ($data['filters'] as $item) : ?>

									<div class="full-item__table">

										<div class="full-item__table-name"><span><?= $item['name'] ?></span></div>
										<div class="full-item__table-param"><?= implode(', ', array_column($item['values'], 'name')) ?></div>

									</div>

								<?php endforeach; ?>

							<?php endif; ?>

						</div>

					</div>
				</div>
				<div id="tabs-2">

					<?= $data['content'] ?>

				</div>
			</div>

		</div>
	</section>
	<!-- full-item end -->

<?php endif; ?>