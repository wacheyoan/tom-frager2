<?php
declare( strict_types=1 );

namespace Automattic\WooCommerce\GoogleListingsAndAds\Jobs;

use Automattic\WooCommerce\GoogleListingsAndAds\ActionScheduler\ActionSchedulerInterface;
use Automattic\WooCommerce\GoogleListingsAndAds\MerchantCenter\MerchantCenterAwareTrait;
use Automattic\WooCommerce\GoogleListingsAndAds\Product\BatchProductHelper;
use Automattic\WooCommerce\GoogleListingsAndAds\Product\ProductRepository;
use Automattic\WooCommerce\GoogleListingsAndAds\Product\ProductSyncer;

defined( 'ABSPATH' ) || exit;

/**
 * Class AbstractGoogleBatchedJob
 *
 * @package Automattic\WooCommerce\GoogleListingsAndAds\Jobs
 */
abstract class AbstractProductSyncerBatchedJob extends AbstractBatchedActionSchedulerJob implements ProductSyncerJobInterface {

	use MerchantCenterAwareTrait;

	/**
	 * @var ProductSyncer
	 */
	protected $product_syncer;

	/**
	 * @var ProductRepository
	 */
	protected $product_repository;

	/**
	 * @var BatchProductHelper
	 */
	protected $batch_product_helper;

	/**
	 * SyncProducts constructor.
	 *
	 * @param ActionSchedulerInterface  $action_scheduler
	 * @param ActionSchedulerJobMonitor $monitor
	 * @param ProductSyncer             $product_syncer
	 * @param ProductRepository         $product_repository
	 * @param BatchProductHelper        $batch_product_helper
	 */
	public function __construct(
		ActionSchedulerInterface $action_scheduler,
		ActionSchedulerJobMonitor $monitor,
		ProductSyncer $product_syncer,
		ProductRepository $product_repository,
		BatchProductHelper $batch_product_helper
	) {
		$this->batch_product_helper = $batch_product_helper;
		$this->product_syncer       = $product_syncer;
		$this->product_repository   = $product_repository;
		parent::__construct( $action_scheduler, $monitor );
	}

	/**
	 * Get whether Merchant Center is connected.
	 *
	 * @return bool
	 */
	public function is_mc_connected(): bool {
		return $this->merchant_center->is_connected();
	}

	/**
	 * Can the job start.
	 *
	 * @param array|null $args
	 *
	 * @return bool Returns true if the job can start.
	 */
	public function can_start( $args = [] ): bool {
		return ! $this->is_running( $args ) && $this->is_mc_connected();
	}
}
