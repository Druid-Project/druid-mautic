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

/* @bundles/LeadBundle/Services/ContactColumnsDictionary.php */
class __TwigTemplate_2ca768e93099a74e1709abd65854eee0 extends Template
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

namespace Mautic\\LeadBundle\\Services;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ContactColumnsDictionary
{
    /**
     * @var mixed[]
     */
    private array \$fieldList = [];

    public function __construct(
        protected FieldModel \$fieldModel,
        private TranslatorInterface \$translator,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function getColumns(): array
    {
        \$columns = array_flip(\$this->coreParametersHelper->get('contact_columns', []));
        \$fields  = \$this->getFields();
        foreach (\$columns as \$alias=>&\$column) {
            if (isset(\$fields[\$alias])) {
                \$column = \$fields[\$alias];
            }
        }

        return \$columns;
    }

    public function getFields(): array
    {
        if ([] === \$this->fieldList) {
            \$this->fieldList['name']        = sprintf(
                '%s %s',
                \$this->translator->trans('mautic.core.firstname'),
                \$this->translator->trans('mautic.core.lastname')
            );
            \$this->fieldList['email']       = \$this->translator->trans('mautic.core.type.email');
            \$this->fieldList['location']    = \$this->translator->trans('mautic.lead.lead.thead.location');
            \$this->fieldList['stage']       = \$this->translator->trans('mautic.lead.stage.label');
            \$this->fieldList['points']      = \$this->translator->trans('mautic.lead.points');
            \$this->fieldList['last_active'] = \$this->translator->trans('mautic.lead.lastactive');
            \$this->fieldList['id']          = \$this->translator->trans('mautic.core.id');
            \$this->fieldList                = \$this->fieldList + \$this->fieldModel->getFieldList(false);
        }

        return \$this->fieldList;
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
        return "@bundles/LeadBundle/Services/ContactColumnsDictionary.php";
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
        return new Source("", "@bundles/LeadBundle/Services/ContactColumnsDictionary.php", "/app/docroot/app/bundles/LeadBundle/Services/ContactColumnsDictionary.php");
    }
}
