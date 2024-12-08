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

/* @bundles/LeadBundle/Form/Type/NoteType.php */
class __TwigTemplate_93adfcf0e1b0ef7373df9eed5091d1e2 extends Template
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

use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Entity\\LeadNote;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<LeadNote>
 */
class NoteType extends AbstractType
{
    private DateTimeHelper \$dateHelper;

    public function __construct()
    {
        \$this->dateHelper = new DateTimeHelper();
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber(['text' => 'html']));
        \$builder->addEventSubscriber(new FormExitSubscriber('lead.note', \$options));

        \$builder->add(
            'text',
            TextareaType::class,
            [
                'label'      => 'mautic.lead.note.form.text',
                'label_attr' => ['class' => 'control-label sr-only'],
                'attr'       => ['class' => 'mousetrap form-control editor', 'rows' => 10, 'autofocus' => 'autofocus'],
            ]
        );

        \$builder->add(
            'type',
            ChoiceType::class,
            [
                'label'             => 'mautic.lead.note.form.type',
                'choices'           => [
                    'mautic.lead.note.type.general' => 'general',
                    'mautic.lead.note.type.email'   => 'email',
                    'mautic.lead.note.type.call'    => 'call',
                    'mautic.lead.note.type.meeting' => 'meeting',
                ],
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]
        );

        \$dt   = \$options['data']->getDatetime();
        \$data = (null == \$dt) ? \$this->dateHelper->getDateTime() : \$dt;

        \$builder->add(
            'dateTime',
            DateTimeType::class,
            [
                'label'      => 'mautic.core.date.added',
                'label_attr' => ['class' => 'control-label'],
                'widget'     => 'single_text',
                'attr'       => [
                    'class'       => 'form-control',
                    'data-toggle' => 'datetime',
                    'preaddon'    => 'ri-calendar-line',
                ],
                'format' => 'yyyy-MM-dd HH:mm',
                'html5'  => false,
                'data'   => \$data,
            ]
        );

        \$builder->add('buttons', FormButtonsType::class, [
            'apply_text' => false,
            'save_text'  => 'mautic.core.form.save',
        ]);

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'data_class' => LeadNote::class,
        ]);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'leadnote';
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
        return "@bundles/LeadBundle/Form/Type/NoteType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/NoteType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/NoteType.php");
    }
}
