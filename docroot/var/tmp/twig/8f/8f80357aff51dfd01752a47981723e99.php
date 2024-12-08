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

/* @bundles/PointBundle/Event/GroupScoreChangeEvent.php */
class __TwigTemplate_d5deb185b64880627a7dbdc66cdaec9a extends Template
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

namespace Mautic\\PointBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PointBundle\\Entity\\GroupContactScore;

final class GroupScoreChangeEvent
{
    public function __construct(
        private GroupContactScore \$groupContactScore,
        private int \$oldScore,
        private int \$newScore
    ) {
    }

    public function getGroupContactScore(): GroupContactScore
    {
        return \$this->groupContactScore;
    }

    public function getContact(): Lead
    {
        return \$this->groupContactScore->getContact();
    }

    public function getNewScore(): int
    {
        return \$this->newScore;
    }

    public function getOldScore(): int
    {
        return \$this->oldScore;
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
        return "@bundles/PointBundle/Event/GroupScoreChangeEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/GroupScoreChangeEvent.php", "/app/docroot/app/bundles/PointBundle/Event/GroupScoreChangeEvent.php");
    }
}
