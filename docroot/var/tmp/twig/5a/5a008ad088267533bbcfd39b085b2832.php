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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Report/FieldDAO.php */
class __TwigTemplate_6ef4bf662bf364ddba4e1f59ca214750 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;

class FieldDAO
{
    public const FIELD_CHANGED   = 'changed';

    public const FIELD_REQUIRED  = 'required';

    public const FIELD_UNCHANGED = 'unchanged';

    private ?\\DateTimeInterface \$changeDateTime = null;

    public function __construct(
        private string \$name,
        private NormalizedValueDAO \$value,
        private string \$state = self::FIELD_CHANGED
    ) {
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function getValue(): NormalizedValueDAO
    {
        return \$this->value;
    }

    public function getChangeDateTime(): ?\\DateTimeInterface
    {
        return \$this->changeDateTime;
    }

    public function setChangeDateTime(\\DateTimeInterface \$changeDateTime): self
    {
        \$this->changeDateTime = \$changeDateTime;

        return \$this;
    }

    public function getState(): string
    {
        return \$this->state;
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/FieldDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/FieldDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Report/FieldDAO.php");
    }
}
