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

/* @bundles/ConfigBundle/Service/ConfigChangeLogger.php */
class __TwigTemplate_7db88ed75329e724228f9144689d41ca extends Template
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

namespace Mautic\\ConfigBundle\\Service;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

/**
 * Compare normalized for data and log changes.
 */
class ConfigChangeLogger
{
    /**
     * Keys to remove from log.
     *
     * @var string[]
     */
    private array \$filterKeys = [
        'transifex_password',
        'mailer_is_owner',
    ];

    /**
     * @var mixed[]|null
     */
    private ?array \$originalNormData = null;

    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    /**
     * @return ConfigChangeLogger
     */
    public function setOriginalNormData(array \$originalNormData)
    {
        \$this->originalNormData = \$originalNormData;

        return \$this;
    }

    /**
     * Log changes if something was changed.
     * Diff is based on form normalized data before and after post.
     *
     * @see Form::getNormData()
     */
    public function log(array \$postNormData): void
    {
        if (null === \$this->originalNormData) {
            throw new \\RuntimeException('Set original normalized data at first');
        }

        \$originalData = \$this->normalizeData(\$this->originalNormData);
        \$postData     = \$this->filterData(\$this->normalizeData(\$postNormData));

        \$diff = [];
        foreach (\$postData as \$key => \$value) {
            if (array_key_exists(\$key, \$originalData) && \$originalData[\$key] != \$value) {
                if (\$value instanceof UploadedFile) {
                    \$value = \$value->getFilename();
                }

                \$diff[\$key] = \$value;
            }
        }

        if (empty(\$diff)) {
            return;
        }

        \$log = [
            'bundle'    => 'config',
            'object'    => 'config',
            'objectId'  => 0,
            'action'    => 'update',
            'details'   => \$diff,
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];

        \$this->auditLogModel->writeToLog(\$log);
    }

    /**
     * Some form data (AssetBundle) has 'parameters' inside array too.
     * Normalize all.
     */
    private function normalizeData(array \$data): array
    {
        \$key = 'parameters';

        \$normData = [];
        foreach (\$data as \$values) {
            if (array_key_exists(\$key, \$values)) {
                \$normData = array_merge(\$normData, \$values[\$key]);
            } else {
                \$normData = array_merge(\$normData, \$values);
            }
        }

        return \$normData;
    }

    /**
     * Filter unused keys from post data.
     */
    private function filterData(array \$data): array
    {
        \$keys = \$this->filterKeys;

        return array_filter(\$data, fn (\$key): bool => !in_array(\$key, \$keys),
            ARRAY_FILTER_USE_KEY);
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
        return "@bundles/ConfigBundle/Service/ConfigChangeLogger.php";
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
        return new Source("", "@bundles/ConfigBundle/Service/ConfigChangeLogger.php", "/app/docroot/app/bundles/ConfigBundle/Service/ConfigChangeLogger.php");
    }
}
