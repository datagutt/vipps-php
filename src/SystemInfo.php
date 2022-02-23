<?php

namespace Vipps;


/**
 * @package Vipps
 *
 * @property string $systemName
 * @property string $systemVersion
 * @property string $systemPluginName
 * @property string $systemPluginVersion
 */
class SystemInfo extends Model
{
  /** @var array */
  protected $fields = [
	'systemName',
	'systemVersion',
	'systemPluginName',
	'systemPluginVersion'
  ];

  /**
   * Creates a new systeminfo object
   *
   * @param array $systemInfo = []
   * @return self
   */
  public static function create(array $systemInfo = [], $immuteable = false)
  {
    return new static($systemInfo, $immuteable);
  }
}
