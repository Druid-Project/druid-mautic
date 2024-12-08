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

/* @bundles/PageBundle/Form/Type/CampaignEventPageHitType.php */
class __TwigTemplate_ccc1a213d3f1120e7fde91bf0ce16dad extends Template
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

namespace Mautic\\PageBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<array<mixed>>
 */
class CampaignEventPageHitType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('pages', PageListType::class, [
            'label'      => 'mautic.page.campaign.event.form.pages',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.page.campaign.event.form.pages.descr',
            ],
        ]);

        \$builder->add('url', TextType::class, [
            'label'      => 'mautic.page.campaign.event.form.url',
            'label_attr' => ['class' => 'control-label'],
            'required'   => false,
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.page.campaign.event.form.url.descr',
            ],
        ]);

        \$builder->add('referer', TextType::class, [
            'label'      => 'mautic.page.campaign.event.form.referer',
            'label_attr' => ['class' => 'control-label'],
            'required'   => false,
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.page.campaign.event.form.referer.descr',
            ],
        ]);
    }

    public function getBlockPrefix()
    {
        return 'campaignevent_pagehit';
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
        return "@bundles/PageBundle/Form/Type/CampaignEventPageHitType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/CampaignEventPageHitType.php", "/app/docroot/app/bundles/PageBundle/Form/Type/CampaignEventPageHitType.php");
    }
}
