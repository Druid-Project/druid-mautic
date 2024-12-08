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

/* @bundles/CoreBundle/Tests/Unit/Entity/IpAddressTest.php */
class __TwigTemplate_7c6e5e2db619eb3ab390ad529a958711 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Entity;

use Mautic\\CoreBundle\\Entity\\IpAddress;

class IpAddressTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testExactIp(): void
    {
        \$ipAddress = new IpAddress();
        \$ipAddress->setDoNotTrackList(
            [
                '192.168.0.1',
            ]
        );
        \$ipAddress->setIpAddress('192.168.0.1');
        \$this->assertFalse(\$ipAddress->isTrackable());

        \$ipAddress->setIpAddress('192.168.0.2');
        \$this->assertTrue(\$ipAddress->isTrackable());
    }

    public function testIpRange(): void
    {
        // HostMin:   172.16.0.1
        // HostMax:   172.31.255.255
        \$ipAddress = new IpAddress();
        \$ipAddress->setDoNotTrackList(
            [
                '172.16.0.0/12',
            ]
        );

        \$ipAddress->setIpAddress('172.16.0.1');
        \$this->assertFalse(\$ipAddress->isTrackable());

        \$ipAddress->setIpAddress('172.31.255.254');
        \$this->assertFalse(\$ipAddress->isTrackable());

        \$ipAddress->setIpAddress('172.15.1.32');
        \$this->assertTrue(\$ipAddress->isTrackable());

        \$ipAddress->setIpAddress('172.32.0.0');
        \$this->assertTrue(\$ipAddress->isTrackable());
    }

    public function testIpWildcard(): void
    {
        \$ipAddress = new IpAddress();
        \$ipAddress->setDoNotTrackList(
            [
                '172.15.1.*',
            ]
        );
        \$ipAddress->setIpAddress('172.15.1.1');
        \$this->assertFalse(\$ipAddress->isTrackable());

        \$ipAddress->setIpAddress('172.16.1.1');
        \$this->assertTrue(\$ipAddress->isTrackable());
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
        return "@bundles/CoreBundle/Tests/Unit/Entity/IpAddressTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Entity/IpAddressTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Entity/IpAddressTest.php");
    }
}
