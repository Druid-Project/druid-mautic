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

/* @bundles/IntegrationsBundle/DTO/Note.php */
class __TwigTemplate_44052d7ce4c863127613701c50950a14 extends Template
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

namespace Mautic\\IntegrationsBundle\\DTO;

final class Note
{
    public const TYPE_WARNING = 'warning';

    public const TYPE_INFO    = 'info';

    private string \$type;

    public function __construct(
        private string \$note,
        string \$type
    ) {
        if (!in_array(\$type, [self::TYPE_INFO, self::TYPE_WARNING])) {
            throw new \\InvalidArgumentException(sprintf('Type value can be either \"%s\" or \"%s\".', self::TYPE_INFO, self::TYPE_WARNING));
        }

        \$this->type = \$type;
    }

    public function getNote(): string
    {
        return \$this->note;
    }

    public function getType(): string
    {
        return \$this->type;
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
        return "@bundles/IntegrationsBundle/DTO/Note.php";
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
        return new Source("", "@bundles/IntegrationsBundle/DTO/Note.php", "/app/docroot/app/bundles/IntegrationsBundle/DTO/Note.php");
    }
}
