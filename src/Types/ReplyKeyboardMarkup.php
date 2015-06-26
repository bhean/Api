<?php

namespace tgbot\Api\Types;

/**
 * Class ReplyKeyboardMarkup
 * This object represents a custom keyboard with reply options (see Introduction to bots for details and examples).
 *
 * @package tgbot\Api\Types
 */
class ReplyKeyboardMarkup
{
    /**
     * Array of button rows, each represented by an Array of Strings
     * Array of Array of String
     *
     * @var array
     */
    protected $keyboard;

    /**
     * Optional. Requests clients to resize the keyboard vertically for optimal fit
     * (e.g., make the keyboard smaller if there are just two rows of buttons).
     * Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     *
     * @var bool
     */
    protected $resizeKeyboard;

    /**
     * Optional. Requests clients to hide the keyboard as soon as it's been used. Defaults to false.
     *
     * @var bool
     */
    protected $oneTimeKeyboard;

    /**
     * Optional. Use this parameter if you want to show the keyboard to specific users only.
     * Targets:
     * 1) users that are @mentioned in the text of the Message object;
     * 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     *
     * @var bool
     */
    protected $selective;
}