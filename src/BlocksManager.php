<?php

namespace Fxcjahid\LaravelEditorJsHtml;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use HtmlGenerator\HtmlTag;
use Fxcjahid\LaravelTableOfContent\Table;

class BlocksManager
{
	protected $data;

	public function __construct($data)
	{
		$this->data = json_decode($data);
	}

	/**
	 * Get EditorJs Json Content 
	 * @return json
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * Get EditorJs Blocks
	 */
	public function getBlocks()
	{
		return $this->data->blocks ?? [];
	}

	/**
	 * Get EditorJs Timestamp
	 */
	public function getTimestamp()
	{
		return $this->data->time;
	}

	/**
	 * Get EditorJs Version
	 */
	public function getVersion()
	{
		return $this->data->version;
	}

	/**
	 * Get EditorJs HTML Content
	 */
	public function renderHtml()
	{
		$html = '';
		foreach ($this->getBlocks() as $block) {
			$html .= $this->renderHtmlBlock($block);
		}

		return $html;
	}

	private function renderHtmlBlock($block)
	{
		$viewName = "laravel-editor-js-html::blocks." . Str::snake($block->type, '-');

		if (!View::exists($viewName)) {
			$viewName = 'laravel-editor-js-html::blocks.not-found';
		}

		/**
		 * if block have Table-of-content
		 * @uses : https://github.com/fxcjahid/Laravel-table-of-content
		 * @see: https://github.com/fxcjahid/Laravel-table-of-content/blob/main/src/table.php#L129
		 * @return Generated Table Content
		 */
		if ($block->type == 'TableContent') {

			/**
			 * Generate Table Of Content
			 */
			$TocGenerator = new Table();
			$table = $TocGenerator->getTableContent($this->getOnlyHeading(), 2);

			return View::make($viewName, [
				'data' => $table
			])->render();
		}

		return View::make($viewName, [
			'data' => (array) $block
		])->render();
	}

	/**
	 * Get Only Header Block
	 */
	public function getOnlyHeading()
	{
		$tags = '';

		foreach ($this->getBlocks() as $block) {
			if (in_array($block->type, ['header'])) {
				$levels = sprintf('h%s', $block->data->level);
				$id = $block->id ?? '';
				$tunes = $block->tunes->alignment->alignment;
				$class = implode(' ', [$tunes]);

				$tags .= HtmlTag::createElement($levels)
					->id($id)
					->addClass($class)
					->text($block->data->text);
			}
		}

		return $tags;
	}

	/**
	 * Get EditorJs Plane Text
	 */
	public function renderText()
	{
		$text = '';
		foreach ($this->getBlocks() as $block) {
			$text .= $this->renderTextBlock($block);
		}

		$text = htmlspecialchars_decode($text); // Convert special HTML entities back to characters
		$text = trim($text); // Trim whitespace (or other characters) from the beginning and end of a string
		$text = strip_tags($text); // Remove all HTML Tags

		return $text;
	}

	private function renderTextBlock($block)
	{
		$text = '';
		// Only accpect Header & Paragraph
		if (in_array($block->type, ['header', 'paragraph'])) {
			$text .= $block->data->text . " ";
		}

		return $text;
	}
}
