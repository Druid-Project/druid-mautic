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

/* @bundles/PageBundle/Form/Type/PagePublishDatesType.php */
class __TwigTemplate_422741d56647e15f3b41c6f2558cad02 extends Template
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

use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\PublishDownDateType;
use Mautic\\CoreBundle\\Form\\Type\\PublishUpDateType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\PageBundle\\Entity\\Page;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 *
 * @extends AbstractType<Page>
 */
class PagePublishDatesType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber(['content' => 'html', 'customHtml' => 'html']));
        \$builder->addEventSubscriber(new FormExitSubscriber('page.page', \$options));

        \$builder->add('isPublished', YesNoButtonGroupType::class);
        \$builder->add('publishUp', PublishUpDateType::class);
        \$builder->add('publishDown', PublishDownDateType::class);
        \$builder->add('sessionId', HiddenType::class);
        \$builder->add('buttons', FormButtonsType::class, [
            'container_class' => 'lead-note-buttons',
            'apply_text'      => false,
            'save_text'       => 'mautic.core.form.save',
        ]);

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'data_class' => Page::class,
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
        return "@bundles/PageBundle/Form/Type/PagePublishDatesType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/PagePublishDatesType.php", "/app/docroot/app/bundles/PageBundle/Form/Type/PagePublishDatesType.php");
    }
}
