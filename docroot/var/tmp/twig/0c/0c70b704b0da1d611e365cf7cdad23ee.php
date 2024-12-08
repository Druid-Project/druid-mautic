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

/* @bundles/ConfigBundle/Tests/Service/ConfigChangeLoggerTest.php */
class __TwigTemplate_ad7f5b001715508a60519701bf5453eb extends Template
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

namespace Mautic\\ConfigBundle\\Tests\\Service;

use Mautic\\ConfigBundle\\Service\\ConfigChangeLogger;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;

class ConfigChangeLoggerTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSetOriginalNormData(): void
    {
        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$auditLogModel  = \$this->createMock(AuditLogModel::class);
        \$logger         = new ConfigChangeLogger(\$ipLookupHelper, \$auditLogModel);

        \$this->assertEquals(\$logger, \$logger->setOriginalNormData([]));
    }

    public function testOriginalNormDataExpected(): void
    {
        \$this->expectException(\\RuntimeException::class);

        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$ipLookupHelper->expects(\$this->never())->method('getIpAddressFromRequest');
        \$auditLogModel = \$this->createMock(AuditLogModel::class);
        \$auditLogModel->expects(\$this->never())->method('writeToLog');
        \$logger = new ConfigChangeLogger(\$ipLookupHelper, \$auditLogModel);
        \$logger->log([]);
    }

    public function testNothingToLog(): void
    {
        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$ipLookupHelper->expects(\$this->never())->method('getIpAddressFromRequest');
        \$auditLogModel = \$this->createMock(AuditLogModel::class);
        \$auditLogModel->expects(\$this->never())->method('writeToLog');
        \$logger = new ConfigChangeLogger(\$ipLookupHelper, \$auditLogModel);

        \$originalData = \$postData = [
            'bundle' => [
                'key' => 'value',
            ],
        ];

        \$this->assertEquals(\$logger, \$logger->setOriginalNormData(\$originalData));
        \$logger->log(\$postData);
    }

    public function testLog(): void
    {
        \$change = [
            'key2' => 'changedValue',
        ];

        \$filterMe = [
            'transifex_password' => 'dhjsakjfda',
            'mailer_is_owner'    => 'lksajhd',
        ];

        \$log     = [
            'bundle'    => 'config',
            'object'    => 'config',
            'objectId'  => 0,
            'action'    => 'update',
            'details'   => \$change,
            'ipAddress' => null,
        ];

        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$ipLookupHelper->expects(\$this->once())->method('getIpAddressFromRequest');
        \$auditLogModel = \$this->createMock(AuditLogModel::class);
        \$auditLogModel->expects(\$this->once())->method('writeToLog')->with(\$log);
        \$logger = new ConfigChangeLogger(\$ipLookupHelper, \$auditLogModel);

        \$originalData = [
            'bundle' => [
                'key' => 'value',
            ],
            'bundle2' => [
                'parameters' => [
                    'key2' => 'value2',
                ],
            ],
        ];

        \$postData = [
            'bundle' => [
                'key' => 'value',
            ],
            'bundle2' => array_merge(\$change, \$filterMe),
        ];

        \$this->assertEquals(\$logger, \$logger->setOriginalNormData(\$originalData));
        \$logger->log(\$postData);
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
        return "@bundles/ConfigBundle/Tests/Service/ConfigChangeLoggerTest.php";
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
        return new Source("", "@bundles/ConfigBundle/Tests/Service/ConfigChangeLoggerTest.php", "/app/docroot/app/bundles/ConfigBundle/Tests/Service/ConfigChangeLoggerTest.php");
    }
}
