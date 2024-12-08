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

/* @bundles/LeadBundle/Form/Type/AddToCompanyActionType.php */
class __TwigTemplate_8f7d837cb7a90a133ff328e8e2240e95 extends Template
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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class AddToCompanyActionType extends AbstractType
{
    public function __construct(
        protected RouterInterface \$router
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'company',
            CompanyListType::class,
            [
                'multiple'    => false,
                'required'    => true,
                'modal_route' => false,
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.company.choosecompany.notblank']
                    ),
                ],
            ]
        );

        \$windowUrl = \$this->router->generate(
            'mautic_company_action',
            [
                'objectAction' => 'new',
                'contentOnly'  => 1,
                'updateSelect' => 'campaignevent_properties_company',
            ]
        );

        \$builder->add(
            'newCompanyButton',
            ButtonType::class,
            [
                'attr' => [
                    'class'   => 'btn btn-primary btn-nospin',
                    'onclick' => 'Mautic.loadNewWindow({\"windowUrl\": \"'.\$windowUrl.'\"})',
                    'icon'    => 'ri-add-line',
                ],
                'label' => 'mautic.company.new.company',
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'addtocompany_action';
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
        return "@bundles/LeadBundle/Form/Type/AddToCompanyActionType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/AddToCompanyActionType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/AddToCompanyActionType.php");
    }
}
