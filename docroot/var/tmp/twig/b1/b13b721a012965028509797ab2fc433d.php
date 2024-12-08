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

/* @bundles/CoreBundle/Tests/CommonMocks.php */
class __TwigTemplate_b61a2866ab47b6aa8f742155dc973663 extends Template
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

namespace Mautic\\CoreBundle\\Tests;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\BundleHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\CoreBundle\\Translation\\Translator;
use PHPUnit\\Framework\\MockObject\\MockObject;

abstract class CommonMocks extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @return MockObject&Translator
     */
    protected function getTranslatorMock()
    {
        \$translator = \$this->createMock(Translator::class);
        \$translator->method('hasId')
            ->will(\$this->returnValue(false));

        return \$translator;
    }

    /**
     * @return MockObject&EntityManager
     */
    protected function getEntityManagerMock()
    {
        return \$this->createMock(EntityManager::class);
    }

    /**
     * @return MockObject&PathsHelper
     */
    protected function getPathsHelperMock()
    {
        return \$this->createMock(PathsHelper::class);
    }

    /**
     * @return MockObject&CoreParametersHelper
     */
    protected function getCoreParametersHelperMock()
    {
        return \$this->createMock(CoreParametersHelper::class);
    }

    /**
     * @return MockObject&BundleHelper
     */
    protected function getBundleHelperMock()
    {
        return \$this->createMock(BundleHelper::class);
    }

    /**
     * @return MockObject&IpLookupHelper
     */
    protected function getIpLookupHelperMock()
    {
        return \$this->createMock(IpLookupHelper::class);
    }

    /**
     * @return MockObject&AuditLogModel
     */
    protected function getAuditLogModelMock()
    {
        return \$this->createMock(AuditLogModel::class);
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
        return "@bundles/CoreBundle/Tests/CommonMocks.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/CommonMocks.php", "/app/docroot/app/bundles/CoreBundle/Tests/CommonMocks.php");
    }
}
