<p align="center"><a href="https://dev.piedweb.com">
<img src="https://raw.githubusercontent.com/PiedWeb/piedweb-devoluix-theme/master/src/img/logo_title.png" width="200" height="200" alt="Open Source Package" />
</a></p>

# Text Spinner

[![Latest Version](https://img.shields.io/github/tag/piedweb/textspinner.svg?style=flat&label=release)](https://github.com/piedweb/textspinner/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/piedweb/textspinner/Tests?label=tests)](https://github.com/piedweb/textspinner/actions)
[![Quality Score](https://img.shields.io/scrutinizer/g/piedweb/textspinner.svg?style=flat)](https://scrutinizer-ci.com/g/piedweb/textspinner)
[![Code Coverage](https://codecov.io/gh/piedweb/textspinner/branch/main/graph/badge.svg)](https://codecov.io/gh/piedweb/textspinner/branch/main)
[![Type Coverage](https://shepherd.dev/github/piedweb/textspinner/coverage.svg)](https://shepherd.dev/github/piedweb/textspinner)
[![Total Downloads](https://img.shields.io/packagist/dt/piedweb/text-spinner.svg?style=flat)](https://packagist.org/packages/piedweb/text-spinner)

Generate content from a spinned text (content spinning via spinning tool ak rephraser).

## Install

Via [Packagist](https://img.shields.io/packagist/dt/piedweb/text-spinner.svg?style=flat)

``` bash
$ composer require piedweb/text-spinner
```

## Usage

``` php
use PiedWeb\TextSpinner\Spinner;

$text = 'my {{first|second|third}|{first|second|third}|{first|second|third}} text.';
$spinText = Spinner::spin($text);
```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing](https://dev.piedweb.com/contributing)

## Credits

- [Pied Web](https://piedweb.com)
- [All Contributors](https://github.com/PiedWeb/:package_skake/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
