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

/* @bundles/LeadBundle/Form/Type/CampaignEventLeadDNCType.php */
class __TwigTemplate_8f8117fd109a8166b229d4e32014cbc2 extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class CampaignEventLeadDNCType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'channels',
            PreferenceChannelsType::class,
            [
                'label'       => 'mautic.lead.contact.channels',
                'multiple'    => true,
                'required'    => true,
                'constraints' => [
                    new NotBlank(),
                ],
            ]
        );

        \$builder->add(
            'reason',
            ChoiceType::class,
            [
                'choices'  => [
                    'mautic.lead.do.not.contact_bounced'      => DoNotContact::BOUNCED,
                    'mautic.lead.do.not.contact_unsubscribed' => DoNotContact::UNSUBSCRIBED,
                    'mautic.lead.do.not.contact_manual'       => DoNotContact::MANUAL,
                ],
                'label'      => 'mautic.lead.batch.dnc_reason',
                'required'   => false,
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]);
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
        return "@bundles/LeadBundle/Form/Type/CampaignEventLeadDNCType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/CampaignEventLeadDNCType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/CampaignEventLeadDNCType.php");
    }
}
