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

/* @bundles/EmailBundle/Helper/UrlMatcher.php */
class __TwigTemplate_9e0ad881e13bfe5d89ca691e17c7a787 extends Template
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

namespace Mautic\\EmailBundle\\Helper;

class UrlMatcher
{
    public static function hasMatch(array \$urlsToCheckAgainst, \$urlToFind): bool
    {
        \$urlToFind = self::sanitizeUrl(\$urlToFind);

        foreach (\$urlsToCheckAgainst as \$url) {
            \$url = self::sanitizeUrl(\$url);

            if (preg_match('/'.preg_quote(\$url, '/').'/i', \$urlToFind)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return mixed|string
     */
    private static function sanitizeUrl(\$url)
    {
        // Handle escaped forward slashes as BC
        \$url = str_replace('\\\\/', '/', \$url);

        // Ignore ending slash
        \$url = rtrim(\$url, '/');

        // Ignore http/https
        \$url = str_replace(['http://', 'https://'], '', \$url);

        // Remove preceding //
        if (str_starts_with(\$url, '//')) {
            \$url = str_replace('//', '', \$url);
        }

        return \$url;
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
        return "@bundles/EmailBundle/Helper/UrlMatcher.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/UrlMatcher.php", "/app/docroot/app/bundles/EmailBundle/Helper/UrlMatcher.php");
    }
}
