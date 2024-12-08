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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Order/FieldDAO.php */
class __TwigTemplate_16b8b82ed58f0cd167fe9f332d072102 extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;

class FieldDAO
{
    /**
     * @param string \$name
     */
    public function __construct(
        private \$name,
        private NormalizedValueDAO \$value
    ) {
    }

    /**
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    public function getValue(): NormalizedValueDAO
    {
        return \$this->value;
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/FieldDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/FieldDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Order/FieldDAO.php");
    }
}
