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

/* @bundles/LeadBundle/Form/Type/ContactGroupPointsType.php */
class __TwigTemplate_6184e8d0e6a44fc638ed9c89c9fbc194 extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\PointBundle\\Entity\\Group;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ContactGroupPointsType extends AbstractType
{
    private const SCORE_FIELD_PREFIX = 'score_group_';

    public function __construct(
        private TranslatorInterface \$translator
    ) {
    }

    public static function getFieldKey(int \$groupId): string
    {
        return self::SCORE_FIELD_PREFIX.\$groupId;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$pointGroups  = \$options['point_groups'] ?? [];

        /** @var Group \$group */
        foreach (\$pointGroups as \$group) {
            \$key = self::getFieldKey(\$group->getId());
            \$builder->add(
                \$key,
                IntegerType::class,
                [
                    'label'      => \$group->getName(),
                    'attr'       => [
                        'class'       => 'form-control',
                        'placeholder' => \$this->translator->trans('mautic.point.form.score_not_set'),
                    ],
                    'label_attr' => ['class' => 'control-label'],
                    'required'   => false,
                ]
            );
        }

        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'apply_text'     => false,
                'save_text'      => 'mautic.core.form.save',
                'cancel_onclick' => 'javascript:void(0);',
                'cancel_attr'    => [
                    'data-dismiss' => 'modal',
                ],
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(['point_groups']);
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
        return "@bundles/LeadBundle/Form/Type/ContactGroupPointsType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/ContactGroupPointsType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/ContactGroupPointsType.php");
    }
}
