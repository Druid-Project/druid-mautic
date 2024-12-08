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

/* @bundles/CampaignBundle/Form/Type/CampaignListType.php */
class __TwigTemplate_1b966bd0101c0ce8327b17bd0bc5fd3d extends Template
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

namespace Mautic\\CampaignBundle\\Form\\Type;

use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @extends AbstractType<mixed>
 */
class CampaignListType extends AbstractType
{
    /**
     * @var bool
     */
    private \$canViewOther = false;

    public function __construct(
        private CampaignModel \$model,
        protected TranslatorInterface \$translator,
        CorePermissions \$security
    ) {
        \$this->canViewOther = \$security->isGranted('campaign:campaigns:viewother');
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'choices'      => function (Options \$options): array {
                    \$choices   = [];
                    \$campaigns = \$this->model->getRepository()->getPublishedCampaigns(null, null, true, \$this->canViewOther);
                    foreach (\$campaigns as \$campaign) {
                        \$choices[\$campaign['name']] = \$campaign['id'];
                    }

                    // sort by language
                    ksort(\$choices);

                    if (\$options['include_this']) {
                        \$choices = [\$options['this_translation'] => 'this'] + \$choices;
                    }

                    return \$choices;
                },
                'placeholder'       => false,
                'expanded'          => false,
                'multiple'          => true,
                'required'          => false,
                'include_this'      => false,
                'this_translation'  => 'mautic.campaign.form.thiscampaign',
            ]
        );
    }

    public function getParent()
    {
        return ChoiceType::class;
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
        return "@bundles/CampaignBundle/Form/Type/CampaignListType.php";
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
        return new Source("", "@bundles/CampaignBundle/Form/Type/CampaignListType.php", "/app/docroot/app/bundles/CampaignBundle/Form/Type/CampaignListType.php");
    }
}
