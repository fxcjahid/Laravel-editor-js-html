![laravel-editorjs-html](https://github.com/fxcjahid/Laravel-editor-js-html/assets/33903532/22ac126c-f8de-411b-b72f-20517c6c54a9)

# Laravel Editor JS Html

This package conver EditorJs to pure Html

## Install

1. Install package

``composer require fxcjahid/Laravel-editor-js-html``

2. Add provider in `config/app.php`

` fxcjahid\LaravelEditorJsHtml\LaravelEditorJsHtmlProvider::class, `


Supported Blocks and tools:

- [Heading](https://github.com/editor-js/header)
- [Quote](https://github.com/editor-js/quote)
- [Image](https://github.com/editor-js/image)
- [Simple Image](https://github.com/editor-js/simple-image) (without backend requirement)
- [Nested List](https://github.com/editor-js/nested-list)
- [Checklist](https://github.com/editor-js/checklist)
- [Link embed](https://github.com/editor-js/link)
- [Embeds](https://github.com/editor-js/embed) ( YouTube, Twitch, Vimeo, Gfycat, Instagram, Twitter, etc )
- [Table](https://github.com/editor-js/table)
- [Delimiter](https://github.com/editor-js/delimiter)
- [Warning](https://github.com/editor-js/warning)
- [Code](https://github.com/editor-js/code)
- [Raw HTML](https://github.com/editor-js/raw)
- [Attaches](https://github.com/editor-js/attaches)
- [Marker](https://github.com/editor-js/marker)
- [Inline Code](https://github.com/editor-js/inline-code)

See the [😎 Awesome Editor.js](https://github.com/editor-js/awesome-editorjs) list for more tools.

## Suggest

* https://github.com/codex-team/editor.js

## Usage

Convert blocks into HTML

```php
use Fxcjahid\LaravelEditorJsHtml\BlocksManager;

$blocksManager = new BlocksManager($data);
$html = $blocksManager->renderHtml();
echo $html
```
