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

/* @bundles/IntegrationsBundle/Sync/DAO/Value/ReferenceValueDAO.php */
class __TwigTemplate_33876f17940e9fca68e012dd4d88557d extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Value;

class ReferenceValueDAO implements \\Stringable
{
    private ?int \$value = null;

    private ?string \$type = null;

    public function getValue(): ?int
    {
        return \$this->value;
    }

    public function setValue(int \$value): void
    {
        \$this->value = \$value;
    }

    public function getType(): ?string
    {
        return \$this->type;
    }

    public function setType(string \$type): void
    {
        \$this->type = \$type;
    }

    public function __toString(): string
    {
        return (string) \$this->value;
    }

    /** @return array<string, mixed> */
    public function __serialize(): array
    {
        return [
            'value' => \$this->value,
            'types' => \$this->type,
        ];
    }

    /** @param array<string, mixed> \$data */
    public function __unserialize(array \$data): void
    {
        \$this->value = \$data['value'] ?? null;
        \$this->type  = \$data['type'] ?? null;
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Value/ReferenceValueDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Value/ReferenceValueDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Value/ReferenceValueDAO.php");
    }
}
