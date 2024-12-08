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

/* @bundles/LeadBundle/Form/Type/CompanyListType.php */
class __TwigTemplate_748c145202f0077852d45b8b5d95e6b2 extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\EntityLookupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class CompanyListType extends AbstractType
{
    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'label'               => 'mautic.lead.lead.companies',
                'entity_label_column' => 'companyname',
                'modal_route'         => 'mautic_company_action',
                'modal_header'        => 'mautic.company.new.company',
                'model'               => 'lead.company',
                'ajax_lookup_action'  => 'lead:getLookupChoiceList',
                'model_lookup_method' => 'getLookupResults',
                'lookup_arguments'    => fn (Options \$options): array => [
                    'type'      => 'lead.company',
                ] + ((isset(\$options['model_lookup_method']) && ('getSimpleLookupResults' === \$options['model_lookup_method'])) ? ['exclude' => \$options['main_entity']] : []),
                'multiple'            => true,
                'main_entity'         => null,
            ]
        );
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return EntityLookupType::class;
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
        return "@bundles/LeadBundle/Form/Type/CompanyListType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/CompanyListType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/CompanyListType.php");
    }
}
