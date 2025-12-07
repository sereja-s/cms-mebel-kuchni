<?php if (!empty($sales)) : ?>

	<section class="index-slider">
		<div class="container">
			<div class="index-slider__wrapper">

				<div class="index-slider__wrapper-bg" style='background-color:transparent'>

					<?php foreach ($sales as $item) : ?>

						<div class="index-slider__item">
							<div class="index-slider__item-wrapper">

								<img style="width: 100%; height: 500px; object-fit: cover;" class="swiper-slide-top__img" src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>" />
							</div>
						</div>

						<!-- <div class="index-slider__item">
							<div class="index-slider__item-wrapper">
								<div class="index-slider__item__content">
									<h3 class="index-slider__item-title"><?= $item['name'] ?></h3>
									<p class="index-slider__item-text"><?= $item['sub_title'] ?></p>
									<a class="index-slider__item-link" href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>" style="font-size: 18px;"><?= $this->set['phone'] ?></a>
								</div>

								<div class="index-slider__item-picture">
									<img class="index-slider__item-img" src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">
								</div>
							</div>
						</div> -->

					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</section>

<?php endif; ?>

<div class="container">

	<div class="phone">
		<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>"><?= $this->set['phone'] ?></a>
		<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone_2']) ?>"><?= $this->set['phone_2'] ?></a>
	</div>

</div>

<?= $this->messageButtonTel ?>

<?php if (!empty($this->arrCategory)) : ?>

	<section class="catalog-list">
		<div class="container">
			<h3 class="h3-title catalog-list__main-title">Каталог</h3>

			<div class="catalog__list-wrapper">

				<?php foreach ($this->arrCategory as $item) : ?>

					<div class="catalog-list__item">

						<h4 class="catalog-list__category-title"><?= $item['name'] ?></h4>

						<?php if (!empty($item['sub'])) : ?>

							<ul class="catalog-list__category-nav">

								<?php foreach ($item['sub'] as $sub) : ?>

									<li class="catalog-list__category-item"><a class="catalog-list__category-link" href="<?= $this->alias(['catalog' => $sub['alias']]) ?>"><?= $sub['name'] ?>
										</a></li>

								<?php endforeach; ?>

							</ul>

						<?php endif; ?>
						<!-- <a href="#" class="catalog-list__category-all">Все товары</a> -->
					</div>

				<?php endforeach; ?>

			</div>
		</div>
	</section>

<?php endif; ?>

<?php if (!empty($goods) && !empty($arrHits)) : ?>

	<section class="index-catalog category-items">
		<div class="container">

			<?php foreach ($arrHits as $key => $value) : ?>

				<?php if ($key === 'hit') : ?>

					<?php if (!empty($goods[$key])) : ?>

						<h3 class="h3-title index-catalog__main-title"><?= $value['name'] ?></h3>

						<!-- <div class="index-catalog__wrapper"> -->
						<div class="category-items__wrapper">

							<?php foreach ($goods[$key] as $item) {

								$this->showGoods($item, [/* 'icon' => $value['icon'] */], 'goodsItem');
							} ?>

						</div>

					<?php endif; ?>

				<?php endif; ?>

				<!-- baner start -->
				<?php if ($key === 'hot') : ?>

					<?php if (!empty($goods[$key])) : ?>

						<div class="index-catalog__banner fade">

							<?php foreach ($goods[$key] as $item) : ?>

								<a class="index-catalog__banner-link" href="<?= $this->alias(['product' => $item['alias']]) ?>">

									<!-- baner content start-->
									<div class="index-catalog__banner-content">
										<h4 class="index-catalog__banner-title"><?= $item['name'] ?></h4>

										<div class="index-catalog__banner-text" style="padding-bottom: 10px;">
											<p>Успей приобрести всего за
												<?= !empty($item['price']) ? '<b>' . $item['price'] . 'руб.' . '</b>' : '<b>' . $item['old_price'] . 'руб.' . '</b>' ?>
											</p>
										</div>
									</div>
									<!-- baner content end-->

									<!-- image -->
									<div class="index-catalog__banner-img">
										<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">
									</div>

								</a>

							<?php endforeach; ?>

						</div>

					<?php endif; ?>

				<?php endif; ?>


				<?php if ($key === 'new') : ?>

					<?php if (!empty($goods[$key])) : ?>

						<h3 class="h3-title index-catalog__main-title"><?= $value['name'] ?></h3>

						<div class="category-items__wrapper">

							<?php foreach ($goods[$key] as $item) {

								$this->showGoods($item, [/* 'icon' => $value['icon'] */], 'goodsItemCat');
							} ?>

						</div>



					<?php endif; ?>

				<?php endif; ?>

			<?php endforeach; ?>

		</div>
	</section>

<?php endif; ?>

<style>
	.works {
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(min(28.125rem, 100%), 1fr));
	}

	.item-work {
		overflow: hidden;
		position: relative;
	}

	.item-work__picture {
		aspect-ratio: 684/513;
		position: relative;
		display: block;
		overflow: hidden;
	}

	.item-work__picture::after {
		content: "";
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
	}

	.item-work__image {
		width: 100%;
		height: 100%;
		object-fit: cover;
		transition: scale 0.8s;
	}

	.item-work__body {
		color: #fff;
		border: 0.0625rem solid rgba(218, 197, 167, 0.15);
		border-radius: 0.125rem;
		padding: 0.75rem 1rem;
		backdrop-filter: blur(3.875rem);
		background: rgba(218, 197, 167, 0.05);
		/* position: absolute; */
	}

	.item-work__body {
		display: flex;
		flex-wrap: wrap;
		gap: 0.3125rem;
		justify-content: space-between;
		align-items: center;
	}

	.item-work__name {
		font-weight: 700;
		line-height: 1.3;
		letter-spacing: 0.0625rem;
	}

	.item-work__link-name {
		transition: color 0.3s;
	}

	.item-work__category {
		font-size: 1.1rem;
		line-height: 1.6;
		font-weight: 500;
		letter-spacing: 0.09375rem;
		/* text-transform: uppercase; */
		transition: color 0.3s;
	}

	@media (max-width: 20em) {
		.works {
			gap: 0.9375rem;
		}

		.item-work__body {
			left: 0.625rem;
		}

		.item-work__body {
			bottom: 0.625rem;
		}

		.item-work__body {
			right: 0.625rem;
		}

		.item-work__name {
			font-size: 1.125rem;
		}
	}

	@media (min-width: 20em) and (max-width: 89.375em) {
		.works {
			gap: clamp(0.9375rem, 0.63119369369375rem + 1.5315315315vw, 2rem);
		}

		.item-work__body {
			left: clamp(0.625rem, 0.22860360360625rem + 1.981981982vw, 2rem);
		}

		.item-work__body {
			bottom: clamp(0.625rem, 0.22860360360625rem + 1.981981982vw, 2rem);
		}

		.item-work__body {
			right: clamp(0.625rem, 0.22860360360625rem + 1.981981982vw, 2rem);
		}

		.item-work__name {
			font-size: clamp(1.125rem, 1.01689189189375rem + 0.5405405405vw, 1.5rem);
		}
	}

	@media (min-width: 89.375em) {
		.works {
			gap: 2rem;
		}

		.item-work__body {
			left: 2rem;
		}

		.item-work__body {
			bottom: 2rem;
		}

		.item-work__body {
			right: 2rem;
		}

		.item-work__name {
			font-size: 1.5rem;
		}
	}

	@media (any-hover: hover) {
		.item-work__link-name:hover {
			color: #f9efe1;
		}

		.item-work__category:hover {
			color: #f9efe1;
		}

		.item-work:hover .item-work__image {
			scale: 1.05;
		}
	}
</style>

<section class="page__selected-work selected-work">
	<div class="container">

		<div class="selected-work__items works">
			<article data-fls-work="" class="item-work">
				<a href="#" class="item-work__picture">
					<picture>
						<img class="item-work__image" alt="Image" src="<?= PATH . TEMPLATE ?>assets/img/фон-1.jpg">
					</picture>
				</a>
				<div class="item-work__body">
					<h5 class="item-work__name">
						<a href="#" class="item-work__link-name">123456</a>
					</h5>
					<a class="item-work__category" href="NaN">Кухня Плейона арарарарарпоп</a>
				</div>
			</article>
			<article data-fls-work="" class="item-work">
				<a href="#" class="item-work__picture">
					<picture>
						<!-- <source media="(max-width: 600px)" srcset="./assets/img/work/02-600.webp" type="image/webp"> -->
						<img class="item-work__image" alt="Image" src="<?= PATH . TEMPLATE ?>assets/img/фон-2.jpg">
					</picture>
				</a>
				<div class="item-work__body">
					<h5 class="item-work__name">
						<a href="#" class="item-work__link-name">Парикмахер-стилист для джентельмена</a>
					</h5>
					<!-- <a class="item-work__category" href="NaN">Webdesign</a> -->
				</div>
			</article>
			<article data-fls-work="" class="item-work">
				<a href="#" class="item-work__picture">
					<picture>
						<!-- <source media="(max-width: 600px)" srcset="./assets/img/work/03-600.webp" type="image/webp"> -->
						<img class="item-work__image" alt="Image" src="<?= PATH . TEMPLATE ?>assets/img/фон-3.jpg">
					</picture>
				</a>
				<div class="item-work__body">
					<h5 class="item-work__name">
						<a href="#" class="item-work__link-name">Парикмахер-стилист для ребёнка</a>
					</h5>
					<!-- <a class="item-work__category" href="NaN">Webdesign</a> -->
				</div>
			</article>
			<article data-fls-work="" class="item-work">
				<a href="#" class="item-work__picture">
					<picture>
						<!-- <source media="(max-width: 600px)" srcset="./assets/img/work/04-600.webp" type="image/webp"> -->
						<img class="item-work__image" alt="Image" src="<?= PATH . TEMPLATE ?>assets/img/фон-4.jpg">
					</picture>
				</a>
				<div class="item-work__body">
					<h5 class="item-work__name">
						<a href="#" class="item-work__link-name">Ногтевой сервис</a>
					</h5>
					<!-- <a class="item-work__category" href="NaN">Webdesign</a> -->
				</div>
			</article>
			<article data-fls-work="" class="item-work">
				<a href="#" class="item-work__picture">
					<picture>
						<!-- <source media="(max-width: 600px)" srcset="./assets/img/work/04-600.webp" type="image/webp"> -->
						<img class="item-work__image" alt="Image" src="<?= PATH . TEMPLATE ?>assets/img/фон-5.jpg">
					</picture>
				</a>
				<div class="item-work__body">
					<h5 class="item-work__name">
						<a href="#" class="item-work__link-name">Услуги бровиста</a>
					</h5>
					<!-- <a class="item-work__category" href="NaN">Webdesign</a> -->
				</div>
			</article>
		</div>
	</div>
</section>

<!-- <style>
	.selected-work__header {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		align-items: center;
		gap: 0.9375rem;
	}

	.selected-work__title {
		color: rgb(255, 150, 3);
		;
		/* font-family: "Satoshi", sans-serif; */
	}

	.selected-work__title {
		font-weight: 500;
		line-height: 1.1;
		padding: 1;
	}

	.selected-work__title span {
		font-family: "Gambetta", serif;
	}

	@media (max-width: 20em) {
		.selected-work {
			padding-bottom: 3.75rem;
		}

		.selected-work__header {
			margin-bottom: 0.9375rem;
		}

		.selected-work__title {
			font-size: 2rem;
		}

		@media (min-width: 20em) and (max-width: 89.375em) {
			.selected-work {
				padding-bottom: clamp(3.75rem, 1.9481981982rem + 9.009009009vw, 7rem);
			}

			.selected-work__header {
				margin-bottom: clamp(0.9375rem, 0.63119369369375rem + 1.5315315315vw, 2rem);
			}

			.selected-work__title {
				font-size: clamp(2rem, 1.423423423425rem + 2.8828828829vw, 4rem);
			}
		}

		@media (min-width: 47.99875em) {
			.selected-work__header {
				padding-inline: 2rem;
			}
		}

		@media (min-width: 89.375em) {
			.selected-work {
				padding-bottom: 10rem;
			}

			.selected-work__header {
				margin-bottom: 2rem;
			}

			.selected-work__title {
				font-size: 4rem;
			}
		}
	}
</style> -->

<section class="index-stat">
	<div class="container">
		<div class="index-stat__wrapper">
			<h3 class="index-stat__title h3-title"><?= $this->set['name'] ?></h3>

			<?= $this->set['short_content'] ?>

		</div>
	</div>
</section>

<?php if (!empty($advantages)) : ?>

	<section class="footer-icons">
		<div class="container">
			<div class="footer-icons__wrapper">

				<?php foreach ($advantages as $item) : ?>

					<div class="footer-icons__item">
						<div class="footer-icons__img">
							<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">
						</div>
						<div class="footer-icons__title"><?= $item['name'] ?></div>
					</div>

				<?php endforeach; ?>



			</div>
		</div>
	</section>

<?php endif; ?>