<?php
/**
 * Schema.org Type BlogPosting
 *
 * @author  Kazuya Takami
 * @version 1.2.0
 * @since   1.2.0
 * @see     wp-structuring-admin-db.php
 * @link    http://schema.org/BlogPosting
 */
class Structuring_Markup_Type_Blog_Posting {

	/**
	 * Constructor Define.
	 *
	 * @since 1.2.0
	 */
	public function __construct()
	{
		$this->page_render();
	}

	/**
	 * Form Layout Render
	 *
	 * @since 1.2.0
	 */
	private function page_render()
	{
		$html  = '<table class="schema-admin-table">';
		$html .= '<caption>Basic Setting( Post Page Only )</caption>';
		$html .= '<tr><th>headline :</th><td><small>Default : post_title</small></td></tr>';
		$html .= '<tr><th>datePublished :</th><td><small>Default : get_the_time( DATE_ISO8601, ID )</small></td></tr>';
		$html .= '<tr><th>dateModified :</th><td><small>Default : get_the_modified_time( DATE_ISO8601, ID )</small></td></tr>';
		$html .= '<tr><th>author :</th><td><small>Default : get_the_author_meta( "display_name", author_ID )</small></td></tr>';
		$html .= '<tr><th>image :</th><td><small>Default : thumbnail</small></td></tr>';
		$html .= '<tr><th>description :</th><td><small>Default : post_excerpt</small></td></tr>';
		$html .= '<tr><th>articleBody :</th><td><small>Default : post_content</small></td></tr>';
		$html .= '</table>';
		echo $html;

		submit_button();
	}
}