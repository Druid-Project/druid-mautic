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

/* @bundles/PageBundle/Form/Type/PreferenceCenterListType.php */
class __TwigTemplate_77f7f2b3be5aa66f91e65ff81e0dd2ce extends Template
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

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\PageBundle\\Entity\\Page;
use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Page>
 */
class PreferenceCenterListType extends AbstractType
{
    /**
     * @var bool
     */
    private \$canViewOther = false;

    public function __construct(
        private PageModel \$model,
        CorePermissions \$corePermissions
    ) {
        \$this->canViewOther = \$corePermissions->isGranted('page:pages:viewother');
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$model        = \$this->model;
        \$canViewOther = \$this->canViewOther;

        \$resolver->setDefaults(
            [
                'choices' => function (Options \$options) use (\$model, \$canViewOther): array {
                    \$choices = [];
                    \$pages   = \$model->getRepository()->getPageList('', 0, 0, \$canViewOther, \$options['top_level'], \$options['ignore_ids'], ['isPreferenceCenter']);
                    foreach (\$pages as \$page) {
                        if (\$page['isPreferenceCenter']) {
                            \$choices[\$page['language']][\"{\$page['title']} ({\$page['id']})\"] = \$page['id'];
                        }
                    }

                    // sort by language
                    ksort(\$choices);

                    foreach (\$choices as &\$pages) {
                        ksort(\$pages);
                    }

                    return \$choices;
                },
                'placeholder'       => false,
                'expanded'          => false,
                'multiple'          => true,
                'required'          => false,
                'top_level'         => 'variant',
                'ignore_ids'        => [],
            ]
        );

        \$resolver->setDefined(['top_level', 'ignore_ids']);
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
        return "@bundles/PageBundle/Form/Type/PreferenceCenterListType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/PreferenceCenterListType.php", "/app/docroot/app/bundles/PageBundle/Form/Type/PreferenceCenterListType.php");
    }
}
