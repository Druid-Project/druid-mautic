<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Helper/EmojiHelper.php */
class __TwigTemplate_f8dce6f033fde8a35c9e069b956d0c28 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\CoreBundle\\Helper;

/**
 * Helper class for Emoji unicodes.
 *
 * Build from modified https://github.com/iamcal/php-emoji
 */
class EmojiHelper
{
    /**
     * Convert to html.
     */
    public static function toHtml(string \$text, string \$from = 'emoji'): string
    {
        return self::emojiConvert(\$text, \$from, 'html');
    }

    /**
     * Convert to emoji.
     */
    public static function toEmoji(string \$text, string \$from = 'html'): string
    {
        return self::emojiConvert(\$text, \$from, 'emoji');
    }

    /**
     * Convert to short code.
     */
    public static function toShort(string \$text, string \$from = 'emoji'): string
    {
        return self::emojiConvert(\$text, \$from, 'short');
    }

    /**
     * Converts emojis.
     */
    private static function emojiConvert(string \$text, string \$from, string \$to): string
    {
        \$maps = [];
        switch (\$from) {
            case 'html':
                switch (\$to) {
                    case 'emoji':
                        \$maps[] = 'HtmlToUnicode';
                        break;
                    case 'short':
                        \$maps[] = 'HtmlToUnicode';
                        \$maps[] = 'UnicodeToShort';
                        break;
                }
                break;
            case 'emoji':
                switch (\$to) {
                    case 'html':
                        \$maps[] = 'UnicodeToHtml';
                        break;
                    case 'short':
                        \$maps[] = 'UnicodeToShort';
                        break;
                }
                break;
            case 'short':
                switch (\$to) {
                    case 'html':
                        \$maps[] = 'ShortToUnicode';
                        \$maps[] = 'UnicodeToHtml';
                        break;
                    case 'emoji':
                        \$maps[] = 'ShortToUnicode';
                        break;
                }
                break;
        }

        foreach (\$maps as \$useMap) {
            \$mapClass = \"Mautic\\\\CoreBundle\\\\Helper\\\\EmojiMap\\\\{\$useMap}EmojiMap\";
            \$text     = str_replace(array_keys(\$mapClass::\$map), \$mapClass::\$map, \$text);

            if (isset(\$mapClass::\$exceptions)) {
                \$text = str_replace(array_keys(\$mapClass::\$exceptions), \$mapClass::\$exceptions, \$text);
            }
        }

        if ('emoji' !== \$to) {
            // Parse out missed emojis
            \$text = self::removeEmoji(\$text);
        }

        return \$text;
    }

    /**
     * Remove emojis from text.
     */
    private static function removeEmoji(string \$text): string
    {
        return preg_replace('/([0-9#][\\x{20E3}])|[\\x{00ae}\\x{00a9}\\x{203C}\\x{2047}\\x{2048}\\x{2049}\\x{3030}\\x{303D}\\x{2139}\\x{2122}\\x{3297}\\x{3299}][\\x{FE00}-\\x{FEFF}]?|[\\x{2190}-\\x{21FF}][\\x{FE00}-\\x{FEFF}]?|[\\x{2300}-\\x{23FF}][\\x{FE00}-\\x{FEFF}]?|[\\x{2460}-\\x{24FF}][\\x{FE00}-\\x{FEFF}]?|[\\x{25A0}-\\x{25FF}][\\x{FE00}-\\x{FEFF}]?|[\\x{2600}-\\x{27BF}][\\x{FE00}-\\x{FEFF}]?|[\\x{2900}-\\x{297F}][\\x{FE00}-\\x{FEFF}]?|[\\x{2B00}-\\x{2BF0}][\\x{FE00}-\\x{FEFF}]?|[\\x{1F000}-\\x{1F6FF}][\\x{FE00}-\\x{FEFF}]?/u', '', \$text);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Helper/EmojiHelper.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Helper/EmojiHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/EmojiHelper.php");
    }
}
