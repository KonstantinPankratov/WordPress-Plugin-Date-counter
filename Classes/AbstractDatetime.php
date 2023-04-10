<?php


abstract class AbstractDatetime
{

	public $datetime;
	public $timezone;

	public function __construct() {
		add_filter( 'get_my_plugin_instance', [ $this, 'get_instance' ] );

		try {
			$this->timezone = wp_timezone();
		} catch (Exception $e) {
			$this->timezone = new DateTimeZone(date_default_timezone_get());
		} finally {
			$this->datetime = new DateTime( "now", $this->timezone );
		}
	}

	abstract public function display($atts);

	public function get_instance()
	{
		return $this;
	}

	protected static function error_message($message) {
		return sprintf("<span style='color: #D50032;'>%s error:</span> %s", static::class, $message);
	}
}