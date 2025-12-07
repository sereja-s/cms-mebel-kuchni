<?php if (!empty($data)) : ?>

	<div style="min-height: 100%; display: flex; flex-direction: column;" class="short-item__item">

		<div class="short-item__img-link">
			<div class="short-item__lt-info">

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

			<?php if (!empty($data['discount'])) : ?>

				<div class="short-item__lb-info">
					<span class="short-item__discount">-<?= $data['discount'] ?>%</span>
				</div>

			<?php endif; ?>
		</div>

		<a style="flex: 1 1 auto;" href="<?= $this->alias(['product' => $data['alias']]) ?>" data-productContainer>
			<img class="short-item__img" src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>">
		</a>

		<div style="margin: 10px 0;">
			<div class="short-item__price">
				<p class="short-item__price-num"><?= $data['price'] ?>руб.</p>
				<?= !empty($data['old_price']) ? '<s class="short-item__price-s-num">' . $data['old_price'] . ' руб.</s>' : '' ?>
			</div>

			<div class="short-item__item-title">
				<a class="short-item__item-link" href="<?= $this->alias(['product' => $data['alias']]) ?>"><?= $data['name'] ?></a>
			</div>
		</div>

	</div>

<?php endif; ?>