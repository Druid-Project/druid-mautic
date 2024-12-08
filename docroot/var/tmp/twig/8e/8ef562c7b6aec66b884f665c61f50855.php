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

/* @bundles/CoreBundle/Helper/ClickthroughHelper.php */
class __TwigTemplate_50b3dc5195ae6485cb0633039fa52a75 extends Template
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

use Mautic\\CoreBundle\\Exception\\InvalidDecodedStringException;

class ClickthroughHelper
{
    /**
     * Encode an array to append to a URL.
     */
    public static function encodeArrayForUrl(array \$array): string
    {
        return urlencode(base64_encode(serialize(\$array)));
    }

    /**
     * Decode a string appended to URL into an array.
     *
     * @param bool \$urlDecode
     *
     * @return array
     */
    public static function decodeArrayFromUrl(\$string, \$urlDecode = true)
    {
        \$raw     = \$urlDecode ? urldecode(\$string) : \$string;
        \$decoded = base64_decode(\$raw);

        if (empty(\$decoded)) {
            return [];
        }

        if (0 !== stripos(\$decoded, 'a')) {
            throw new InvalidDecodedStringException(\$decoded);
        }

        return Serializer::decode(\$decoded);
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
        return "@bundles/CoreBundle/Helper/ClickthroughHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ClickthroughHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/ClickthroughHelper.php");
    }
}
