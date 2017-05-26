<?php
/**
 * Schema.org Type Event
 *
 * @author  Kazuya Takami
 * @version 3.2.4
 * @since   2.1.0
 * @see     wp-structuring-admin-db.php
 * @link    http://schema.org/Event
 * @link    http://schema.org/Place
 * @link    http://schema.org/Offer
 * @link    https://developers.google.com/search/docs/data-types/events
 */
class Structuring_Markup_Type_Event {

	/**
	 * Constructor Define.
	 *
	 * @since 2.1.0
	 */
	public function __construct () {
		$this->page_render();
	}

	/**
	 * Form Layout Render
	 *
	 * @version 3.2.4
	 * @since   2.1.0
	 */
	private function page_render () {
		$html  = '<table class="schema-admin-table">';
		$html .= '<caption>Basic Setting</caption>';
		$html .= '<tr><th class="require">type :</th><td><small>Select a event type: field name "schema_event_type"</small></td></tr>';
		$html .= '<tr><th class="require">name :</th><td><small>Input a custom post: field name "schema_event_name"</small></td></tr>';
		$html .= '<tr><th class="require">description :</th><td><small>Input a custom post: field name "schema_event_description"</small></td></tr>';
		$html .= '<tr><th class="require">image :</th><td><small>Input a custom post: field name "schema_event_image"</small></td></tr>';
		$html .= '<tr><th class="require">startDate :</th><td><small>Input a custom post: field name "schema_event_date" & "schema_event_time"</small></td></tr>';
		$html .= '<tr><th class="require">endtDate :</th><td><small>Input a custom post: field name "schema_event_date_end" & "schema_event_time_end"</small></td></tr>';
		$html .= '<tr><th>url :</th><td><small>Input a custom post: field name "schema_event_url"</small></td></tr>';
		$html .= '</table>';
		echo $html;

		$html  = '<table class="schema-admin-table">';
		$html .= '<caption>Location Type "Place" Setting</caption>';
		$html .= '<tr><th class="require">name :</th><td><small>Input a custom post: field name "schema_event_place_name"</small></td></tr>';
		$html .= '<tr><th>url(sameAs) :</th><td><small>Input a custom post: field name "schema_event_place_url"</small></td></tr>';
		$html .= '<tr><th class="require">address :</th><td><small>Input a custom post: field name "schema_event_place_address"</small></td></tr>';
		$html .= '</table>';
		echo $html;

		$html  = '<table class="schema-admin-table">';
		$html .= '<caption>Location Type "Offers" Setting</caption>';
		$html .= '<tr><th>price :</th><td><small>Input a custom post: field name "schema_event_place_name"</small></td></tr>';
		$html .= '<tr><th class="require">priceCurrency :</th><td><small>Input a custom post: field name "schema_event_place_address"</small></td></tr>';
		$html .= '<tr><th>url :</th><td><small>Input a custom post: field name "schema_event_place_url"</small></td></tr>';
		$html .= '</table>';
		echo $html;

		echo '<p>Custom post name "schema_event_post"</p>';
		echo '<p>Archive rewrite name "events"</p>';
		echo '<p>Setting Knowledge : <a href="https://developers.google.com/search/docs/data-types/events" target="_blank">https://developers.google.com/search/docs/data-types/events</a></p>';

		submit_button();
	}
}