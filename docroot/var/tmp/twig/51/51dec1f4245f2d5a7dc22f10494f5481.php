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

/* @bundles/CategoryBundle/Model/ContactActionModel.php */
class __TwigTemplate_35be8a352a987d77bdfc7a16697e52d5 extends Template
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

namespace Mautic\\CategoryBundle\\Model;

use Mautic\\LeadBundle\\Model\\LeadModel;

class ContactActionModel
{
    public function __construct(
        private LeadModel \$contactModel
    ) {
    }

    public function addContactsToCategories(array \$contactIds, array \$categoryIds): void
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$this->contactModel->addToCategory(\$contact, \$categoryIds);
        }
    }

    public function removeContactsFromCategories(array \$contactIds, array \$categoryIds): void
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$contactCategoryRelations = \$this->contactModel->getLeadCategories(\$contact);
            \$relationsToDelete        = array_intersect(\$contactCategoryRelations, \$categoryIds);
            \$this->contactModel->removeFromCategories(\$relationsToDelete);
        }
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
        return "@bundles/CategoryBundle/Model/ContactActionModel.php";
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
        return new Source("", "@bundles/CategoryBundle/Model/ContactActionModel.php", "/app/docroot/app/bundles/CategoryBundle/Model/ContactActionModel.php");
    }
}
