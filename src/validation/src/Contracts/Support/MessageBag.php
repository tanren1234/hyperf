<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Validation\Contracts\Support;

use Hyperf\Utils\Contracts\Arrayable;

interface MessageBag extends Arrayable
{
    /**
     * Get the keys present in the message bag.
     */
    public function keys(): array;

    /**
     * Add a message to the bag.
     *
     * @return $this
     */
    public function add(string $key, string $message);

    /**
     * Merge a new array of messages into the bag.
     *
     * @param array|MessageProvider $messages
     * @return $this
     */
    public function merge($messages);

    /**
     * Determine if messages exist for a given key.
     *
     * @param array|string $key
     */
    public function has($key): bool;

    /**
     * Get the first message from the bag for a given key.
     *
     * @param null|string $key
     * @param null|string $format
     */
    public function first($key = null, $format = null): string;

    /**
     * Get all of the messages from the bag for a given key.
     *
     * @param null|string $format
     */
    public function get(string $key, $format = null): array;

    /**
     * Get all of the messages for every key in the bag.
     *
     * @param null|string $format
     */
    public function all($format = null): array;

    /**
     * Get the raw messages in the container.
     */
    public function getMessages(): array;

    /**
     * Get the default message format.
     */
    public function getFormat(): string;

    /**
     * Set the default message format.
     *
     * @return $this
     */
    public function setFormat(string $format = ':message');

    /**
     * Determine if the message bag has any messages.
     */
    public function isEmpty(): bool;

    /**
     * Determine if the message bag has any messages.
     */
    public function isNotEmpty(): bool;

    /**
     * Get the number of messages in the container.
     */
    public function count(): int;
}
