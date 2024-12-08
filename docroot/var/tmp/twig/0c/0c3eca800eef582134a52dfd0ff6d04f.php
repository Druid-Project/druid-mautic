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

/* @bundles/LeadBundle/Model/SegmentActionModel.php */
class __TwigTemplate_f153e555c2e3050031eba8d81b866e12 extends Template
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

namespace Mautic\\LeadBundle\\Model;

class SegmentActionModel
{
    public function __construct(
        private LeadModel \$contactModel
    ) {
    }

    public function addContacts(array \$contactIds, array \$segmentIds): void
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$this->contactModel->addToLists(\$contact, \$segmentIds);
        }

        \$this->contactModel->saveEntities(\$contacts);
    }

    public function removeContacts(array \$contactIds, array \$segmentIds): void
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$this->contactModel->removeFromLists(\$contact, \$segmentIds);
        }

        \$this->contactModel->saveEntities(\$contacts);
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
        return "@bundles/LeadBundle/Model/SegmentActionModel.php";
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
        return new Source("", "@bundles/LeadBundle/Model/SegmentActionModel.php", "/app/docroot/app/bundles/LeadBundle/Model/SegmentActionModel.php");
    }
}
