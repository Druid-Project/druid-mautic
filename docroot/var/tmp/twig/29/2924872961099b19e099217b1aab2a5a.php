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

/* @bundles/CoreBundle/Form/Type/IpLookupDownloadDataStoreButtonType.php */
class __TwigTemplate_150e5cb627bb350b2d4e30470c6dd2ea extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Mautic\\CoreBundle\\IpLookup\\AbstractLocalDataLookup;
use Mautic\\CoreBundle\\Twig\\Helper\\DateHelper;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @extends AbstractType<mixed>
 */
class IpLookupDownloadDataStoreButtonType extends AbstractType
{
    public function __construct(
        private DateHelper \$dateHelper,
        private TranslatorInterface \$translator
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$localDataExists = file_exists(\$options['ip_lookup_service']->getLocalDataStoreFilepath());

        \$builder->add(
            'fetch_button',
            ButtonType::class,
            [
                'label' => (\$localDataExists) ? 'mautic.core.ip_lookup.update_data' : 'mautic.core.ip_lookup.fetch_data',
                'attr'  => [
                    'class'   => 'btn btn-tertiary btn-sm',
                    'onclick' => 'Mautic.downloadIpLookupDataStore()',
                ],
            ]
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(['ip_lookup_service' => null]);
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        if (null !== \$options['ip_lookup_service'] && \$options['ip_lookup_service'] instanceof AbstractLocalDataLookup) {
            \$localFilePath   = \$options['ip_lookup_service']->getLocalDataStoreFilepath();
            \$localDataExists = file_exists(\$localFilePath);
            if (\$localDataExists && \$lastModifiedTimestamp = filemtime(\$localFilePath)) {
                \$lastModified                            = \$this->dateHelper->toText(\$lastModifiedTimestamp, 'UTC', 'U');
                \$view->vars['ipDataStoreLastDownloaded'] = \$this->translator->trans(
                    'mautic.core.ip_lookup.last_updated',
                    ['%date%' => \$lastModified]
                );
            }
        }
    }

    public function getBlockPrefix()
    {
        return 'iplookup_download_data_store_button';
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
        return "@bundles/CoreBundle/Form/Type/IpLookupDownloadDataStoreButtonType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/IpLookupDownloadDataStoreButtonType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/IpLookupDownloadDataStoreButtonType.php");
    }
}
