<?php

namespace Vipps\Traits;

trait ArrayLike {
  /**
   * Sets the value at offset
   *
   * @param mixed $key
   * @param mixed $value
   * @return void
   */
  public function offsetSet($key, $value): void
  {
    $this->{$key} = $value;
  }

  /**
   * Checks if the offset exists
   *
   * @param mixed $key
   * @return bool
   */
  public function offsetExists($key): bool
  {
    return !is_null($this->{$key});
  }

  /**
   * Unsets the value offset
   *
   * @param mixed $key
   * @return void
   */
  public function offsetUnset($key): void
  {
    $this->{$key} = null;
  }

  /**
   * Gets the value at offset
   *
   * @param mixed $key
   * @return void
   */
  public function offsetGet($key)
  {
    return $this->{$key};
  }

  /**
   * Casts the model to an Array
   *
   * @return array
   */
  public function toArray(): array
  {
    return $this->jsonSerialize();
  }
}
