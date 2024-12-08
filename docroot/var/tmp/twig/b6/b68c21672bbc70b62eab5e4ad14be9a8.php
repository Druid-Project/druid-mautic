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

/* @bundles/CoreBundle/Twig/Helper/AnalyticsHelper.php */
class __TwigTemplate_674ef02edb5e4df6159c804b520cff67 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

final class AnalyticsHelper
{
    private string \$code;

    public function __construct(CoreParametersHelper \$parametersHelper)
    {
        \$this->code = htmlspecialchars_decode((string) \$parametersHelper->get('google_analytics'));
    }

    public function getCode(): string
    {
        return \$this->code;
    }

    /**
     * @param string \$content
     */
    public function addCode(\$content): string
    {
        // Add analytics
        \$analytics = \$this->getCode();

        // Check for html doc
        if (!str_contains(\$content, '<html')) {
            \$content = \"<html>\\n<head>{\$analytics}</head>\\n<body>{\$content}</body>\\n</html>\";
        } elseif (!str_contains(\$content, '<head>')) {
            \$content = str_replace('<html>', \"<html>\\n<head>\\n{\$analytics}\\n</head>\", \$content);
        } elseif (!empty(\$analytics)) {
            \$content = str_replace('</head>', \$analytics.\"\\n</head>\", \$content);
        }

        return \$content;
    }

    public function getName(): string
    {
        return 'analytics';
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
        return "@bundles/CoreBundle/Twig/Helper/AnalyticsHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Helper/AnalyticsHelper.php", "/app/docroot/app/bundles/CoreBundle/Twig/Helper/AnalyticsHelper.php");
    }
}
