<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$item_heading = $params->get('item_heading', 'h4');
?>
<?php if ($params->get('item_title')) : ?>

	<<?php echo $item_heading; ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
	<?php if ($params->get('link_titles') && $item->link != '') : ?>
		<a href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?>
		</a>
	<?php else : ?>
		<?php echo $item->title; ?>
	<?php endif; ?>
	</<?php echo $item_heading; ?>>

<?php endif; ?>

<?php if (!$params->get('intro_only')) : ?>
	<?php echo $item->afterDisplayTitle; ?>
<?php endif; ?>

<?php echo $item->beforeDisplayContent; ?>

<?php echo $item->introtext; ?>

<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
	<?php 
		$rusMonth = array("Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь");
		$ukrMonth = array("Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень", "Липень", "Серпень", "Вересень", "Жовтень", "Листопад", "Грудень");
		
		$timestamp = strtotime($item->created);
		$requestUrl = $_SERVER['REQUEST_URI'];
		
		if ($requestUrl == '/' || $requestUrl == '/ua' || $requestUrl == '/ua/') {
			$month = $ukrMonth[date("m", $timestamp) - 1];
		} else if ($requestUrl == '/ru/' || $requestUrl == '/ru') {
			$month = $rusMonth[date("m", $timestamp) - 1];
		}
		
		echo "<div class='news-time'>" . $month . " " . date("d", $timestamp) . ". " . date("Y", $timestamp) . "</div>"; 
	?>
	<?php echo '<a class="readmore-news" href="' . $item->link . '"><img src="/images/readmore.png"></a>'; ?>
<?php endif; ?>
