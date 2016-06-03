<?php
/**
 * Schema.org Type Videos
 *
 * @author  Kazuya Takami
 * @version 2.6.0
 * @since   2.6.0
 * @see     wp-structuring-admin-db.php
 * @link    https://schema.org/VideoObject
 * @link    https://developers.google.com/search/docs/data-types/videos
 */
class Structuring_Markup_Type_Videos {

	/**
	 * Constructor Define.
	 *
	 * @since 2.6.0
	 */
	public function __construct () {
		$this->page_render();
	}

	/**
	 * Form Layout Render
	 *
	 * @since 2.6.0
	 */
	private function page_render () {
		$html  = '<table class="schema-admin-table">';
		$html .= '<caption>Basic Setting</caption>';
		$html .= '<tr><th>name :</th><td><small>Post title</small></td></tr>';
		$html .= '<tr><th>Description :</th><td><small>Post description</small></td></tr>';
		$html .= '<tr><th>thumbnailUrl :</th><td><small>Input a custom post: field name "schema_event_url"</small></td></tr>';
		$html .= '</table>';
		echo $html;

		echo '<p>Custom post name "schema_video_post"</p>';
		echo '<p>Archive rewrite name "videos"</p>';
		echo '<p>Setting Knowledge : <a href="https://developers.google.com/search/docs/data-types/videos" target="_blank">https://developers.google.com/search/docs/data-types/videos</a></p>';

		submit_button();
	}
}