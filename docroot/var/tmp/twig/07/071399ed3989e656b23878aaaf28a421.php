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

/* @bundles/CoreBundle/Helper/EmailAddressHelper.php */
class __TwigTemplate_1228b63c109281da11f668992f8aeafe extends Template
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

class EmailAddressHelper
{
    /**
     * Clean the email for comparison.
     *
     * @param string \$email
     */
    public function cleanEmail(\$email): string
    {
        return strtolower(preg_replace(\"/[^a-z0-9\\+\\.@]/i\", '', \$email));
    }

    /**
     * @return array<string>
     */
    public function getVariations(string \$email): array
    {
        \$emails = [\$email, \$this->cleanEmail(\$email)];
        // email without suffix
        preg_match('#^(.*?)\\+(.*?)@(.*?)\$#', \$email, \$parts);
        if (!empty(\$parts)) {
            \$emails[] = \$parts[1].'@'.\$parts[3];
        }

        return array_values(array_unique(\$emails));
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
        return "@bundles/CoreBundle/Helper/EmailAddressHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/EmailAddressHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/EmailAddressHelper.php");
    }
}
