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

/* @bundles/EmailBundle/Form/Type/ExampleSendType.php */
class __TwigTemplate_a4b3216c302645d23a012214c2f4b273 extends Template
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

namespace Mautic\\EmailBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\LookupType;
use Mautic\\CoreBundle\\Form\\Type\\SortableListType;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @extends AbstractType<mixed>
 */
class ExampleSendType extends AbstractType
{
    public function __construct(private TranslatorInterface \$translator, private CorePermissions \$security, private UserHelper \$userHelper)
    {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'emails',
            SortableListType::class,
            [
                'entry_type'       => EmailType::class,
                'label'            => 'mautic.email.example_recipients',
                'add_value_button' => 'mautic.email.add_recipient',
                'option_notblank'  => false,
            ]
        );

        if (\$this->security->isAdmin()
            || \$this->security->hasEntityAccess(
                'lead:leads:viewown',
                'lead:leads:viewother',
                \$this->userHelper->getUser()->getId()
            )) {
            \$builder->add(
                'contact',
                LookupType::class,
                [
                    'attr' => [
                        'class'                => 'form-control',
                        'data-callback'        => 'activateContactLookupField',
                        'data-toggle'          => 'field-lookup',
                        'data-lookup-callback' => 'updateContactLookupListFilter',
                        'data-chosen-lookup'   => 'lead:contactList',
                        'placeholder'          => \$this->translator->trans(
                            'mautic.lead.list.form.startTyping'
                        ),
                        'data-no-record-message' => \$this->translator->trans(
                            'mautic.core.form.nomatches'
                        ),
                    ],
                ]
            );

            \$builder->add(
                'contact_id',
                HiddenType::class
            );
        }

        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'apply_text' => false,
                'save_text'  => 'mautic.email.send',
                'save_icon'  => 'ri-send-plane-line',
            ]
        );
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
        return "@bundles/EmailBundle/Form/Type/ExampleSendType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/ExampleSendType.php", "/app/docroot/app/bundles/EmailBundle/Form/Type/ExampleSendType.php");
    }
}
